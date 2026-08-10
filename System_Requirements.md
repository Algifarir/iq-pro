# Application Requirements Document (ARD) - IQ-PRO

Dokumen ini merupakan hasil *Reverse Engineering* dari sistem *legacy* IQ-PRO. Dokumen ini berfungsi sebagai cetak biru (blueprint) lengkap bagi tim *developer* mana pun yang di masa depan akan memelihara aplikasi ini atau membangun ulangnya.

---

## 1. Arsitektur & Teknologi Saat Ini
- **Bahasa**: PHP 5.6 (Prosedural). Kompatibel dengan PHP 8.x melalui custom wrapper MySQLi.
- **Database**: MySQL (Terdiri dari **50 Tabel**). Dioperasikan secara remote melalui SSH Tunnel.
- **Paradigma**: Tanpa Framework, tanpa MVC. Pemanggilan *database* dilakukan langsung di dalam blok HTML.

---

## 2. Kamus Data Lengkap (Data Dictionary - 50 Tabel)
Aplikasi ini memiliki **50 Tabel** yang terbagi dalam beberapa kategori besar. Berikut adalah daftar lengkap (Eksosutif) seluruh tabel yang digunakan:

### A. Konfigurasi Sistem & Pengguna (5 Tabel)
1. `master_user`: Data pengguna (username, password md5, nama lengkap, level, departemen).
2. `master_menu`: Daftar menu statis di aplikasi.
3. `master_menu_user`: Hak akses (Role-Based Access Control) user terhadap tiap menu (Add, Edit, Delete, View).
4. `master_image`: Konfigurasi gambar (denah mesin) untuk inspeksi utama.
5. `transmisi_master_image`: Konfigurasi gambar untuk inspeksi transmisi.

### B. Master Data Operasional (16 Tabel)
Ini adalah tabel-tabel master tempat data acuan pabrik disimpan (tanpa prefix untuk mesin, prefix `transmisi_` untuk transmisi):
1. `master_area` / `transmisi_master_area`: Data lokasi pos pengerjaan.
2. `master_type_form` / `transmisi_master_type_form`: Jenis-jenis formulir inspeksi.
3. `master_engine` / `transmisi_master` / `transmisi_master_transmisi`: Master data unit yang akan diinspeksi. (Beserta tabel temp: `master_engine_temp1`, `master_engine_temp2`, `master_engine_temp1_trans`, `master_engine_temp2_trans`).
4. `master_engine_backup` / `transmisi_master_transmisi_backup`: Arsip cadangan (backup).

### C. Master Parameter Inspeksi (10 Tabel)
Tabel ini memegang daftar pertanyaan/butir pengecekan di lapangan:
1. Sisi Mesin: `master_inspection_front_engine`, `master_inspection_back_engine`, `master_inspection_left_side`, `master_inspection_right_side`, `master_inspection_top_engine`.
2. Sisi Transmisi: `transmisi_master_front_tm`, `transmisi_back_tm`, `transmisi_master_inspection_left_tm`, `transmisi_inspection_right_tm`, `transmisi_master_top_tm`.

### D. Parameter Khusus / Pengukuran Fisik (3 Tabel)
1. `master_item_inspection`: Butir inspeksi kebocoran (Leak Inspection) mesin.
2. `transmisi_master_leak_inspection`: Butir inspeksi kebocoran transmisi.
3. `transmisi_master_motoring_inspection`: Butir pengujian *motoring*.
4. `master_performance_test`: Pengaturan tes performa mesin (menyimpan parameter angka: RPM, `spec_start`, `spec_finish`, UOM).

### E. Transaksi Utama: Eksekusi Inspeksi (8 Tabel)
Ini adalah nadi dari aplikasi tempat hasil input direkam.
1. `proses_inspection_header` & `transmisi_proses_inspection_header`: Menyimpan Kepala (Metadata) inspeksi. Status (OK/REWORK/PENDING), Judgement, Operator, Waktu, Nomor IP.
2. `proses_inspection_detail` & `transmisi_proses_inspection_detail`: Menyimpan jutaan baris jawaban dari tiap butir soal (Hasil Running OK/NO, Nilai Aktual).
3. Tabel Log (Audit Trail): `proses_inspection_header_log`, `proses_inspection_detail_log`, `transmisi_proses_inspection_header_log`, `transmisi_proses_inspection_detail_log`. (Menyimpan jejak modifikasi).
4. Tabel Log Tambahan: `proses_inspection_header_backup`, `proses_inspection_header_log_backup`.

### F. Pelaporan, Utilitas, & Lainnya (8 Tabel)
1. `report_inspection` & `tm_report_inspection`: Tabel "Denormalisasi" untuk *Export Excel*. Didesain melebar (kolom R1-R13, P1-P18) agar tidak perlu membebani server dengan query PIVOT.
2. `number_inspection` & `transmisi_number`: Generator otomatis untuk nomor seri inspeksi (`inspection_number`).
3. `transmisi_problem`: Penyimpanan catatan perbaikan (problem, penyebab, tindakan, PIC, status) untuk transmisi.
4. `transmisi_upload`: Menyimpan referensi URL lampiran file/gambar pada saat inspeksi transmisi.
5. `others_history_log`: Catatan riwayat aktivitas di luar inspeksi (contoh: penggantian status data).

---

## 3. Alur Bisnis (Business Flow)

### 1. Inisialisasi Inspeksi
1. Operator memilih form dan mesin (dari tabel `master_engine`).
2. Generator (`number_inspection`) membuat nomor tiket.
3. Tiket direkam di `proses_inspection_header` (Status awal: `OPEN`).

### 2. Eksekusi Inspeksi
1. Pertanyaan ditarik dari tabel konfigurasi sisi mesin (contoh: `master_inspection_front_engine`).
2. Jawaban disimpan di `proses_inspection_detail`.
3. Untuk validasi *Performance Test*: Angka yang diinput sistem otomatis membandingkan dengan rentang `spec_start` dan `spec_finish` dari `master_performance_test`. Lolos jika berada di antaranya.

### 3. Penentuan Judgement (Keputusan Final)
- Mesin dianggap gagal/`REWORK` jika terdapat satu saja `NO` pada detail.
- Berubah `PENDING` jika butuh *approval*.
- Jika bersih tanpa cacat, status akhir berubah `ENGINE OK`.

### 4. Sinkronisasi Pelaporan & Dashboard
- Saat inspeksi selesai, data diturunkan secara *flat* ke tabel `report_inspection` agar besok pagi Manajer bisa *download Excel* dengan cepat.
- Dashboard membaca dari Header untuk menghitung status, dan Detail untuk membuat grafik kurva performa.

---

## 4. Kelemahan & Blueprint Migrasi Masa Depan

Berdasarkan bedah skema 50 tabel ini, jika aplikasi akan dibangun ulang:
1. **Redundansi Tabel (Duplikasi 50%)**: Daripada memelihara 25 tabel Mesin dan 25 tabel Transmisi yang kolomnya persis sama (e.g., `master_area` vs `transmisi_master_area`), di sistem baru kita harus menggabungkannya dan menambah kolom `type = ENUM('ENGINE', 'TRANSMISSION')`. Ini akan menyunat jumlah tabel dari 50 menjadi hanya sekitar 20 tabel bersih.
2. **Hardcoded Form UI**: Logika tampilan form masih statis per tabel sisi (`left`, `right`, `top`).
3. **Kata Sandi**: Hash *password* wajib diganti dari `MD5` ke `Bcrypt` saat *import* data ke sistem baru.
