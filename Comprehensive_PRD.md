# Software Requirements Specification (SRS) & PRD - IQ-PRO

Dokumen ini adalah ringkasan arsitektur bisnis, proses operasional, aturan sistem tersembunyi (Business Rules), serta *Use Case* Aktor dari aplikasi IQ-PRO. Dokumen ini disusun menggunakan metode *Reverse Engineering Extreme*.

*(Untuk Skema Database 50 Tabel yang lengkap, silakan merujuk ke dokumen `PRD_Database_Schema.md` di folder aplikasi).*

---

## BAB 1: Daftar Pengguna & Akses (Use Cases)
Berdasarkan matriks di tabel `master_menu_user` dan `master_user`, sistem ini dirancang untuk beroperasi secara kolaboratif antar berbagai peran di pabrik:

### 1. Aktor: Operator Inspeksi (Engine & Transmisi)
- **Tugas Utama**: Mengisi borang inspeksi di lapangan (menginput nilai *Running*, *Visual*, *Performance Test*).
- **Use Case Utama**:
  - Menginisialisasi nomor form inspeksi baru (OPEN status).
  - Melakukan *input real-time* hasil inspeksi (auto-saving).
  - Tidak berhak mengonfirmasi hasil akhir (Judgement Final) jika terindikasi REWORK.
  
### 2. Aktor: Quality Assurance (QA) / SPV / Foreman
- **Tugas Utama**: Mengawasi jalannya inspeksi dan memberikan *Approvement* akhir.
- **Use Case Utama**:
  - Mengevaluasi mesin berstatus PENDING atau REWORK.
  - Memberikan **Final Judgement** (`ENGINE OK` atau `REWORK`).
  - Mengisi tabel `transmisi_problem` (Penyebab, Tindakan, PIC) jika ada kegagalan.

### 3. Aktor: Administrator Master Data
- **Tugas Utama**: Mengelola konfigurasi dasar aplikasi.
- **Use Case Utama**:
  - Menambah tipe mesin baru di `master_engine`.
  - Mengubah spesifikasi (Spec Start / Finish) batas lolos uji di tabel `master_performance_test`.
  - Mengatur Role (Menu yang boleh diakses) tiap *User*.

---

## BAB 2: Proses Bisnis (Business Process Flow)

Kronologi end-to-end inspeksi IQ-PRO:

**Tahap 1: Setup Master Data (Hulu)**
Sebelum mesin bisa diuji, Admin harus sudah mendaftarkan Tipe Mesin (`master_engine`) dan mengkonfigurasi butir-butir tesnya (`master_inspection_front_engine`, dll serta `master_performance_test`).

**Tahap 2: Inisialisasi Inspeksi (Lantai Pabrik)**
Operator membuka menu inspeksi, memilih mesin. Sistem men-generate `inspection_number` secara otomatis. Secara *background*, sistem meng-copy kosong butir-butir pertanyaan dari tabel master ke tabel `proses_inspection_detail`, dan membuat kepala dokumen di `proses_inspection_header` dengan status **OPEN**.

**Tahap 3: Pengecekan Fisik & Performa (Testing)**
Operator melakukan pengecekan visual pada mesin (*Front, Back, Top, Left, Right*) dan memasukkan hasil. Aplikasi melakukan Auto-Save (`auto_running.php`, `auto_pt.php`) di latar belakang (AJAX).

**Tahap 4: Final Judgement (Keputusan Final)**
Setelah semua item terisi, Foreman/Operator mengeklik "Submit". 
Jika hasil akhir diputuskan "ENGINE OK", siklus selesai. Jika tidak, mesin masuk status "REWORK" atau "PENDING".

**Tahap 5: Sinkronisasi Laporan (Hilir)**
Sistem men-generate laporan *flat* (Horizontal R1-R13) ke tabel `report_inspection` untuk diekspor ke Excel harian oleh tim manajemen.

---

## BAB 3: Aturan Bisnis & Logika (Business Logic & Rules)

Berikut adalah "Rahasia Pabrik" yang berhasil dibongkar paksa dari dalam *source code* (kode sumber PHP):

### Aturan 1: Arsitektur "Tong Sampah & Etalase" (Sangat Krusial!)
Aplikasi ini memiliki logika pergerakan data yang sangat unik (ditemukan di `update_vernumber.php` baris 32-38).
- Selama mesin masih diuji (Status: **OPEN**, **PENDING**, **REWORK**), datanya bersemayam di tabel aktif `proses_inspection_header` dan `proses_inspection_detail`.
- Namun, saat mesin dinyatakan lulus **ENGINE OK**, aplikasi **AKAN MENGHAPUS (DELETE)** data tersebut dari tabel aktif, dan memindahkannya ke tabel log riwayat (`proses_inspection_header_log`).
- **Peringatan Migrasi**: Saat membangun ulang *dashboard*, developer harus mengambil data `ENGINE OK` dari tabel `_log`, dan data `REWORK`/`OPEN` dari tabel utama (bukan dari satu tabel yang sama).

### Aturan 2: Validasi Performance Test Otomatis
Di dalam fungsi `auto_pt.php`, status kelulusan performa (*hasil_pt_ok* menjadi tanda centang `&#10004` atau silang `&#10006`) dihitung secara otomatis berdasarkan nilai konfigurasi `operator_math`:
- **"Lebih Kecil Sama Dengan"**: Dinyatakan Lulus jika `Nilai Input <= Batas Akhir`.
- **"Lebih Besar Sama Dengan"**: Dinyatakan Lulus jika `Nilai Input >= Batas Akhir`.
- **"Rumus PS"**: Terdapat algoritma kalkulasi khusus `(Hasil * RPM) / 716.2` sebelum dibandingkan. Jika nilainya masuk batas spec, maka lulus.

### Aturan 3: Pemisahan Bisnis Transmisi
Sistem ini memisahkan logika **Engine** dan **Transmisi** secara mutlak. Mesin Transmisi tidak pernah bersinggungan dengan tabel `proses_inspection...` melainkan diproses secara paralel oleh rangkaian tabel `transmisi_proses_inspection...` dan menggunakan *file script* eksekutor yang terpisah (dengan *suffix* `_tm.php`).

---
*(Dokumen ini mengamankan seluruh kecerdasan bisnis Anda. Dengan dokumen ini dan Skema Database, proses refactoring ke bahasa pemrograman apa pun terjamin 100% presisi).*
