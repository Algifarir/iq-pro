# Proposal Pembaharuan Aplikasi IQ-Pro dengan Strangler Fig Approach

Tanggal draft: 13 Agustus 2026

## 1. Ringkasan

IQ-Pro saat ini masih berjalan sebagai aplikasi legacy PHP 5 dengan struktur file PHP langsung, query database tersebar di halaman, dan beberapa proses dashboard/monitoring yang membaca tabel berisi jutaan baris. Kondisi ini membuat perubahan besar berisiko tinggi apabila dilakukan dengan cara rewrite total.

Pendekatan yang disarankan adalah **Strangler Fig Approach**, yaitu memperbarui aplikasi secara bertahap per fitur/flow sambil aplikasi lama tetap berjalan. Fitur baru dibuat di struktur yang lebih modern, lalu traffic/penggunaan dipindahkan sedikit demi sedikit dari file legacy ke modul baru.

Tujuan utamanya:

- Aplikasi tetap bisa dipakai selama proses pembaharuan.
- Risiko downtime dan regresi fitur lebih kecil.
- Fitur yang paling bermasalah bisa diperbaiki lebih dulu.
- Migrasi ke platform baru seperti Laravel 12 dapat dilakukan bertahap, bukan sekali besar.

## 2. Kondisi Aplikasi Saat Ini

### 2.1 Teknologi dan struktur

Aplikasi saat ini menggunakan pola legacy berikut:

- PHP 5.
- Ekstensi database `mysql_*`.
- Routing manual menggunakan parameter seperti `index.php?pilih=home`.
- View, query database, validasi, dan business logic masih bercampur dalam satu file.
- Session dan hak akses tersebar di beberapa entry point.
- Banyak file PHP langsung menjadi halaman, endpoint AJAX, dan proses submit.

Contoh file utama:

- `index.php`: shell dashboard utama dan menu engine/transmisi.
- `tm_login.php`: halaman login TM.
- `cek_login_tm.php`: proses login TM dan redirect berdasarkan role.
- `dashboard_tm_pdi2.php`: dashboard utama role PDI TM Assy.
- `dashboard_tm_ok_pdi.php`: daftar data TM yang sudah OK.
- `ct_tm_pdi2.php`: form proses inspeksi TM PDI.
- `tm_last_processpdi.php`: proses akhir, foto, dan judgement.
- `tm_update_vernumberpdi.php`: simpan judgement dan foto.
- `mst_isi.php`: dashboard engine lama.
- `transmisi/dhb_trans.php`: dashboard transmisi lama.

### 2.2 Masalah utama yang terlihat

Masalah yang menjadi prioritas:

- Dashboard engine dan transmisi lambat karena menjalankan query agregasi ke tabel besar.
- Saat dashboard lama diproses, user harus menunggu dan sulit langsung pindah ke menu lain.
- Masih bergantung pada PHP 5 dan ekstensi `mysql_*`, sehingga tidak langsung kompatibel dengan PHP 8.
- Struktur kode membuat perubahan kecil tetap berisiko karena logic bercampur di banyak file.
- Beberapa fitur mobile/PWA seperti kamera bisa berbeda perilakunya antar browser.
- Belum ada dokumentasi flow dan route yang jelas untuk tiap role.

## 3. Fitur yang Ada

### 3.1 Authentication dan role

Login TM menggunakan:

- `tm_login.php`
- `cek_login_tm.php`

Flow login:

```text
tm_login.php
  -> cek_login_tm.php
    -> jika level Admin: dashboard_tm.php
    -> jika level PDI TM Assy: dashboard_tm_pdi2.php
    -> selain itu: dashboard_tm.php
```

Hak akses pada dashboard utama juga terkait dengan:

- `master_user`
- `master_menu`
- `master_menu_user`

### 3.2 Dashboard engine

Entry point utama:

- `index.php?pilih=home`
- `mst_isi.php`

Fungsi:

- Menampilkan ringkasan proses engine.
- Menampilkan count status seperti open, ok, rework, pending.
- Menampilkan chart/monitoring terkait inspection engine.

Tabel utama:

- `proses_inspection_header`
- `proses_inspection_detail`
- `proses_inspection_header_log`
- `proses_inspection_detail_log`

### 3.3 Dashboard transmisi

Entry point utama:

- `index.php?pilih=4.9`
- `transmisi/dhb_trans.php`

Fungsi:

- Menampilkan ringkasan proses transmisi.
- Menampilkan count status seperti open, ok, rework, pending.
- Menjadi pintu ke monitoring transmisi.

Tabel utama:

- `transmisi_proses_inspection_header`
- `transmisi_proses_inspection_detail`
- `transmisi_proses_inspection_header_log`
- `transmisi_proses_inspection_detail_log`

### 3.4 Modul master data

Contoh master data engine:

- `masterarea/mst_area.php`
- `masterengine/mst_engine.php`
- `masterinspection/mst_type_form.php`
- `masterinspection/mst_item_inspection.php`
- `masterimage/mst_image_form.php`

Contoh master data transmisi:

- `motoringarea/mst_area_motoring.php`
- `motoringtransmisi/mst_transmisi.php`
- `motoringform/mst_type_form_tm.php`
- `motoringimage/mst_image_form_tm.php`
- `motoringleak/mst_item_inspection_tm.php`

### 3.5 Monitoring dan search

Monitoring engine:

- `monitoring/mon_tesbench.php`
- `monitoring_chart.php`
- `monitoring/mon_inspection.php`
- `monitoring/mon_all.php`
- `monitoring/mon_ok.php`
- `monitoring/mon_rework.php`
- `monitoring/mon_pending.php`
- `monitoring/mon_search.php`

Monitoring transmisi:

- `transmisi/transmisi_mon_all.php`
- `transmisi/transmisi_mon_ok.php`
- `transmisi/transmisi_mon_rework.php`
- `transmisi/transmisi_mon_pending.php`
- `transmisi/transmisi_mon_inspection.php`
- `motoringsearch/tm_search.php`
- `motoringsearch/tm_search_view.php`

### 3.6 Flow PDI TM Assy

Role yang sudah dianalisis:

- `PDI TM Assy`

Tree route:

```text
tm_login.php
  -> cek_login_tm.php
    -> dashboard_tm_pdi2.php
      -> barcode_code128_reader.php
      -> ajax_tm_pdi_scan.php
      -> dashboard_tm_pdi2.php?aksi=updatetpsdi
        -> tm_generate_edit_pdi.php
          -> ct_tm_pdi2.php
            -> tm_auto_running.php
            -> tm_auto_final2.php
            -> tm_auto_final2x.php
            -> tm_auto_pt.php
            -> tm_auto_save.php
            -> tm_auto_runno.php
            -> tm_auto_pa.php
            -> tm_auto_pb.php
            -> tm_auto_pc.php
            -> tm_auto_pd.php
            -> tm_auto_pe.php
            -> tm_last_processpdi.php?aksi=last
              -> tm_update_vernumberpdi.php
                -> dashboard_tm_pdi2.php
      -> dashboard_tm_ok_pdi.php
        -> ct_tm_view_pdi.php
      -> crul2.php
```

Fungsi flow:

- Operator login sebagai PDI TM Assy.
- Sistem menampilkan list transmisi dengan status PDI.
- User memilih data atau scan barcode.
- User mengisi form inspeksi.
- User masuk ke halaman final process.
- User mengunggah/mengambil foto.
- User memilih judgement seperti `TM TEST OK`, `PENDING`, atau `REWORK`.
- Sistem menyimpan data ke header/detail/log dan kembali ke dashboard.

## 4. Kenapa Strangler Fig Cocok

Rewrite total tidak disarankan sebagai langkah pertama karena:

- Aplikasi masih digunakan.
- Flow bisnis sudah berjalan di banyak file legacy.
- Tabel database besar dan query lama masih perlu dipahami.
- Risiko kehilangan behavior lama cukup tinggi.
- Migrasi PHP 5 langsung ke PHP 8/Laravel 12 butuh banyak penyesuaian.

Strangler Fig lebih cocok karena:

- Perubahan bisa dimulai dari fitur yang paling sakit.
- Modul lama tetap menjadi fallback.
- Setiap fitur baru bisa diuji berdampingan dengan fitur lama.
- Bisa mulai dari read-only/dashboard sebelum masuk ke proses transaksi.
- Tim bisa memigrasikan fitur per role, per flow, atau per modul.

## 5. Strategi Pembaharuan

Pendekatan yang disarankan adalah kombinasi **per role + per flow + per risiko**.

Prioritas pertama bukan langsung semua menu, tetapi flow yang:

- Sering dipakai user.
- Berdampak langsung ke operasional.
- Sudah jelas route dan filenya.
- Punya masalah performa atau bug yang terasa.
- Bisa diisolasi dari modul lain.

Karena itu, kandidat awal yang baik adalah:

1. Dashboard engine dan transmisi.
2. Flow role `PDI TM Assy`.
3. Monitoring/search yang masih membaca tabel besar.
4. Master data setelah flow transaksi lebih stabil.

## 6. Target Arsitektur Bertahap

Target akhirnya adalah aplikasi modern, misalnya Laravel 12, tetapi migrasinya dilakukan bertahap.

Tahap awal:

```text
User
  -> aplikasi legacy PHP 5
    -> beberapa halaman lama tetap berjalan
    -> beberapa endpoint baru menangani proses berat
    -> dashboard lama mulai diganti AJAX/background loader
```

Tahap menengah:

```text
User
  -> legacy shell / reverse proxy / menu lama
    -> fitur lama
    -> fitur baru Laravel untuk flow tertentu
      -> database yang sama
```

Tahap akhir:

```text
User
  -> aplikasi Laravel
    -> modul dashboard
    -> modul TM PDI
    -> modul engine
    -> modul transmisi
    -> modul master data
    -> modul monitoring/report
```

Catatan penting:

- Database bisa dipakai bersama dulu pada fase awal.
- Modul baru sebaiknya dimulai dari read-only sebelum fitur update/delete.
- Session/auth bisa dibuat bridge dulu sebelum auth penuh dipindah.
- Route lama tetap ada sampai route baru terbukti stabil.

## 7. Rencana Fase Pengembangan

### Fase 0 - Assessment dan stabilisasi dasar

Tujuan:

- Memetakan route, role, file, tabel, dan flow utama.
- Menentukan fitur prioritas.
- Menyiapkan baseline sebelum perubahan besar.

Scope:

- Inventaris route `index.php?pilih=...`.
- Inventaris flow TM login dan PDI TM Assy.
- Catat tabel besar yang sering di-scan.
- Catat environment PHP 5 dan rencana kompatibilitas PHP 8.
- Buat checklist smoke test manual.

Output:

- Dokumen route tree.
- Dokumen flow per role.
- Daftar risiko dan prioritas teknis.

### Fase 1 - Quick win di legacy

Tujuan:

- Mengurangi pain user tanpa rewrite besar.
- Membuat aplikasi lebih responsif.

Scope:

- Dashboard engine dan transmisi dibuat loading dulu, lalu data diambil via AJAX/background.
- Endpoint query berat dibuat terpisah agar halaman utama cepat tampil.
- Session untuk proses panjang dilepas dengan `session_write_close()` agar user tidak terkunci menunggu request selesai.
- Perbaikan flow PDI TM Assy yang terlihat langsung, termasuk upload/kamera dan redirect.

Output:

- Dashboard bisa tampil cepat.
- User bisa langsung pindah menu meskipun data dashboard belum selesai.
- Flow PDI TM Assy lebih stabil.

### Fase 2 - Optimasi query dan database

Tujuan:

- Mengurangi beban scan tabel jutaan row.
- Menyiapkan database agar aman dipakai oleh modul baru.

Scope:

- Profiling query dashboard dan monitoring.
- Tambah index pada kolom yang sering dipakai untuk filter/status/tanggal/nomor inspeksi.
- Pertimbangkan summary table untuk dashboard.
- Pisahkan query count yang berat dari render halaman.

Output:

- Query dashboard lebih ringan.
- Monitoring lebih stabil saat data makin besar.
- Ada metrik before/after.

### Fase 3 - Strangle fitur pertama: TM PDI

Tujuan:

- Menjadikan `PDI TM Assy` sebagai pilot migrasi.
- Membuktikan pola migrasi sebelum fitur lain ikut dipindah.

Scope awal:

- Buat route/API baru untuk daftar PDI.
- Buat route/API baru untuk daftar TM Test OK.
- Buat service query yang lebih rapi untuk header/detail/log.
- Pertahankan halaman legacy sebagai fallback.

Scope lanjutan:

- Migrasi form `ct_tm_pdi2.php`.
- Migrasi final process `tm_last_processpdi.php`.
- Migrasi proses simpan `tm_update_vernumberpdi.php`.

Output:

- Flow TM PDI punya versi baru yang lebih terstruktur.
- Modul baru bisa diuji user tertentu dulu.
- Route lama belum perlu dihapus.

### Fase 4 - Migrasi dashboard dan monitoring

Tujuan:

- Memindahkan fitur yang banyak membaca data besar ke struktur baru.

Scope:

- Dashboard engine.
- Dashboard transmisi.
- Monitoring engine.
- Monitoring transmisi.
- Search engine/transmisi.
- Export laporan jika diperlukan.

Output:

- Beban legacy berkurang.
- Query penting terkonsolidasi.
- Performa lebih mudah dipantau.

### Fase 5 - Migrasi master data

Tujuan:

- Memindahkan fitur CRUD master setelah flow operasional stabil.

Scope:

- Master user dan role.
- Master engine.
- Master transmisi.
- Master form inspection.
- Master item inspection.
- Master image.

Output:

- Validasi data lebih baik.
- Hak akses lebih rapi.
- CRUD lebih mudah dipelihara.

### Fase 6 - Decommission legacy

Tujuan:

- Menghapus ketergantungan ke PHP 5 dan file legacy yang sudah tergantikan.

Scope:

- Redirect permanen dari route lama ke route baru.
- Arsip file legacy yang sudah tidak dipakai.
- Upgrade runtime ke PHP 8.2+.
- Finalisasi Laravel sebagai aplikasi utama.

Output:

- Aplikasi berjalan di runtime modern.
- Legacy berkurang signifikan.
- Maintenance lebih aman.

## 8. Scope yang Disarankan untuk Pengajuan Awal

### In scope

- Dokumentasi route dan flow aplikasi lama.
- Dashboard engine dan transmisi dibuat asynchronous.
- Optimasi query dashboard yang membaca tabel besar.
- Pilot migration untuk role `PDI TM Assy`.
- Perbaikan flow upload/kamera untuk browser dan PWA.
- Penyiapan pola endpoint/API baru.
- Penyiapan rencana migrasi PHP 5 ke PHP 8.2/Laravel 12.

### Out of scope untuk fase awal

- Rewrite seluruh aplikasi sekaligus.
- Redesign UI total.
- Perubahan struktur database besar tanpa analisis dampak.
- Migrasi semua role sekaligus.
- Menghapus file legacy sebelum fitur pengganti stabil.

## 9. Manfaat untuk User dan Operasional

Manfaat langsung:

- Dashboard tidak lagi menahan user terlalu lama.
- User bisa langsung pindah ke menu lain saat data dashboard masih loading.
- Flow PDI TM Assy menjadi kandidat awal yang lebih stabil.
- Bug dapat diperbaiki bertahap tanpa mengganggu seluruh aplikasi.

Manfaat teknis:

- Risiko perubahan lebih kecil.
- Kode baru lebih mudah diuji.
- Query berat bisa dikontrol di endpoint khusus.
- Migrasi PHP 8/Laravel bisa dilakukan tanpa big bang.
- Dokumentasi flow membantu onboarding dan maintenance.

Manfaat bisnis:

- Operasional tetap berjalan selama modernisasi.
- Prioritas pengembangan lebih jelas.
- Biaya dan risiko migrasi lebih mudah dikendalikan.
- Hasil pembaharuan bisa dilihat per fase.

## 10. Risiko dan Mitigasi

| Risiko | Dampak | Mitigasi |
| --- | --- | --- |
| Query dashboard membaca jutaan row | Halaman lambat/timeout | AJAX loader, index, summary table |
| Perubahan langsung ke banyak file | Regresi fitur | Migrasi per flow, bukan big bang |
| PHP 5 tidak kompatibel PHP 8 | Error saat upgrade | Compatibility layer, migrasi modul baru dulu |
| Session terkunci saat request lama | User tidak bisa navigasi | Lepas session pada endpoint background |
| Perilaku kamera beda di PWA | User gagal ambil foto | Gunakan `getUserMedia` dengan fallback upload |
| Struktur database legacy belum rapi | Salah update data | Mulai dari read-only, tambah test/checklist |
| Tidak ada dokumentasi route | Sulit menentukan scope | Buat route tree per role dan per modul |

## 11. Metrik Keberhasilan

Metrik yang bisa dipakai:

- Halaman dashboard tampil awal kurang dari 2 detik.
- Data dashboard boleh selesai belakangan tanpa mengunci navigasi.
- Flow PDI TM Assy sukses dari login sampai final judgement.
- Tidak ada blank page pada route prioritas.
- Query dashboard utama punya waktu eksekusi yang terukur.
- Route lama dan route baru bisa dibandingkan hasilnya.
- User pilot bisa memakai modul baru tanpa mengganggu user lain.

## 12. Rekomendasi Prioritas Pertama

Prioritas pertama yang paling realistis:

1. Stabilkan dashboard engine dan transmisi dengan AJAX/background loading.
2. Dokumentasikan route tree untuk role `PDI TM Assy`.
3. Perbaiki flow PDI TM Assy yang sering dipakai.
4. Profiling query pada tabel besar.
5. Buat endpoint baru untuk data dashboard dan list PDI.
6. Setelah stabil, baru mulai modul Laravel untuk flow TM PDI sebagai pilot.

Alasannya:

- Dashboard adalah pain yang langsung terasa.
- PDI TM Assy flow sudah cukup jelas dan bisa dijadikan pilot.
- Perubahan bisa dibatasi ke area kecil.
- Legacy tetap bisa menjadi fallback.
- Ini memberi hasil cepat sambil membuka jalan ke Laravel 12.

## 13. Bentuk Implementasi Awal

Contoh implementasi awal pada dashboard:

```text
index.php?pilih=home
  -> tampilkan dashboard_engine_loader.php
    -> tampilkan loading
    -> AJAX ke ajax_dashboard_engine.php
      -> include/render mst_isi.php

index.php?pilih=4.9
  -> tampilkan dashboard_transmisi_loader.php
    -> tampilkan loading
    -> AJAX ke ajax_dashboard_transmisi.php
      -> include/render transmisi/dhb_trans.php
```

Dengan pola ini, halaman utama tidak menunggu semua query berat selesai sebelum menu bisa dipakai.

Contoh implementasi awal pada TM PDI:

```text
dashboard_tm_pdi2.php
  -> tetap legacy sebagai fallback
  -> endpoint baru membaca list PDI
  -> hasil dibandingkan dengan query lama
  -> setelah stabil, UI baru bisa menggantikan list lama
```

## 14. Kesimpulan

Pembaharuan IQ-Pro sebaiknya tidak dimulai dari rewrite total. Aplikasi masih memiliki flow operasional aktif, database besar, dan ketergantungan PHP 5. Pendekatan Strangler Fig memberikan jalur yang lebih aman: aplikasi lama tetap berjalan, fitur paling bermasalah diperbaiki dulu, lalu modul baru mengambil alih secara bertahap.

Rekomendasi awal adalah memulai dari dashboard engine/transmisi dan flow `PDI TM Assy`, karena keduanya sudah jelas manfaatnya, cukup terisolasi, dan bisa menjadi bukti bahwa modernisasi dapat dilakukan tanpa menghentikan operasional.
