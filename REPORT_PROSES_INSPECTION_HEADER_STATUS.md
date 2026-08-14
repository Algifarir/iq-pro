# Report Tabel `proses_inspection_header` dan Flow Status Engine

Tanggal draft: 13 Agustus 2026

## 1. Ringkasan

Tabel `proses_inspection_header` adalah tabel utama untuk menyimpan data header inspeksi engine yang masih aktif atau masih perlu ditindaklanjuti. Tabel ini menyimpan identitas inspeksi, nomor engine, area test bench, operator, status proses, final judgement, bulan/tahun, dan informasi tambahan seperti ECU/IP number serta supply pump.

Dari pembacaan kode, status utama pada flow engine adalah:

- `OPEN`
- `ENGINE OK`
- `PENDING`
- `REWORK`
- `SDI`
- `ENGINE FAIL` pada beberapa halaman lama

Status yang paling penting untuk dipahami:

- `OPEN`: inspeksi baru dibuat dan masih dalam proses pengisian.
- `ENGINE OK`: inspeksi sudah selesai dan dinyatakan OK.
- `SDI`: inspeksi selesai tetapi masuk jalur SDI/Form SDI, kemungkinan perlu handling khusus setelah proses test.

Catatan penting: pada flow saat ini, data `ENGINE OK` tidak dibiarkan di `proses_inspection_header`. Setelah final judgement disimpan, data dicopy ke `proses_inspection_header_log`, lalu dihapus dari tabel aktif jika statusnya `ENGINE OK`.

## 2. Struktur Tabel

DDL yang diberikan:

```sql
CREATE TABLE IF NOT EXISTS `proses_inspection_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_code` varchar(255) DEFAULT NULL,
  `inspection_number` varchar(255) DEFAULT NULL,
  `inspection_date` varchar(255) DEFAULT NULL,
  `inspection_time` varchar(255) DEFAULT NULL,
  `inspection_area` varchar(255) DEFAULT NULL,
  `inspection_engine_number` varchar(255) DEFAULT NULL,
  `inspection_engine_model` varchar(255) DEFAULT NULL,
  `faktor_koreksi` varchar(255) DEFAULT NULL,
  `operator_name` varchar(255) DEFAULT NULL,
  `ip_number` varchar(255) DEFAULT NULL,
  `desc_running` varchar(255) DEFAULT NULL,
  `desc_performance` varchar(255) DEFAULT NULL,
  `desc_final` varchar(255) DEFAULT NULL,
  `approve_name` varchar(255) DEFAULT NULL,
  `created_fname` varchar(255) DEFAULT NULL,
  `inspection_name` varchar(255) DEFAULT NULL,
  `inspection_status` varchar(255) DEFAULT NULL,
  `final_judgement` varchar(255) DEFAULT NULL,
  `bln` varchar(255) DEFAULT NULL,
  `thn` varchar(255) DEFAULT NULL,
  `user_input` varchar(255) DEFAULT NULL,
  `inspection_update_status` varchar(255) DEFAULT NULL,
  `sts_data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_insp_num` (`inspection_number`)
) ENGINE=MyISAM AUTO_INCREMENT=125959 DEFAULT CHARSET=latin1;
```

## 3. Fungsi Kolom Utama

| Kolom | Fungsi |
| --- | --- |
| `id` | Primary key auto increment. |
| `form_code` | Kode tipe form engine, contoh dari master form seperti `6D16T`, `4D34 TD T5`, dan sejenisnya. |
| `inspection_number` | Nomor unik inspeksi, dibuat saat generate form. Format terlihat seperti `form_code.bulan+tahun.nomor_urut`. |
| `inspection_date` | Tanggal dan waktu inspeksi. Saat ini bertipe `varchar`, bukan `datetime`. |
| `inspection_time` | Penanda waktu/proses tambahan. |
| `inspection_area` | Area/test bench inspeksi. |
| `inspection_engine_number` | Nomor engine yang diperiksa. |
| `inspection_engine_model` | Model engine. |
| `faktor_koreksi` | Di form disebut `No. Supply Pump`. |
| `operator_name` | Nama operator yang mengerjakan/update inspeksi. |
| `ip_number` | Di form disebut `No. ECU`, meskipun nama kolomnya `ip_number`. |
| `desc_running` | Catatan akhir/proses running. |
| `desc_performance` | Catatan performance. |
| `desc_final` | Catatan final. |
| `inspection_status` | Status operasional saat ini. Ini kolom utama untuk dashboard/list. |
| `final_judgement` | Keputusan akhir. Pada update final, nilainya disamakan dengan `inspection_status`. |
| `bln` | Bulan inspeksi, dipakai saat generate nomor inspeksi. |
| `thn` | Tahun inspeksi, dipakai saat generate nomor inspeksi. |
| `user_input` | User terakhir/pembuat data. |
| `inspection_update_status` | Flag update legacy, terlihat diisi `1` saat data dibuat. |
| `sts_data` | Belum terlihat jelas pemakaiannya pada flow utama. |

## 4. Arti Status

### 4.1 `OPEN`

`OPEN` adalah status awal ketika operator membuat form inspeksi engine.

Lokasi pembuatan:

- `dashboard.php?aksi=tambah`: user memilih type form, engine number, ECU, supply pump, dan test bench.
- Submit ke `gnrt_number.php`.
- Di `gnrt_number.php`, variable `$sts` diisi `OPEN`.
- Data insert ke `proses_inspection_header` dengan `inspection_status='OPEN'` dan `final_judgement='OPEN'`.

Flow:

```text
dashboard.php?aksi=tambah
  -> gnrt_number.php
    -> insert proses_inspection_header status OPEN
    -> insert proses_inspection_detail dari master item
    -> copy awal ke proses_inspection_header_log
    -> copy awal ke proses_inspection_detail_log
    -> redirect ke ct_2x.php
```

Makna bisnis:

- Form inspeksi sudah dibuat.
- Engine sedang atau akan diperiksa.
- Data masih aktif di `proses_inspection_header`.
- Muncul di dashboard `STATUS OPEN`.

File yang menampilkan:

- `dashboard.php`
- `monitoring/mon_tesbench.php`
- dashboard engine lama seperti `mst_isi.php`

### 4.2 `ENGINE OK`

`ENGINE OK` adalah final judgement bahwa inspeksi engine selesai dan hasilnya OK.

Lokasi pemilihan:

- `dashboard.php?aksi=last`
- Form final judgement menyediakan radio button `ENGINE OK`.

Lokasi penyimpanan:

- `update_vernumber.php`

Yang dilakukan kode:

```text
update proses_inspection_header
  set final_judgement = 'ENGINE OK',
      inspection_status = 'ENGINE OK'

update proses_inspection_detail
  set inspection_status = 'ENGINE OK'

insert into proses_inspection_header_log
  select * from proses_inspection_header

insert into proses_inspection_detail_log
  select * from proses_inspection_detail

delete from proses_inspection_header
  where final_judgement = 'ENGINE OK'

delete from proses_inspection_detail
  where inspection_status = 'ENGINE OK'
```

Flow:

```text
ct_2x.php
  -> dashboard.php?aksi=last
    -> pilih final_judgement ENGINE OK
      -> update_vernumber.php
        -> copy ke proses_inspection_header_log
        -> copy ke proses_inspection_detail_log
        -> hapus dari tabel aktif
        -> dashboard_ok.php
```

Makna bisnis:

- Inspeksi sudah selesai.
- Data dianggap closed/done.
- Data utama untuk laporan OK berada di `proses_inspection_header_log`.
- Data tidak lagi muncul di list aktif `proses_inspection_header`.

File yang menampilkan:

- `dashboard_ok.php`
- `dashboard_ok2.php`
- `monitoring/mon_ok.php`
- `monitoring/mon_tesbench.php`
- `monitoring/export_excel.php`

Catatan penting:

- Jika mencari data `ENGINE OK`, jangan hanya melihat `proses_inspection_header`, karena data OK dihapus dari tabel aktif.
- Sumber data OK yang lebih benar adalah `proses_inspection_header_log`.

### 4.3 `SDI`

`SDI` adalah salah satu final judgement selain OK, Pending, dan Rework. Dari kode, SDI diperlakukan sebagai status khusus yang tetap punya dashboard/form sendiri.

Lokasi pemilihan:

- `dashboard.php?aksi=last`
- Form final judgement menyediakan radio button `SDI`.

Lokasi penyimpanan:

- `update_vernumber.php`

Yang dilakukan kode:

```text
update proses_inspection_header
  set final_judgement = 'SDI',
      inspection_status = 'SDI'

update proses_inspection_detail
  set inspection_status = 'SDI'

insert into proses_inspection_header_log
insert into proses_inspection_detail_log

redirect dashboard_sdi.php
```

Flow:

```text
ct_2x.php
  -> dashboard.php?aksi=last
    -> pilih final_judgement SDI
      -> update_vernumber.php
        -> update status menjadi SDI
        -> copy ke log
        -> tetap ada di tabel aktif
        -> dashboard_sdi.php
```

Makna bisnis berdasarkan kode:

- Engine tidak masuk jalur `ENGINE OK`.
- Data masuk antrian/status khusus SDI.
- Masih ditampilkan dari `proses_inspection_header`, bukan hanya dari log.
- Bisa dibuka melalui menu `SDI Form`.

File yang menampilkan:

- `dashboard_sdi.php`
- `dashboard_sdi2.php`
- `monitoring/mon_tesbench.php`
- `monitoring/export_excel.php`
- beberapa view detail di folder `monitoring/`

Catatan interpretasi:

- Kode tidak menjelaskan kepanjangan SDI secara eksplisit.
- Secara flow aplikasi, SDI adalah status final/lanjutan yang dipilih setelah inspeksi, dan memiliki dashboard khusus untuk tindak lanjut.
- Untuk dokumen resmi ke user, arti bisnis SDI sebaiknya dikonfirmasi ke PIC proses quality/inspection.

### 4.4 `PENDING`

`PENDING` adalah final judgement ketika inspeksi belum bisa dinyatakan selesai/OK dan perlu ditunda.

Lokasi:

- Dipilih di `dashboard.php?aksi=last`.
- Disimpan oleh `update_vernumber.php`.
- Ditampilkan di `dashboard_pending.php`, `dashboard_pending2.php`, dan `monitoring/mon_pending.php`.

Ada juga proses otomatis:

- `auto_update_refresh.php` mengubah data dengan `final_judgement='OPEN'` dan tanggal inspeksi sebelum hari ini menjadi `PENDING`.

Makna bisnis:

- Data inspeksi belum selesai/masih menunggu.
- Tetap berada di tabel aktif `proses_inspection_header`.

### 4.5 `REWORK`

`REWORK` adalah final judgement ketika hasil inspeksi perlu perbaikan/pengerjaan ulang.

Lokasi:

- Dipilih di `dashboard.php?aksi=last`.
- Disimpan oleh `update_vernumber.php`.
- Ditampilkan di `dashboard_rework.php`, `dashboard_rework2.php`, dan `monitoring/mon_rework.php`.

Makna bisnis:

- Engine perlu proses rework.
- Data tetap berada di tabel aktif `proses_inspection_header`.

## 5. Flow Besar Status Engine

```text
1. Create Form
   dashboard.php?aksi=tambah
     -> gnrt_number.php
     -> status awal OPEN

2. Isi Form Inspection
   ct_2x.php
     -> item detail running/performance/visual diisi

3. Final Process
   dashboard.php?aksi=last
     -> user memilih final judgement:
        - ENGINE OK
        - PENDING
        - REWORK
        - SDI

4. Save Final Judgement
   update_vernumber.php
     -> inspection_status = final_judgement
     -> final_judgement = pilihan user
     -> copy header/detail ke tabel log

5. Setelah Save
   ENGINE OK
     -> pindah ke dashboard_ok.php
     -> data aktif dihapus dari proses_inspection_header
     -> data laporan ada di proses_inspection_header_log

   PENDING
     -> pindah ke dashboard_pending.php
     -> data tetap di proses_inspection_header

   REWORK
     -> pindah ke dashboard_rework.php
     -> data tetap di proses_inspection_header

   SDI
     -> pindah ke dashboard_sdi.php
     -> data tetap di proses_inspection_header
```

## 6. Hubungan Tabel Aktif dan Log

Tabel aktif:

- `proses_inspection_header`
- `proses_inspection_detail`

Tabel log/history:

- `proses_inspection_header_log`
- `proses_inspection_detail_log`

Pola yang terlihat:

- Saat form dibuat, data aktif juga langsung dicopy ke log.
- Saat final judgement disimpan, data aktif dicopy lagi ke log.
- Jika judgement `ENGINE OK`, data aktif dihapus.
- Jika judgement `PENDING`, `REWORK`, atau `SDI`, data tetap berada di tabel aktif.

Implikasi:

- `proses_inspection_header` bukan arsip semua inspeksi.
- `proses_inspection_header` lebih tepat dibaca sebagai tabel pekerjaan aktif/non-OK.
- `proses_inspection_header_log` lebih tepat dibaca sebagai tabel riwayat/laporan.

## 7. Dampak ke Dashboard dan Performance

Dashboard lama banyak memakai query berdasarkan status:

```sql
SELECT * FROM proses_inspection_header WHERE inspection_status = 'OPEN';
SELECT * FROM proses_inspection_header WHERE inspection_status = 'PENDING';
SELECT * FROM proses_inspection_header WHERE inspection_status = 'REWORK';
SELECT * FROM proses_inspection_header WHERE inspection_status = 'SDI';
SELECT * FROM proses_inspection_header_log WHERE inspection_status = 'ENGINE OK';
```

Untuk dashboard count/report, status ini sering dihitung:

- `OPEN`
- `SDI`
- `ENGINE OK`
- `REWORK`
- `PENDING`

Karena tabel log bisa tumbuh besar, query dashboard dan monitoring akan semakin berat jika index belum cukup.

Index saat ini:

```sql
KEY `idx_insp_num` (`inspection_number`)
```

Index ini bagus untuk pencarian per nomor inspeksi, tetapi belum cukup untuk query dashboard yang memfilter status, tanggal, area, atau engine number.

## 8. Rekomendasi Teknis

### 8.1 Index awal yang perlu dipertimbangkan

Untuk tabel aktif:

```sql
ALTER TABLE proses_inspection_header
  ADD INDEX idx_status_date (inspection_status, inspection_date),
  ADD INDEX idx_status_id (inspection_status, id),
  ADD INDEX idx_engine_number (inspection_engine_number);
```

Untuk tabel log:

```sql
ALTER TABLE proses_inspection_header_log
  ADD INDEX idx_status_date (inspection_status, inspection_date),
  ADD INDEX idx_area_date_status (inspection_area, inspection_date, inspection_status),
  ADD INDEX idx_engine_number (inspection_engine_number);
```

Catatan:

- Karena `inspection_date` masih `varchar`, index tanggal tidak seoptimal kolom `datetime`.
- Sebelum diterapkan ke production, index harus dites dulu di copy database/local.

### 8.2 Perbaikan model data jangka menengah

Untuk refactoring/Laravel nanti:

- Ubah `inspection_date` menjadi `datetime`.
- Jadikan `inspection_status` enum/domain value yang jelas.
- Pisahkan konsep `current_status` dan `final_judgement` jika memang maknanya berbeda.
- Buat tabel status history agar perubahan status tidak bergantung pada copy seluruh row ke log.
- Hindari `insert into ... select *` karena rawan rusak jika struktur tabel aktif dan log tidak identik.

### 8.3 Perbaikan flow

Hal yang perlu diperjelas ke user/PIC:

- Definisi resmi `SDI`.
- Apakah `SDI`, `PENDING`, dan `REWORK` memang harus tetap berada di tabel aktif.
- Apakah `ENGINE OK` memang harus dihapus dari tabel aktif.
- Apakah data log boleh berisi beberapa snapshot untuk inspection number yang sama.

## 9. Kesimpulan

`proses_inspection_header` adalah tabel kerja utama untuk inspeksi engine. Status awalnya adalah `OPEN`, dibuat oleh `gnrt_number.php` saat user membuat form. Setelah form selesai, user memilih final judgement di `dashboard.php?aksi=last`, lalu `update_vernumber.php` menyamakan `inspection_status` dengan pilihan tersebut.

Dalam flow saat ini:

- `OPEN` berarti form baru/masih berjalan.
- `ENGINE OK` berarti inspeksi selesai OK dan datanya dipindahkan ke log.
- `SDI` berarti inspeksi masuk jalur khusus SDI dan tetap muncul di dashboard SDI.
- `PENDING` berarti inspeksi tertunda.
- `REWORK` berarti inspeksi perlu perbaikan.

Untuk kebutuhan refactoring, status engine ini adalah salah satu domain penting yang harus didokumentasikan lebih dulu sebelum migrasi ke Laravel, karena status menentukan dashboard, monitoring, laporan, dan pemindahan data aktif ke log.
