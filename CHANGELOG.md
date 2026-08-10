# IQ-PRO Application

Aplikasi sistem monitoring dan inspeksi mesin (Engine) legacy berbasis PHP 5.6 prosedural.

## Environment & Arsitektur
- **Platform**: PHP 5.6 (Kompatibel hingga PHP 8.x melalui koneksi wrapper)
- **Database**: MySQL (Remote via SSH Tunnel)
- **Framework**: Procedural / Native PHP (Tidak menggunakan MVC)

---

## CHANGELOG (Refactoring & Optimasi)

### [Phase 2] - 31 Juli 2026: Mass Query Optimization
- **Masalah**: Waktu muat (loading) halaman paginasi sangat lambat (bisa >30 detik) akibat penarikan seluruh data tabel (`SELECT *`) hanya untuk menghitung jumlah baris (`mysql_num_rows`) melewati koneksi lambat SSH Tunnel.
- **Solusi**: Merancang skrip otomasi (`fix_pagination.php`) untuk mencari dan memodifikasi struktur query secara massal.
- **Hasil**: 
  - Memperbaiki **99 blok query paginasi** yang tersebar di **54 file** berbeda.
  - Query diubah menjadi `SELECT count(*) as total` untuk mencegah *Full Data Transfer*.
  - Mengurangi pemakaian bandwidth jaringan hingga 99% pada setiap eksekusi tabel.
- **Modul Terdampak**: `monitoring/`, `transmisi/`, `master*/`, `motoring*/`, dan file-file root.

### [Phase 1.5] - 30 Juli 2026: SSH Tunnel TCP Timeout Fix
- **Masalah**: Halaman membeku (timeout) tepat selama 30 detik saat memuat `index.php`.
- **Solusi**: Membatalkan penggunaan *Persistent Connection* (`p:`) pada host database karena mengakibatkan tumpukan "Dead Socket" (koneksi mati yang tidak disadari PHP) saat digunakan di atas SSH Tunnel yang secara agresif menutup koneksi *idle*.
- **Lokasi Fix**: `config/koneksi.php`.

### [Phase 1] - 30 Juli 2026: Foundation Modernization
- **Database Compatibility (PHP 8+)**: Mengimplementasikan *MySQL to MySQLi wrapper* kustom di dalam `config/koneksi.php` untuk memetakan puluhan fungsi lawas `mysql_*` menjadi `mysqli_*`. 
- **Charset Fix**: Mengirim perintah `mysqli_options(MYSQLI_SET_CHARSET_NAME, 'utf8')` pada inisialisasi koneksi untuk mencegah *crash* (Error 255 Unknown Charset) saat berkomunikasi dengan server MySQL 8.x terbaru.
- **Security (Anti SQL Injection)**: Menambahkan lapisan `mysql_real_escape_string` pada `login/proses_login.php` untuk mencegah intrusi via *input* form.
- **Dashboard Optimization (`mst_isi.php`)**: Memangkas **13 query** berulang pada *dashboard* (4 grafik dan 5 penghitung status) menjadi hanya **6 query** menggunakan kombinasi klausa `GROUP BY` dan *Array Pre-fetching*.
- **Bug Fix**: Menangani error Undefined Index (`$_SESSION` dan `$_GET`) di `index.php` untuk adaptasi keamanan PHP 8.
- **Housekeeping**: Menghapus puluhan file sampah `.bak` dan naskah pengujian developer lawas (`test*.php`) yang membebani struktur direktori.
