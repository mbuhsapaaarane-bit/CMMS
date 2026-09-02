# SKRIPSI

## RANCANG BANGUN COMPUTERIZED MAINTENANCE MANAGEMENT SYSTEM (CMMS) ARMADA LOGISTIK DENGAN METODE PREVENTIVE MAINTENANCE BERBASIS WEB RESPONSIF DI PT. SUMBER MASANDA JAYA

---

# BAB 2
# TINJAUAN PUSTAKA

## 2.1 Landasan Teori

### 2.1.1 Sistem Informasi Manajemen

**Sistem informasi** adalah sekumpulan komponen yang saling berinteraksi untuk mengumpulkan, memproses, menyimpan, dan mendistribusikan informasi guna mendukung pengambilan keputusan dan pengendalian di dalam suatu organisasi (Laudon & Laudon, 2020).

Menurut O'Brien (2019), sistem informasi manajemen terdiri dari lima komponen utama:

1. **Hardware**: Peralatan fisik yang digunakan untuk memproses data, termasuk komputer, server, dan perangkat jaringan.
2. **Software**: Program aplikasi yang menjalankan pemrosesan data, baik sistem operasi maupun aplikasi bisnis.
3. **Database**: Kumpulan data yang terorganisir dan dapat diakses oleh banyak pengguna secara bersamaan.
4. **People**: Manusia yang mengoperasikan, memelihara, dan menggunakan sistem informasi.
5. **Procedure**: Prosedur dan aturan yang mengatur penggunaan sistem informasi.

Manfaat utama sistem informasi bagi organisasi meliputi:
- Peningkatan efisiensi operasional
- Peningkatan kualitas pengambilan keputusan
- Pengurangan biaya operasional
- Peningkatan produktivitas kerja
- Kemudahan akses informasi secara real-time

### 2.1.2 Computerized Maintenance Management System (CMMS)

**Computerized Maintenance Management System (CMMS)** adalah sistem perangkat lunak yang dirancang untuk mengotomatiskan proses pemeliharaan aset dan fasilitas suatu organisasi. CMMS membantu organisasi mengelola informasi tentang aset, peralatan, dan pekerjaan pemeliharaan (Mobley, 2002).

Fungsi utama CMMS meliputi:

1. **Manajemen Inventaris Aset**: Pencatatan seluruh aset perusahaan beserta spesifikasi, lokasi, dan status kondisinya.
2. **Penjadwalan Pemeliharaan**: Pembuatan dan pengelolaan jadwal pemeliharaan berkala secara otomatis.
3. **Pelacakan Pekerjaan**: Monitoring status pekerjaan pemeliharaan dari awal hingga selesai.
4. **Manajemen Suku Cadang**: Pengelolaan inventaris suku cadang dan komponen pemeliharaan.
5. **Pelaporan dan Analitik**: Pembuatan laporan kinerja pemeliharaan dan analisis biaya.

Manfaat CMMS bagi organisasi adalah:
- Mengurangi waktu henti (*downtime*) peralatan
- Mengoptimalkan umur pakai aset
- Mengurangi biaya operasional pemeliharaan
- Meningkatkan produktivitas dan efisiensi kerja
- Memudahkan pengambilan keputusan berbasis data

### 2.1.3 Preventive Maintenance (Perawatan Pencegahan)

**Preventive Maintenance** adalah jenis pemeliharaan yang dilakukan secara terencana dan berkala untuk mencegah terjadinya kerusakan atau kegagalan fungsi pada peralatan sebelum masalah tersebut terjadi (Moubray, 1997).

Berdasarkan Moubray (1997), terdapat empat jenis pemeliharaan utama:

1. **Preventive Maintenance**: Perawatan terjadwal yang dilakukan secara berkala untuk mencegah kerusakan. Contoh: penggantian oli mesin setiap 3.000 kilometer.

2. **Corrective Maintenance**: Perawatan perbaikan yang dilakukan setelah kerusakan terjadi. Jenis ini bersifat reaktif dan biasanya memerlukan biaya lebih tinggi.

3. **Predictive Maintenance**: Perawatan berdasarkan prediksi kondisi peralatan menggunakan data sensor dan analisis tren.

4. **Condition-Based Maintenance**: Perawatan yang dilakukan berdasarkan kondisi aktual peralatan yang dipantau secara real-time.

Komponen utama dalam implementasi Preventive Maintenance:

| Komponen | Deskripsi |
|---|---|
| Jadwal Perawatan | Penentuan waktu dan frekuensi perawatan berkala |
| Checklist Inspeksi | Daftar item yang harus diperiksa saat perawatan |
| Penggantian Komponen | Penggantian suku cadang secara terjadwal |
| Monitoring Kondisi | Pemantauan kondisi peralatan secara berkala |
| Dokumentasi | Pencatatan seluruh aktivitas perawatan |

Keunggulan Preventive Maintenance:
- Mengurangi risiko kerusakan mendadak yang tidak terduga
- Memperpanjang umur komponen dan peralatan
- Menghemat biaya perbaikan besar (corrective)
- Meningkatkan keamanan dan keselamatan kerja
- Mengoptimalkan ketersediaan peralatan

### 2.1.4 Manajemen Armada Logistik

**Manajemen armada logistik** (*Fleet Management*) adalah proses pengelolaan kendaraan secara efisien untuk memastikan operasional logistik berjalan dengan optimal (Crainic & Laporte, 1997).

Aktivitas utama dalam manajemen armada meliputi:

1. **Tracking Lokasi Kendaraan**: Pemantauan posisi kendaraan secara real-time menggunakan teknologi GPS.
2. **Monitoring Kondisi Kendaraan**: Pemeriksaan kondisi fisik dan teknis kendaraan secara berkala.
3. **Penjadwalan Perawatan**: Perencanaan jadwal perawatan dan pemeliharaan kendaraan.
4. **Pengelolaan Driver/Operator**: Pengelolaan jadwal dan kinerja pengemudi kendaraan.
5. **Analisis Biaya**: Evaluasi total biaya operasional armada.

Tantangan dalam manajemen armada logistik:
- Biaya perawatan yang tinggi dan sulit diprediksi
- Keterbatasan data real-time kondisi kendaraan
- Koordinasi multiple vehicle dan rute pengiriman
- Pengelolaan suku cadang dan inventaris

### 2.1.5 Teknologi Pendukung

#### a. Laravel Framework

**Laravel** adalah framework PHP open-source yang dibangun dengan arsitektur Model-View-Controller (MVC). Laravel dirancang untuk pengembangan aplikasi web dengan syntax yang elegan dan fitur lengkap (Otwell, 2011).

Fitur utama Laravel:
- **MVC Architecture**: Pemisahan logika bisnis (Model), antarmuka (View), dan kontrol alur (Controller).
- **Eloquent ORM**: Object-Relational Mapping yang memudahkan interaksi database.
- **Blade Templating**: Engine template yang powerful dengan inheritance dan komponen.
- **Built-in Authentication**: Sistem autentikasi siap pakai dengan role-based access control.
- **CSRF Protection**: Perlindungan otomatis dari serangan Cross-Site Request Forgery.
- **Migration**: Sistem migrasi database untuk version control skema.

Keunggulan Laravel:
- Syntax yang elegan dan mudah dipahami
- Dokumentasi resmi yang komprehensif
- Komunitas pengembang yang besar dan aktif
- Ekosistem工具 yang lengkap (Forge, Vapor, Nova)
- Performa yang baik untuk aplikasi skala menengah

#### b. Responsive Web Design

**Responsive Web Design** adalah pendekatan desain web yang membuat halaman dapat ditampilkan dengan baik pada berbagai ukuran layar, mulai dari mobile hingga desktop (Marcotte, 2011).

Pendekatan Responsive Web Design:
- **Mobile-First Design**: Mendesain untuk layar kecil terlebih dahulu, kemudian menyesuaikan untuk layar lebih besar.
- **Breakpoint CSS**: Titik batas perubahan tampilan pada ukuran layar tertentu.
- **Flexible Grid System**: Sistem grid yang menggunakan satuan relatif (persen)而非固定像素。
- **Flexible Images**: Gambar yang menyesuaikan ukuran container.

#### c. Progressive Web Application (PWA)

**Progressive Web Application (PWA)** adalah aplikasi web yang menggunakan teknologi modern untuk memberikan pengalaman pengguna seperti aplikasi native (Google, 2015).

Komponen utama PWA:
- **Web App Manifest**: File JSON yang berisi metadata aplikasi (nama, ikon, warna tema).
- **Service Worker**: JavaScript yang berjalan di background untuk caching dan offline support.
- **HTTPS**: Koneksi aman sebagai prasyarat keamanan.

Keunggulan PWA:
- Dapat diinstal pada perangkat mobile seperti aplikasi native
- Mendukung akses offline melalui caching
- Tidak memerlukan distribusi melalui app store
- Auto-update tanpa perlu install ulang
- Ukuran aplikasi lebih ringan dibanding native app

#### d. Database Management System

**SQLite** adalah database file-based yang ringan dan tidak memerlukan server database terpisah. SQLite cocok untuk aplikasi skala kecil hingga menengah dan development (Hipp, 2000).

**MySQL** adalah sistem manajemen database relasional yang populer dan scalable untuk produksi. MySQL mendukung SQL standar dan fitur keamanan lengkap (Oracle, 2020).

Perbandingan SQLite vs MySQL:

| Aspek | SQLite | MySQL |
|---|---|---|
| Arsitektur | File-based | Client-Server |
| Setup | Tidak perlu install | Perlu install server |
| Skala | Kecil-Menengah | Menengah-Besar |
| Konkurensi | Terbatas | Baik |
| Produksi | Development/Staging | Production-ready |

### 2.1.6 Basis Data Relasional

**Basis data relasional** adalah model penyimpanan data yang mengorganisasi data dalam bentuk tabel (relasi) dengan hubungan antar tabel menggunakan kunci primer dan kunci asing (Connolly & Begg, 2015).

Konsep normalisasi database:

- **First Normal Form (1NF)**: Setiap kolom hanya berisi nilai atomik (tidak ada multi-value).
- **Second Normal Form (2NF)**: Memenuhi 1NF dan setiap non-key atribut bergantung pada seluruh kunci primer.
- **Third Normal Form (3NF)**: Memenuhi 2NF dan tidak ada dependensi transitive antar atribut non-key.

### 2.1.7 Security dan Autentikasi

**Autentikasi** adalah proses verifikasi identitas pengguna yang mencoba mengakses sistem (Stallings, 2017).

**Autorisasi** adalah penentuan hak akses pengguna terhadap sumber daya sistem setelah berhasil terautentikasi.

Metode keamanan yang diterapkan dalam sistem:
- **Password Hashing (bcrypt)**: Enkripsi password menggunakan algoritma bcrypt yang salt-able.
- **CSRF Token**: Token unik untuk setiap sesi yang mencegah serangan Cross-Site Request Forgery.
- **Session Management**: Pengelolaan sesi pengguna yang aman dengan cookie httpOnly.
- **Role-Based Access Control (RBAC)**: Kontrol akses berdasarkan peran pengguna.

---

## 2.2 Penelitian Terkait

### 2.2.1 Penelitian tentang CMMS

**Penelitian 1**: Pratama, A. (2022). "Perancangan Sistem Informasi Manajemen Pemeliharaan Mesin Industri Berbasis Web."

Penelitian ini mengembangkan sistem CMMS untuk pemeliharaan mesin produksi menggunakan framework Laravel. Hasil penelitian menunjukkan bahwa implementasi CMMS dapat mengurangi waktu henti mesin sebesar 25% dan meningkatkan efisiensi pemeliharaan. Sistem menggunakan arsitektur MVC dengan database MySQL.

**Penelitian 2**: Wijaya, R. (2021). "Implementasi CMMS untuk Optimalisasi Perawatan Armada Transportasi."

Penelitian ini mengembangkan aplikasi CMMS mobile untuk tracking perawatan kendaraan armada transportasi. Implementasi menggunakan pendekatan responsive web design yang dapat diakses melalui smartphone. Hasil penelitian menunjukkan peningkatan akurasi data perawatan sebesar 40%.

**Penelitian 3**: Sari, M. (2023). "Rancang Bangun Sistem Preventive Maintenance Berbasis Android."

Penelitian ini mengembangkan aplikasi Android untuk penjadwalan perawatan pencegahan. Aplikasi menggunakan database lokal SQLite dengan sinkronasi ke server. Hasil uji coba menunjukkan kemudahan penggunaan sebesar 85% berdasarkan pengukuran System Usability Scale (SUS).

**Penelitian 4**: Hidayat, T. (2020). "Pengembangan CMMS dengan Metode Waterfall pada Perusahaan Manufaktur."

Penelitian ini menggunakan metode Waterfall untuk pengembangan sistem CMMS desktop. Sistem terintegrasi dengan database MySQL dan menghasilkan peningkatan dokumentasi pemeliharaan sebesar 60%. Penelitian ini membuktikan efektivitas model Waterfall untuk proyek CMMS.

### 2.2.2 Penelitian tentang Preventive Maintenance

**Penelitian 5**: Setiawan, D. (2022). "Penerapan Preventive Maintenance pada Armada Logistik untuk Mengurangi Biaya Operasional."

Penelitian ini menganalisis efektivitas strategi preventive maintenance pada armada logistik. Hasil penelitian menunjukkan bahwa penerapan preventive maintenance dapat mengurangi biaya perawatan sebesar 30% dan memperpanjang umur kendaraan rata-rata 20%.

**Penelitian 6**: Putri, L. (2023). "Sistem Penjadwalan Preventive Maintenance Berbasis Web pada Perusahaan Distribusi."

Penelitian ini mengembangkan sistem penjadwalan web untuk preventive maintenance. Sistem menggunakan framework CodeIgniter dengan database MySQL. Fitur utama meliputi otomasi penjadwalan, notifikasi, dan pelaporan.

**Penelitian 7**: Anggara, F. (2021). "Analisis Efektivitas Preventive Maintenance terhadap Kinerja Armada Pengiriman."

Penelitian komparatif antara preventive maintenance dan corrective maintenance. Studi kasus dilakukan pada 50 unit kendaraan pengiriman selama 12 bulan. Hasil menunjukkan preventive maintenance lebih efektif dalam mengurangi biaya jangka panjang.

### 2.2.3 Penelitian tentang Laravel & PWA

**Penelitian 8**: Prasetyo, B. (2023). "Pengembangan Aplikasi Web Responsif dengan Laravel dan PWA."

Penelitian ini mengimplementasikan PWA pada aplikasi Laravel untuk manajemen inventaris. Hasil menunjukkan bahwa PWA dapat meningkatkan kecepatan akses sebesar 45% dibandingkan aplikasi web tradisional.

**Penelitian 9**: Nuraini, S. (2022). "Perancangan Sistem Informasi Berbasis Laravel dengan Implementasi Responsive Design."

Penelitian ini merancang sistem informasi dengan pendekatan mobile-first menggunakan Laravel. Responsive design berhasil ditampilkan dengan baik pada berbagai ukuran layar (mobile, tablet, desktop).

**Penelitian 10**: Firmansyah, A. (2023). "Progressive Web Application untuk Sistem Manajemen Inventaris."

Penelitian ini mengembangkan PWA untuk manajemen inventaris gudang. Fitur utama meliputi scan barcode, tracking stok, dan notifikasi otomatis. PWA dapat diinstal pada 100% perangkat yang diuji.

### 2.2.4 Penelitian tentang Fleet Management

**Penelitian 11**: Ramadan, M. (2022). "Sistem Informasi Manajemen Armada Logistik Berbasis Web."

Penelitian ini mengembangkan sistem fleet management untuk perusahaan logistik. Sistem terintegrasi GPS tracking dan monitoring kondisi kendaraan. Hasil implementasi menunjukkan peningkatan efisiensi rute sebesar 20%.

**Penelitian 12**: Lestari, D. (2021). "Implementasi GPS Tracking pada Sistem Manajemen Armada Distribusi."

Penelitian ini mengintegrasikan GPS tracking ke dalam sistem manajemen armada. Hasil menunjukkan real-time tracking berhasil mengurangi waktu pengiriman rata-rata 15%.

---

## 2.3 Kerangka Berpikir

Berdasarkan tinjauan pustaka yang telah diuraikan, kerangka berpikir penelitian ini adalah sebagai berikut:

**Permasalahan**:
Pengelolaan armada logistik di PT. Sumber Masanda Jaya masih dilakukan secara manual menggunakan spreadsheet dan catatan fisik. Hal ini menyebabkan:
- Penjadwalan perawatan tidak terstruktur
- Data kondisi kendaraan tidak terpusat
- Kesulitan tracking perjalanan armada
- Biaya perawatan sulit dikontrol

**Teori yang Diterapkan**:
1. **CMMS** sebagai konsep utama sistem pemeliharaan terkomputerisasi
2. **Preventive Maintenance** sebagai metode perawatan pencegahan
3. **Laravel Framework** sebagai teknologi backend
4. **Responsive Web Design & PWA** untuk aksesibilitas multi-device

**Solusi**:
Rancang bangun sistem CMMS berbasis web responsif dengan metode preventive maintenance untuk mengelola armada logistik secara efisien.

**Implementasi**:
Menggunakan model pengembangan Waterfall dengan 5 tahapan: analisis kebutuhan, perancangan, implementasi, pengujian, dan pemeliharaan.

**Hasil**:
Aplikasi CMMS yang dapat diakses melalui browser pada berbagai perangkat (mobile, tablet, desktop) dengan fitur manajemen armada, penjadwalan, tracking, pelaporan, dan dashboard analitik.

```
┌─────────────────────────────────────────────────────────┐
│                     KERANGKA BERPIKIR                     │
├─────────────────────────────────────────────────────────┤
│                                                          │
│  MASALAH                                                │
│  ├── Pengelolaan armada manual                          │
│  ├── Penjadwalan tidak terstruktur                      │
│  ├── Data tidak terpusat                                │
│  └── Biaya sulit dikontrol                              │
│                                                          │
│       ▼                                                  │
│                                                          │
│  TEORI                                                  │
│  ├── CMMS                                               │
│  ├── Preventive Maintenance                             │
│  ├── Laravel Framework                                  │
│  └── Responsive Web & PWA                               │
│                                                          │
│       ▼                                                  │
│                                                          │
│  SOLUSI                                                 │
│  └── Rancang Bangun CMMS Web Responsif                  │
│                                                          │
│       ▼                                                  │
│                                                          │
│  IMPLEMENTASI (Waterfall)                               │
│  ├── 1. Analisis Kebutuhan                              │
│  ├── 2. Perancangan Sistem                              │
│  ├── 3. Implementasi                                    │
│  ├── 4. Pengujian                                       │
│  └── 5. Pemeliharaan                                    │
│                                                          │
│       ▼                                                  │
│                                                          │
│  HASIL                                                  │
│  └── Aplikasi CMMS Multi-Device                         │
│                                                          │
└─────────────────────────────────────────────────────────┘
```

---

## 2.4 Ringkasan Bab 2

Bab ini telah membahas landasan teori yang meliputi konsep sistem informasi manajemen, CMMS, preventive maintenance, manajemen armada logistik, teknologi Laravel, responsive web design, PWA, database relasional, dan keamanan sistem. Selain itu, dipaparkan pula 12 penelitian terkait yang menjadi referensi pengembangan sistem, mulai dari penelitian tentang CMMS, preventive maintenance, Laravel & PWA, hingga fleet management. Kerangka berpikir penelitian juga dijelaskan untuk menunjukkan alur logika dari permasalahan hingga solusi yang ditawarkan.

---

# BAB 3
# METODE PENELITIAN

## 3.1 Metode Penelitian

Penelitian ini menggunakan metode **deskriptif kualitatif** dengan pendekatan pengembangan sistem (*system development*). Metode deskriptif dipilih karena penelitian ini bertujuan untuk mendeskripsikan proses perancangan dan pembangunan sistem CMMS secara sistematis dan terstruktur. Pendekatan pengembangan sistem diterapkan untuk menghasilkan produk perangkat lunak yang sesuai dengan kebutuhan pengguna di PT. Sumber Masanda Jaya.

Penelitian ini menghasilkan berupa perangkat lunak (*software*) berupa aplikasi web CMMS yang dapat diakses melalui browser pada perangkat mobile maupun desktop, sehingga dapat membantu proses pengelolaan armada logistik perusahaan.

---

## 3.2 Lokasi Penelitian

Penelitian ini dilaksanakan di **PT. Sumber Masanda Jaya**, yaitu perusahaan yang bergerak dalam bidang logistik dan pengiriman. Perusahaan ini mengelola armada kendaraan logistik berupa kendaraan roda tiga (*three-wheeler*) yang digunakan untuk operasional pengiriman ke berbagai lokasi.

Lokasi pemilihan perusahaan ini didasarkan pada beberapa pertimbangan:
1. Perusahaan memiliki armada kendaraan logistik yang memerlukan sistem perawatan terstruktur.
2. Proses pengelolaan armada masih dilakukan secara manual menggunakan spreadsheet dan catatan fisik.
3. Adanya kebutuhan nyata untuk menerapkan sistem preventive maintenance guna meningkatkan umur pakai kendaraan dan mengurangi biaya perawatan.

---

## 3.3 Waktu Penelitian

Penelitian ini dilaksanakan pada periode **bulan Juli hingga Agustus 2026**. Adapun jadwal pelaksanaan kegiatan penelitian disajikan pada Tabel berikut:

| No | Kegiatan | Bulan 1 | Bulan 2 |
|---|---|---|---|
| 1 | Pengumpulan data dan observasi | ✓ | |
| 2 | Analisis kebutuhan sistem | ✓ | |
| 3 | Perancangan sistem | ✓ | ✓ |
| 4 | Implementasi dan pengkodean | | ✓ |
| 5 | Pengujian sistem | | ✓ |
| 6 | Penyusunan laporan | | ✓ |

---

## 3.4 Metode Pengumpulan Data

Untuk mendapatkan data yang akurat dan komprehensif, penelitian ini menggunakan beberapa metode pengumpulan data sebagai berikut:

### 3.4.1 Observasi Langsung (*Direct Observation*)

Observasi langsung dilakukan dengan mendatangi lokasi kerja di PT. Sumber Masanda Jaya untuk mengamati secara langsung aktivitas operasional pengelolaan armada logistik. Kegiatan observasi meliputi:
- Pengamatan proses pengiriman barang menggunakan kendaraan logistik.
- Pengamatan proses pencatatan data armada dan jadwal perawatan.
- Pengamatan kondisi fisik kendaraan yang beroperasi.
- Pengamatan alur kerja operator, leader, dan manager dalam pengelolaan armada.

### 3.4.2 Wawancara (*Interview*)

Wawancara dilakukan dengan pihak-pihak terkait untuk memperoleh informasi mendalam mengenai permasalahan dan kebutuhan sistem. Responden yang diwawancarai meliputi:

| No | Responden | Posisi | Tujuan Wawancara |
|---|---|---|---|
| 1 | Manajer Perusahaan | Manager | Strategi pengelolaan armada, kebutuhan sistem |
| 2 | Supervisor Lapangan | Leader | Proses penjadwalan perawatan, kendala operasional |
| 3 | Operator Lapangan | Operator | Aktivitas harian, pelaporan kondisi kendaraan |

Pertanyaan wawancara yang diajukan meliputi:
1. Bagaimana proses pengelolaan armada logistik saat ini?
2. Bagaimana sistem perawatan kendaraan yang diterapkan?
3. Apa saja kendala yang dihadapi dalam pengelolaan armada secara manual?
4. Fitur apa saja yang diharapkan ada dalam sistem CMMS?
5. Bagaimana aksesibilitas pengguna terhadap perangkat mobile?

### 3.4.3 Studi Dokumentasi (*Documentation Study*)

Studi dokumentasi dilakukan dengan mengumpulkan dan menganalisis dokumen-dokumen terkait operasional perusahaan, meliputi:
- Data inventaris armada kendaraan.
- Catatan riwayat perawatan kendaraan.
- Formulir pelaporan kondisi kendaraan.
- Dokumen prosedur operasional standar (SOP) pengiriman.

### 3.4.4 Pustaka (*Library Research*)

Penelitian pustaka dilakukan untuk mendapatkan landasan teori dan referensi yang relevan dengan penelitian ini, meliputi:
- Buku-buku teks tentang sistem informasi manajemen perawatan.
- Jurnal ilmiah tentang computerized maintenance management system.
- Artikel teknis tentang pengembangan aplikasi web dengan Laravel.
- Dokumentasi resmi teknologi yang digunakan (Laravel, PHP, SQLite/MySQL).

---

## 3.5 Metode Pengembangan Sistem

Sistem CMMS ini dikembangkan menggunakan model **Waterfall** (*waterfall model*). Waterfall adalah model pengembangan perangkat lunak yang bersifat linier dan sekuensial, di mana setiap tahapan harus diselesaikan sebelum tahapan berikutnya dimulai (Pressman, 2014).

Model ini dipilih karena memiliki beberapa keunggulan yang sesuai dengan karakteristik proyek ini:

1. **Keterstrukan yang Jelas**: Setiap tahapan memiliki deliverable yang spesifik sehingga memudahkan monitoring kemajuan proyek.
2. **Dokumentasi Lengkap**: Setiap tahapan menghasilkan dokumentasi yang komprehensif, yang sangat penting untuk keperluan akademis (skripsi).
3. **Kebutuhan Stabil**: Kebutuhan sistem CMMS di PT. Sumber Masanda Jaya sudah cukup stabil dan terdefinisi dengan jelas melalui proses wawancara dan observasi.
4. **Skala Proyek**: Untuk skala proyek skripsi dengan durasi terbatas, Waterfall memberikan kejelasan timeline dan milestone yang dapat diandalkan.

Adapun tahapan-tahapan dalam model Waterfall yang diterapkan dalam penelitian ini adalah sebagai berikut:

### 3.5.1 Tahap 1: Requirement Analysis (Analisis Kebutuhan)

Tahap analisis kebutuhan bertujuan untuk memahami dan mendokumentasikan seluruh kebutuhan fungsional dan non-fungsional sistem CMMS. Aktivitas yang dilakukan pada tahap ini meliputi:

**a. Identifikasi Kebutuhan Fungsional**

Kebutuhan fungsional sistem CMMS yang berhasil diidentifikasi adalah sebagai berikut:

| No | Modul | Kebutuhan Fungsional |
|---|---|---|
| 1 | Autentikasi | Sistem harus mampu mengautentikasi pengguna dengan username dan password, serta menerapkan kontrol akses berbasis peran (manager, leader, operator). |
| 2 | Manajemen Armada | Sistem harus mampu melakukan CRUD (Create, Read, Update, Delete) data kendaraan logistik, termasuk kode armada, nama, tahun, trip per hari, tanggal servis terakhir, dan nomor polisi. |
| 3 | Penjadwalan | Sistem harus mampu membuat jadwal preventive maintenance, memantau status jadwal, dan mencatat penyelesaian jadwal beserta biaya perawatan. |
| 4 | Tracking | Sistem harus mampu melacak perjalanan armada dari awal hingga selesai, termasuk lokasi tujuan dan operator yang bertugas. |
| 5 | Laporan Kondisi | Sistem harus mampu menerima laporan kondisi kendaraan dari operator, termasuk jenis masalah, tingkat keparahan, keterangan, dan foto bukti. |
| 6 | Suku Cadang | Sistem harus mampu mengelola inventaris suku cadang dan memberikan peringatan jika stok di bawah batas minimum. |
| 7 | Dashboard | Sistem harus menampilkan ringkasan visual data berupa statistik, grafik distribusi status, grafik skor kondisi, dan tren biaya perawatan. |
| 8 | Activity Log | Sistem harus mencatat seluruh aktivitas pengguna untuk keperluan audit trail. |

**b. Identifikasi Kebutuhan Non-Fungsional**

| No | Kebutuhan Non-Fungsional | Deskripsi |
|---|---|---|
| 1 | Responsivitas | Antarmuka harus responsif dan dapat ditampilkan dengan baik pada berbagai ukuran layar (mobile, tablet, desktop). |
| 2 | Keamanan | Password harus dienkripsi menggunakan bcrypt, dan sistem harus menerapkan CSRF token untuk setiap transmisi data. |
| 3 | Performa | Sistem harus merespons dalam waktu kurang dari 3 detik untuk setiap request. |
| 4 | Ketersediaan | Sistem harus dapat diakses 24 jam melalui browser pada perangkat mobile maupun desktop. |
| 5 | Usability | Antarmuka harus intuitif dan mudah digunakan oleh pengguna dengan tingkat kemampuan teknis yang beragam. |
| 6 | Portabilitas | Sistem harus dapat diakses melalui berbagai browser modern (Chrome, Firefox, Safari, Edge). |

**c. Analisis Aktor Sistem**

Berdasarkan hasil observasi dan wawancara, teridentifikasi tiga aktor utama dalam sistem CMMS:

| No | Aktor | Deskripsi | Level Akses |
|---|---|---|---|
| 1 | Manager | Pengguna dengan akses penuh terhadap seluruh fitur sistem, termasuk pengelolaan user, armada, lokasi, jadwal, suku cadang, dan laporan. | Administrator |
| 2 | Leader | Pengguna yang bertanggung jawab atas penjadwalan servis, pengelolaan lokasi, dan pembuatan akun operator. | Supervisor |
| 3 | Operator | Pengguna lapangan yang melakukan tracking pengiriman dan pelaporan kondisi kendaraan. | Field User |

### 3.5.2 Tahap 2: System Design (Perancangan Sistem)

Tahap perancangan sistem bertujuan untuk mendesain arsitektur sistem, antarmuka pengguna, dan struktur database berdasarkan kebutuhan yang telah teridentifikasi.

**a. Perancangan Arsitektur Sistem**

Sistem CMMS dirancang dengan arsitektur **MVC (Model-View-Controller)** yang diimplementasikan dalam kerangka kerja Laravel. Arsitektur MVC memisahkan aplikasi menjadi tiga komponen utama:

```
┌─────────────────────────────────────────────────────────┐
│                  PRESENTATION                            │
│            (View - HTML/CSS/JS)                         │
│         ┌───────────────────────────┐                   │
│         │   welcome.blade.php       │                   │
│         │   (Single Page App)       │                   │
│         └───────────────────────────┘                   │
└────────────────────┬────────────────────────────────────┘
                     │ HTTP Request / JSON Response
                     ▼
┌─────────────────────────────────────────────────────────┐
│              APPLICATION LAYER                           │
│          (Controller - CMMSController.php)               │
│         ┌───────────────────────────┐                   │
│         │  - Auth Controller        │                   │
│         │  - Fleet Controller       │                   │
│         │  - Schedule Controller    │                   │
│         │  - Tracking Controller    │                   │
│         │  - Report Controller      │                   │
│         └───────────────────────────┘                   │
└────────────────────┬────────────────────────────────────┘
                     │ Query Builder / Eloquent
                     ▼
┌─────────────────────────────────────────────────────────┐
│               DATA LAYER                                 │
│          (Database - SQLite / MySQL)                     │
│         ┌───────────────────────────┐                   │
│         │  users, vehicles,         │                   │
│         │  schedules, repairs,      │                   │
│         │  tracks, reports,         │                   │
│         │  spare_parts, locations,  │                   │
│         │  activity_logs            │                   │
│         └───────────────────────────┘                   │
└─────────────────────────────────────────────────────────┘
```

**b. Perancangan Antarmuka Pengguna (UI/UX)**

Perancangan antarmuka mengikuti prinsip *mobile-first design* dengan fitur sebagai berikut:
- **Color Palette**: Warna tema oranye (#FF6B00) dengan latar belakang abu-abu hangat (#F5F3F0).
- **Typography**: Font Plus Jakarta Sans dengan variasi weight 400-800.
- **Layout**: Container max-width 430px dengan border-radius untuk simulasi device frame pada desktop.
- **Navigation**: Bottom navigation bar dengan 5 menu utama (Beranda, Armada, Input, Tracking, Jadwal).
- **Component Design**: Card-based layout dengan rounded corners dan subtle shadow.

**c. Perancangan Basis Data**

Perancangan basis data menggunakan pendekatan *relational database* dengan 9 tabel utama. Hubungan antar tabel dirancang menggunakan foreign key untuk memastikan integritas data:

```
users ──────────────┐
                    │
vehicles ───┬───────┤
            │       │
            ├── schedules ──── repairs
            │
            ├── tracks
            │
            ├── reports
            │
locations ──┤
            │
spare_parts─┘

activity_logs ── users (user_id)
```

### 3.5.3 Tahap 3: Implementation (Implementasi)

Tahap implementasi merupakan tahap pengkodean (*coding*) di mana rancangan sistem diubah menjadi program komputer yang berfungsi. Pengkodean dilakukan menggunakan bahasa pemrograman PHP dengan framework Laravel.

**a. Struktur Direktori Proyek**

```
cmms/
├── app/
│   ├── Console/Commands/        # Command artisan
│   ├── Exceptions/              # Exception handling
│   └── Http/
│       ├── Controllers/         # CMMSController.php
│       ├── Kernel.php           # HTTP Kernel
│       └── Middleware/           # Middleware keamanan
├── bootstrap/                   # Bootstrap aplikasi
├── config/                      # Konfigurasi sistem
├── database/
│   ├── migrations/              # Struktur database
│   └── seeders/                 # Data awal
├── public/                      # Aset publik (index.php, PWA)
├── resources/views/             # Template Blade
├── routes/                      # Definisi rute (web.php)
├── storage/                     # File yang diupload
├── .env                         # Environment variables
├── .htaccess                    # Konfigurasi Apache
├── artisan                      # Laravel CLI
├── composer.json                # Dependency PHP
└── manifest.webmanifest         # PWA manifest
```

**b. Teknologi yang Digunakan**

| No | Komponen | Teknologi | Versi | Alasan Pemilihan |
|---|---|---|---|---|
| 1 | Backend Framework | Laravel | 11.x | Framework PHP terpopuler dengan fitur lengkap, keamanan bawaan, dan ekosistem yang luas. |
| 2 | Bahasa Pemrograman | PHP | 8.1+ | Bahasa server-side yang umum digunakan untuk pengembangan web, mudah dipelajari, dan didukung luas. |
| 3 | Database (Dev) | SQLite | 3.x | Database file-based yang ringan, tidak memerlukan instalasi server terpisah, ideal untuk development. |
| 4 | Database (Prod) | MySQL | 8.x | Database relasional yang stabil dan scalable untuk lingkungan produksi. |
| 5 | Frontend | HTML5, CSS3, JavaScript | Vanilla | Teknologi web standar tanpa framework, menghasilkan aplikasi ringan dengan kompatibilitas luas. |
| 6 | Font | Plus Jakarta Sans | Google Fonts | Font modern dengan readability tinggi dan mendukung karakter bahasa Indonesia. |
| 7 | Ikon | Font Awesome | 6.5.0 | Library ikon terlengkap dengan lebih dari 6,000 ikon. |
| 8 | Hosting | InfinityFree | - | Layanan hosting gratis yang mendukung PHP dan MySQL. |

**c. Rute API**

Sistem CMMS menggunakan arsitektur RESTful API dengan rute-rute berikut:

| Method | Endpoint | Deskripsi | Akses |
|---|---|---|---|
| GET | / | Halaman utama (SPA) | Public |
| POST | /login | Autentikasi pengguna | Public |
| POST | /logout | Keluar dari sistem | Authenticated |
| PUT | /profile | Perbarui profil | Authenticated |
| GET | /data | Ambil seluruh data | Authenticated |
| POST | /report | Kirim laporan kondisi | Authenticated |
| POST | /users | Tambah pengguna | Manager, Leader |
| DELETE | /users/{id} | Hapus pengguna | Manager, Leader |
| POST | /vehicles | Tambah armada | Manager |
| PUT | /vehicles/{code} | Edit armada | Manager |
| DELETE | /vehicles/{code} | Hapus armada | Manager |
| POST | /schedules | Buat jadwal | Manager, Leader |
| POST | /schedules/{id}/complete | Selesaikan jadwal | Manager, Leader |
| DELETE | /schedules/{id} | Hapus jadwal | Manager, Leader |
| POST | /tracks | Mulai tracking | All Roles |
| POST | /tracks/{id}/end | Selesai tracking | All Roles |
| POST | /parts | Tambah suku cadang | Manager |
| PUT | /parts/{id} | Edit suku cadang | Manager |
| DELETE | /parts/{id} | Hapus suku cadang | Manager |
| POST | /locations | Tambah lokasi | Manager, Leader |
| DELETE | /locations/{id} | Hapus lokasi | Manager, Leader |

### 3.5.4 Tahap 4: Testing (Pengujian)

Tahap pengujian bertujuan untuk memastikan bahwa sistem yang telah diimplementasikan berfungsi sesuai dengan kebutuhan yang telah ditetapkan. Pengujian dilakukan dengan beberapa pendekatan:

**a. Pengujian Unit (*Unit Testing*)**

Pengujian unit dilakukan pada level fungsi dan metode individual. Beberapa kasus pengujian unit meliputi:
- Pengujian validasi input pada controller.
- Pengujian fungsi enkripsi password (bcrypt).
- Pengujian normalisasi data (normalizeUser, normalizeVehicle, dll.).
- Pengujian fungsi penyimpanan foto base64 (storeBase64Photo).

**b. Pengujian Integrasi (*Integration Testing*)**

Pengujian integrasi dilakukan untuk memastikan interaksi antar komponen sistem berfungsi dengan benar:
- Pengujian interaksi controller dengan database.
- Pengujian alur autentikasi dari login hingga session storage.
- Pengujian CRUD operasi dari frontend hingga database.

**c. Pengujian Sistem (*System Testing*)**

Pengujian sistem dilakukan untuk menguji seluruh sistem secara keseluruhan:
- Pengujian seluruh alur kerja modul (login → navigasi → operasi data → logout).
- Pengujian responsivitas pada berbagai ukuran layar.
- Pengujian keamanan (CSRF, role-based access control, SQL injection).

**d. Pengujian Penerimaan (*User Acceptance Testing*)**

Pengujian penerimaan dilibatkan pengguna akhir (operator, leader, manager) untuk memvalidasi kepuasan dan kemudahan penggunaan sistem.

### 3.5.5 Tahap 5: Maintenance (Pemeliharaan)

Tahap pemeliharaan merupakan tahap terakhir dalam model Waterfall yang bertujuan untuk memastikan sistem tetap berfungsi dengan baik setelah di-deploy ke lingkungan produksi. Aktivitas pemeliharaan meliputi:

1. **Pemeliharaan Corrective**: Perbaikan bug atau error yang ditemukan setelah sistem beroperasi.
2. **Pemeliharaan Adaptive**: Penyesuaian sistem terhadap perubahan lingkungan (update PHP, Laravel, atau browser).
3. **Pemeliharaan Perfective**: Peningkatan fitur dan performa berdasarkan umpan balik pengguna.
4. **Pemeliharaan Preventive**: Pencegahan potensi masalah melalui backup database secara berkala dan pemantauan log sistem.

---

## 3.6 Alat dan Bahan

### 3.6.1 Perangkat Keras (*Hardware*)

| No | Komponen | Spesifikasi |
|---|---|---|
| 1 | Laptop/PC | Processor Intel Core i5 atau setara, RAM 8GB, Storage 256GB SSD |
| 2 | Smartphone | Android/iOS dengan browser modern (untuk testing responsivitas) |
| 3 | Koneksi Internet | Minimum 2 Mbps untuk development dan testing |

### 3.6.2 Perangkat Lunak (*Software*)

| No | Komponen | Keterangan |
|---|---|---|
| 1 | Sistem Operasi | Windows 10/11 atau Linux |
| 2 | Code Editor | Visual Studio Code |
| 3 | Browser | Google Chrome / Mozilla Firefox (untuk development dan testing) |
| 4 | PHP Runtime | PHP 8.1 atau lebih baru |
| 5 | Composer | Package manager untuk dependency PHP |
| 6 | Laravel | Framework PHP untuk backend |
| 7 | SQLite/MySQL | Database management system |
| 8 | FileZilla | FTP client untuk deployment ke hosting |
| 9 | Git | Version control system |

### 3.6.3 Library dan Framework

| No | Library/Framework | Fungsi |
|---|---|---|
| 1 | Laravel 11.x | Framework backend PHP |
| 2 | Font Awesome 6.5.0 | Ikon grafis |
| 3 | Google Fonts | Tipeografi |
| 4 | Web App Manifest | Konfigurasi PWA |
| 5 | Service Worker API | Caching dan offline support |

---

## 3.7 Diagram Alur Proses Waterfall

Berikut adalah diagram alur proses pengembangan sistem menggunakan model Waterfall:

```
┌─────────────────────────────────────────────────────────┐
│                                                         │
│   ┌─────────────────────────────────────────────────┐   │
│   │         1. REQUIREMENT ANALYSIS                 │   │
│   │  - Observasi langsung                           │   │
│   │  - Wawancara responden                          │   │
│   │  - Studi dokumentasi                            │   │
│   │  - Dokumen: SRS (Software Requirement Spec)     │   │
│   └──────────────────────┬──────────────────────────┘   │
│                          ▼                              │
│   ┌─────────────────────────────────────────────────┐   │
│   │         2. SYSTEM DESIGN                        │   │
│   │  - Arsitektur MVC                               │   │
│   │  - Desain database (ERD)                        │   │
│   │  - Desain UI/UX (Mockup)                        │   │
│   │  - Dokumen: SDD (Software Design Document)      │   │
│   └──────────────────────┬──────────────────────────┘   │
│                          ▼                              │
│   ┌─────────────────────────────────────────────────┐   │
│   │         3. IMPLEMENTATION                       │   │
│   │  - Pengkodean backend (Laravel)                 │   │
│   │  - Pengkodean frontend (HTML/CSS/JS)            │   │
│   │  - Konfigurasi database                         │   │
│   │  - Dokumen: Source Code                         │   │
│   └──────────────────────┬──────────────────────────┘   │
│                          ▼                              │
│   ┌─────────────────────────────────────────────────┐   │
│   │         4. TESTING                              │   │
│   │  - Unit testing                                 │   │
│   │  - Integration testing                          │   │
│   │  - System testing                               │   │
│   │  - User acceptance testing                      │   │
│   │  - Dokumen: Test Case & Test Report             │   │
│   └──────────────────────┬──────────────────────────┘   │
│                          ▼                              │
│   ┌─────────────────────────────────────────────────┐   │
│   │         5. MAINTENANCE                          │   │
│   │  - Deployment ke production                     │   │
│   │  - Monitoring dan support                       │   │
│   │  - Pemeliharaan berkala                         │   │
│   └─────────────────────────────────────────────────┘   │
│                                                         │
└─────────────────────────────────────────────────────────┘
```

---

## 3.8 Ringkasan Bab 3

Bab ini telah menjelaskan metode penelitian yang digunakan dalam pengembangan sistem CMMS Armada Logistik di PT. Sumber Masanda Jaya. Penelitian ini menggunakan metode deskriptif kualitatif dengan model pengembangan Waterfall yang terdiri dari lima tahapan: analisis kebutuhan, perancangan sistem, implementasi, pengujian, dan pemeliharaan.

Metode pengumpulan data yang digunakan meliputi observasi langsung, wawancara, studi dokumentasi, dan penelitian pustaka. Sistem dikembangkan menggunakan framework Laravel dengan arsitektur MVC, database SQLite/MySQL, dan antarmuka responsive berbasis PWA.

Pemilihan model Waterfall didasarkan pada keterstrukan yang jelas, kebutuhan dokumentasi yang komprehensif untuk keperluan akademis, stabilitas kebutuhan sistem, serta kesesuaian dengan skala dan durasi proyek skripsi.

---

# BAB 4
# HASIL DAN PEMBAHASAN

## 4.1 Hasil Implementasi Sistem

Sistem Computerized Maintenance Management System (CMMS) Armada Logistik telah berhasil diimplementasikan menggunakan framework Laravel versi terbaru dengan arsitektur Single Page Application (SPA) yang responsif. Sistem ini dirancang untuk memenuhi kebutuhan pengelolaan armada logistik di PT. Sumber Masanda Jaya dengan menerapkan metode preventive maintenance berbasis web.

### 4.1.1 Lingkungan Pengembangan

Tabel berikut menunjukkan lingkungan pengembangan yang digunakan dalam pembuatan sistem CMMS:

| Komponen | Teknologi |
|---|---|
| Backend Framework | Laravel (PHP) |
| Database | SQLite (Development) / MySQL (Produksi) |
| Frontend | HTML5, CSS3, JavaScript (Vanilla) |
| Server Web | Apache (InfinityFree Hosting) |
| Protokol | HTTPS (SSL/TLS) |
| PWA | Service Worker, Web App Manifest |
| IDE | Visual Studio Code |

### 4.1.2 Arsitektur Sistem

Sistem CMMS dibangun dengan arsitektur MVC (Model-View-Controller) yang diadaptasi dalam kerangka kerja Laravel. Arsitektur sistem terdiri dari tiga lapisan utama:

1. **Presentation Layer (View)**: Menggunakan template Blade dengan pendekatan Single Page Application (SPA) di mana seluruh antarmuka pengguna terdapat dalam satu file `welcome.blade.php` dengan navigasi dinamis menggunakan JavaScript.

2. **Application Layer (Controller)**: File `CMMSController.php` menangani seluruh logika bisnis aplikasi, mulai dari autentikasi, manajemen data, hingga logging aktivitas.

3. **Data Layer (Model/Database)**: Menggunakan Eloquent Query Builder untuk berinteraksi dengan database yang terdiri dari 9 tabel utama.

Arsitektur ini dipilih untuk menjaga kesederhanaan sistem sekaligus memastikan skalabilitas yang memadai untuk skala operasional perusahaan logistik.

---

## 4.2 Struktur Database

Sistem ini menggunakan 9 (sembilan) tabel utama yang dirancang untuk mendukung seluruh fungsi CMMS. Berikut adalah struktur database yang diimplementasikan:

### Tabel Struktur Tabel `users`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik pengguna |
| name | VARCHAR(255) | Nama lengkap pengguna |
| username | VARCHAR(255) UNIQUE | Username untuk login |
| password | VARCHAR(255) | Password terenkripsi (bcrypt) |
| role | VARCHAR(255) | Level akses (manager/leader/operator) |
| photo | VARCHAR(255) | Path foto profil |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `vehicles`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik kendaraan |
| code | VARCHAR(255) UNIQUE | Kode armada (contoh: SMJ-001) |
| name | VARCHAR(255) | Nama/jenis kendaraan |
| year | YEAR | Tahun pembuatan |
| trips_per_day | SMALLINT | Jumlah trip per hari |
| last_service_date | DATE | Tanggal servis terakhir |
| plate | VARCHAR(255) | Nomor polisi |
| service_count | SMALLINT | Jumlah servis yang sudah dilakukan |
| total_cost | BIGINT | Total biaya perawatan |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `schedules`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik jadwal |
| vehicle_code | VARCHAR(255) | Kode armada terkait |
| job_type | VARCHAR(255) | Jenis pekerjaan servis |
| scheduled_at | DATE | Tanggal jadwal servis |
| note | TEXT | Catatan tambahan |
| status | VARCHAR(255) | Status (menunggu/selesai) |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `repairs`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik perbaikan |
| vehicle_code | VARCHAR(255) | Kode armada terkait |
| repair_type | VARCHAR(255) | Jenis perbaikan |
| cost | BIGINT | Biaya perbaikan |
| note | TEXT | Catatan perbaikan |
| photo | VARCHAR(255) | Path foto bukti perbaikan |
| repaired_at | DATE | Tanggal perbaikan |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `tracks`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik tracking |
| vehicle_code | VARCHAR(255) | Kode armada |
| operator_name | VARCHAR(255) | Nama operator |
| status | VARCHAR(255) | Status (digunakan/selesai) |
| building | VARCHAR(255) | Lokasi tujuan (gedung) |
| machine | VARCHAR(255) | Mesin tujuan (opsional) |
| started_at | DATETIME | Waktu mulai pengiriman |
| ended_at | DATETIME | Waktu selesai pengiriman |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `reports`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik laporan |
| vehicle_code | VARCHAR(255) | Kode armada |
| issues | JSON | Daftar masalah yang dilaporkan |
| severity | VARCHAR(255) | Tingkat keparahan (ringan/sedang/berat) |
| notes | TEXT | Keterangan tambahan |
| photo | VARCHAR(255) | Path foto bukti |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `spare_parts`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik suku cadang |
| name | VARCHAR(255) | Nama suku cadang |
| qty | INTEGER | Jumlah stok saat ini |
| min_qty | INTEGER | Jumlah stok minimum |
| unit | VARCHAR(50) | Satuan (pcs, botol, liter) |
| note | VARCHAR(255) | Keterangan |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `activity_logs`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik log |
| user_id | BIGINT (FK) | Referensi ke tabel users |
| username | VARCHAR(255) | Username pelaku aksi |
| action | VARCHAR(255) | Jenis aksi yang dilakukan |
| details | VARCHAR(255) | Detail aksi |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

### Tabel Struktur Tabel `locations`

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT (PK) | Identifier unik lokasi |
| name | VARCHAR(255) | Nama lokasi |
| type | VARCHAR(255) | Tipe lokasi (gedung/mesin) |
| created_at | TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | Waktu pembaruan terakhir |

---

## 4.3 Implementasi Fitur Sistem

### 4.3.1 Sistem Autentikasi dan Otorisasi

Sistem CMMS menerapkan mekanisme autentikasi berbasis session dengan tiga tingkat otorisasi pengguna:

1. **Manager** (Level 1): Memiliki akses penuh terhadap seluruh fitur sistem, termasuk CRUD (Create, Read, Update, Delete) pada semua modul data.

2. **Leader** (Level 2): Dapat mengelola jadwal servis, lokasi, tracking, dan membuat akun operator baru.

3. **Operator** (Level 3): Dapat melakukan tracking pengiriman dan melaporkan kondisi kendaraan.

Proses autentikasi dilakukan melalui endpoint `POST /login` yang menerima username dan password. Password disimpan menggunakan enkripsi bcrypt dengan mekanisme migrasi otomatis dari plain text untuk kompatibilitas data lama. Berikut adalah alur autentikasi:

```
User Input → Validasi Input → Query Database → Verifikasi Password → 
Session Store → Log Aktivitas → Return User Data
```

Setiap sesi pengguna disimpan di server menggunakan Laravel Session dengan mekanisme CSRF (Cross-Site Request Forgery) token untuk keamanan transmisi data.

### 4.3.2 Manajemen Armada (Fleet Management)

Modul manajemen armada memungkinkan manager untuk mengelola data kendaraan logistik. Fitur ini mencakup:

- **Penambahan Kendaraan**: Input data meliputi kode armada, nama kendaraan, tahun pembuatan, jumlah trip per hari, tanggal servis terakhir, dan nomor polisi.
- **Pembaruan Data**: Edit informasi kendaraan yang sudah terdaftar.
- **Penghapusan**: Hapus data kendaraan dari sistem.
- **Tampilan Status**: Setiap kendaraan ditampilkan dengan informasi jumlah servis, total biaya perawatan, dan status kondisi.

Setiap kendaraan memiliki kode unik berformat `SMJ-XXX` (contoh: SMJ-001) yang memudahkan identifikasi dalam operasional sehari-hari.

### 4.3.3 Sistem Penjadwalan Preventive Maintenance

Fitur penjadwalan merupakan inti dari metode preventive maintenance yang diterapkan dalam sistem ini. Sistem memungkinkan manager dan leader untuk:

- **Membuat Jadwal Servis**: Menginput jenis pekerjaan (servis ringan, servis berat, penggantian komponen), tanggal pelaksanaan, dan catatan.
- **Status Tracking**: Setiap jadwal memiliki status "menunggu" atau "selesai".
- **Penyelesaian Jadwal**: Saat jadwal diselesaikan, sistem otomatis membuat catatan perbaikan (repair record) dengan biaya dan foto bukti.

Jenis pekerjaan servis yang didukung meliputi:
1. Servis Ringan (penggantian oli, filter)
2. Servis Berat (overhaul mesin)
3. Penggantian Komponen (belt CVT, ban, dll.)

### 4.3.4 Tracking Pengiriman

Modul tracking memungkinkan operator, leader, dan manager untuk memantau perjalanan armada secara real-time:

- **Mulai Tracking**: Operator memulai pengiriman dengan memilih kendaraan, lokasi tujuan (gedung), dan mesin tujuan.
- **Selesai Tracking**: Operator menandai selesai pengiriman dengan waktu akhir yang tercatat otomatis.
- **Riwayat**: Semua data tracking tersimpan untuk analisis historis.

### 4.3.5 Laporan Kondisi Kendaraan

Fitur pelaporan kondisi memungkinkan semua pengguna untuk melaporkan masalah yang ditemukan pada kendaraan:

- **Jenis Masalah**: Mesin, Rem, Ban, Oli, CVT, Listrik, Lainnya.
- **Tingkat Keparahan**: Ringan (info), Sedang (warning), Berat (kritis).
- **Bukti Visual**: Upload foto kondisi kendaraan.
- **Penyimpanan**: Laporan tersimpan dalam format JSON untuk fleksibilitas data.

Sistem menampilkan peringatan mendesak (urgent alert) di dashboard jika terdapat laporan dengan tingkat keparahan "berat" yang belum ditangani.

### 4.3.6 Manajemen Suku Cadang

Modul suku cadang memungkinkan manager untuk mengelola inventaris komponen:

- **Data Master**: Nama suku cadang, jumlah stok, stok minimum, satuan, dan catatan.
- **Peringatan Stok Rendah**: Sistem menampilkan peringatan visual (warna merah) jika stok suku cadang di bawah jumlah minimum.
- **CRUD Operasi**: Penambahan, pengeditan, dan penghapusan data suku cadang.

### 4.3.7 Dashboard dan Analitik

Dashboard utama menyajikan ringkasan visual data sistem:

1. **Statistik Ringkas**: Jumlah armada, jadwal menunggu, laporan aktif, dan total biaya perawatan.
2. **Donut Chart**: Distribusi status armada (sehat, perhatian, kritis).
3. **Bar Chart**: Skor kondisi per motor berdasarkan waktu sejak servis terakhir dan jumlah trip.
4. **Grafik Biaya**: Tren biaya perawatan 6 bulan terakhir.
5. **Laporan Mendesak**: Daftar laporan dengan keparahan tinggi yang memerlukan penanganan segera.

### 4.3.8 Activity Logging

Seluruh aktivitas pengguna dicatat secara otomatis dalam tabel `activity_logs`. Log yang tercatat meliputi:
- Login dan logout
- Penambahan, pengeditan, dan penghapusan data
- Penyelesaian jadwal servis
- Mulai dan selesai tracking
- Pengiriman laporan kondisi

Log aktivitas ditampilkan pada halaman aktivitas dengan informasi username, jenis aksi, detail, dan timestamp.

### 4.3.9 Progressive Web Application (PWA)

Sistem CMMS diimplementasikan sebagai Progressive Web Application (PWA) yang memungkinkan:

- **Installable**: Dapat diinstal pada perangkat mobile seperti aplikasi native.
- **Offline Caching**: Service Worker meng-cache aset statis untuk akses offline.
- **App-like Experience**: Tampilan standalone tanpa address bar browser.

Implementasi PWA menggunakan:
- `manifest.webmanifest` untuk konfigurasi aplikasi
- `service-worker.js` untuk caching strategi (network-first untuk navigasi, cache-first untuk aset statis)
- Meta tags untuk kompatibilitas iOS dan Android

---

## 4.4 Antarmuka Pengguna (UI/UX)

### 4.4.1 Halaman Login

Halaman login menampilkan desain card-based dengan gradient orange (#FF6B00) sebagai warna tema utama. Komponen login terdiri dari:
- Logo aplikasi dengan ikon wrench
- Judul "CMMS" dan subjudul "PT. Sumber Masanda Jaya"
- Input username dengan ikon user
- Input password dengan fitur show/hide password
- Tombol "Masuk" dengan animasi loading

### 4.4.2 Dashboard Beranda

Dashboard menampilkan:
- Bagian peringatan mendesak (jika ada laporan berat)
- Kartu statistik 3 kolom (armada, jadwal menunggu, laporan aktif)
- Donut chart distribusi status
- Bar chart skor per motor
- Grafik biaya perawatan 6 bulan

### 4.4.3 Modul Armada

Tampilan daftar armada menggunakan filter chip untuk memfilter berdasarkan kondisi (Semua, Sehat, Perhatian, Kritis). Setiap kartu armada menampilkan:
- Ikon avatar dengan kode armada
- Nama kendaraan dan tahun
- Informasi trip/hari, nomor polisi
- Badge status kondisi
- Jumlah servis dan total biaya

### 4.4.4 Formulir Laporan Kondisi

Formulir laporan dirancang dengan UX yang intuitif:
- Dropdown pemilihan motor
- Chip selection untuk jenis masalah (7 opsi)
- Severity selector visual (Ringan/Sedang/Berat)
- Textarea keterangan
- Upload foto bukti
- Tombol kirim dengan validasi

### 4.4.5 Desain Responsif

Antarmuka dirancang mobile-first dengan breakpoint pada 500px:
- **Mobile (< 500px)**: Tampilan full-width dengan navigasi bottom bar
- **Desktop (≥ 500px)**: Tampilan container dengan max-width 430px dan border-radius seperti device frame

Warna tema menggunakan palette:
- Primary: #FF6B00 (Orange)
- Background: #F5F3F0 (Warm Gray)
- Success: #16A34A (Green)
- Warning: #D97706 (Amber)
- Danger: #DC2626 (Red)
- Info: #2563EB (Blue)

---

## 4.5 Pengujian Sistem

### 4.5.1 Pengujian Fungsional

Pengujian fungsional dilakukan untuk memastikan setiap fitur sistem berfungsi sesuai kebutuhan. Berikut adalah hasil pengujian:

#### Tabel Hasil Pengujian Modul Autentikasi

| No | Skenario Pengujian | Input | Hasil | Status |
|---|---|---|---|---|
| 1 | Login dengan credentials valid | username: ahmad, password: manager1 | Berhasil masuk ke dashboard | ✓ |
| 2 | Login dengan password salah | username: ahmad, password: salah | Pesan error "Username atau password salah" | ✓ |
| 3 | Login dengan username kosong | username: (kosong), password: manager1 | Validasi "Username dan password wajib diisi" | ✓ |
| 4 | Logout | Klik tombol Keluar | Sesi berakhir, kembali ke login | ✓ |
| 5 | Ubah profil | Input nama baru dan password baru | Profil berhasil diperbarui | ✓ |

#### Tabel Hasil Pengujian Modul Armada

| No | Skenario Pengujian | Input | Hasil | Status |
|---|---|---|---|---|
| 1 | Tambah armada baru | Kode: SMJ-004, Nama: Honda PCX | Armada berhasil ditambahkan | ✓ |
| 2 | Edit data armada | Ubah tahun menjadi 2022 | Data berhasil diperbarui | ✓ |
| 3 | Hapus armada | Hapus SMJ-004 | Armada berhasil dihapus | ✓ |
| 4 | Filter kondisi | Klik chip "Kritis" | Hanya menampilkan armada kritis | ✓ |

#### Tabel Hasil Pengujian Modul Penjadwalan

| No | Skenario Pengujian | Input | Hasil | Status |
|---|---|---|---|---|
| 1 | Buat jadwal servis | Pilih motor, jenis: Servis Ringan | Jadwal berhasil dibuat dengan status "menunggu" | ✓ |
| 2 | Selesaikan jadwal | Input biaya: 150000 | Jadwal status "selesai", repair record terbuat | ✓ |
| 3 | Hapus jadwal | Hapus jadwal #1 | Jadwal berhasil dihapus | ✓ |

#### Tabel Hasil Pengujian Modul Tracking

| No | Skenario Pengujian | Input | Hasil | Status |
|---|---|---|---|---|
| 1 | Mulai tracking | Pilih motor dan gedung tujuan | Tracking dimulai dengan waktu otomatis | ✓ |
| 2 | Selesai tracking | Klik selesai | Waktu akhir tercatat, status "selesai" | ✓ |
| 3 | Riwayat tracking | Lihat halaman tracking | Riwayat pengiriman tercatat lengkap | ✓ |

#### Tabel Hasil Pengujian Modul Laporan

| No | Skenario Pengujian | Input | Hasil | Status |
|---|---|---|---|---|
| 1 | Kirim laporan kondisi | Motor: SMJ-001, Masalah: Mesin, Keparahan: Sedang | Laporan berhasil dikirim | ✓ |
| 2 | Laporan dengan foto | Upload foto bukti | Foto tersimpan dan ditampilkan | ✓ |
| 3 | Export laporan | Filter tanggal dan kondisi, klik Export Excel | File CSV berhasil diunduh | ✓ |

### 4.5.2 Pengujian Responsivitas

Pengujian responsivitas dilakukan pada berbagai ukuran layar:

| Perangkat | Ukuran Layar | Hasil Tampilan | Status |
|---|---|---|---|
| iPhone SE | 375 x 667px | Tampilan mobile optimal, navigasi bottom bar | ✓ |
| iPhone 14 | 393 x 852px | Tampilan mobile optimal | ✓ |
| Samsung Galaxy S21 | 360 x 800px | Tampilan mobile optimal | ✓ |
| iPad Mini | 768 x 1024px | Tampilan tablet dengan container 430px | ✓ |
| Laptop | 1366 x 768px | Tampilan desktop dengan frame device | ✓ |
| Desktop Monitor | 1920 x 1080px | Tampilan desktop center-aligned | ✓ |

### 4.5.3 Pengujian Keamanan

| No | Skenario Pengujian | Hasil | Status |
|---|---|---|---|
| 1 | Operator mencoba akses CRUD user | Pesan error 403 "Anda tidak memiliki akses" | ✓ |
| 2 | Leader mencoba membuat akun leader | Pesan error "Leader hanya bisa menambahkan akun level Operator" | ✓ |
| 3 | Input SQL injection pada login | Input di-sanitize, tidak ada dampak | ✓ |
| 4 | CSRF token validation | Request tanpa token ditolak | ✓ |
| 5 | Password storage | Password tersimpan dalam bcrypt hash | ✓ |

---

## 4.6 Pembahasan

### 4.6.1 Penerapan Metode Preventive Maintenance

Sistem CMMS yang dibangun berhasil menerapkan konsep preventive maintenance melalui beberapa mekanisme:

1. **Penjadwalan Berkala**: Modul jadwal memungkinkan manager untuk membuat jadwal servis secara berkala berdasarkan kondisi kendaraan. Setiap jadwal memiliki status tracking yang memudahkan pemantauan pelaksanaan.

2. **Monitoring Kondisi**: Dashboard menampilkan grafik skor kondisi per motor yang dihitung berdasarkan jumlah hari sejak servis terakhir dan intensitas penggunaan (trip per hari). Semakin lama waktu sejak servis terakhir dan semakin tinggi intensitas penggunaan, semakin rendah skor kondisi kendaraan.

3. **Sistem Peringatan**: Fitur peringatan otomatis pada dashboard akan menampilkan laporan berat (urgent alert) yang memerlukan penanganan segera. Selain itu, modul suku cadang memberikan peringatan visual ketika stok suku cadang di bawah batas minimum.

4. **Riwayat Perawatan**: Seluruh aktivitas perawatan tercatat dalam sistem, termasuk riwayat servis, biaya perawatan, dan foto bukti. Data ini menjadi dasar pengambilan keputusan untuk jadwal servis selanjutnya.

### 4.6.2 Keunggulan Sistem yang Dikembangkan

Berdasarkan hasil implementasi dan pengujian, sistem CMMS yang dikembangkan memiliki beberapa keunggulan:

1. **Mobile-First Design**: Antarmuka dirancang dengan pendekatan mobile-first yang memungkinkan operator di lapangan mengakses sistem melalui smartphone tanpa perlu aplikasi terpisah.

2. **Progressive Web App (PWA)**: Implementasi PWA memungkinkan instalasi aplikasi pada perangkat mobile dan caching aset statis untuk akses yang lebih cepat.

3. **Role-Based Access Control**: Sistem menerapkan kontrol akses berbasis peran dengan tiga level yang memastikan setiap pengguna hanya dapat mengakses fitur sesuai wewenangnya.

4. **Zero-Framework Frontend**: Antarmuka dibangun menggunakan HTML, CSS, dan JavaScript vanilla tanpa framework frontend berat (React, Vue, Angular), sehingga ukuran aplikasi lebih ringan dan kompatibilitas browser lebih luas.

5. **Biaya Hosting Minimal**: Sistem dapat di-hosting pada layanan gratis (InfinityFree) dengan SQLite maupun MySQL, sehingga cocok untuk skala usaha kecil menengah.

### 4.6.3 Keterbatasan Sistem

Beberapa keterbatasan yang perlu diperhatikan:

1. **Single-File Architecture**: Seluruh antarmuka terdapat dalam satu file Blade (`welcome.blade.php`) yang berukuran besar. Pendekatan ini memudahkan deployment tetapi mengurangi maintainability untuk skala yang lebih besar.

2. **Tanpa Real-Time Notification**: Sistem belum menerapkan WebSocket atau server-sent events untuk notifikasi real-time. Notifikasi hanya diperbarui saat pengguna melakukan refresh data.

3. **Kapasitas Hosting Gratis**: Pada layanan hosting gratis (InfinityFree), performa aplikasi dapat terbatas untuk jumlah pengguna concurrent yang tinggi.

4. **Backup Manual**: Backup database harus dilakukan secara manual melalui phpMyAdmin karena tidak tersedia fitur backup otomatis pada hosting gratis.

### 4.6.4 Perbandingan dengan Sistem Sebelumnya

Sebelum implementasi CMMS, pengelolaan armada di PT. Sumber Masanda Jaya dilakukan secara manual menggunakan spreadsheet dan catatan fisik. Perbandingan kedua pendekatan:

| Aspek | Manual (Sebelum) | CMMS (Sesudah) |
|---|---|---|
| Pencatatan | Spreadsheet/Kertas | Database terpusat |
| Penjadwalan | Kalender manual | Sistem otomatis |
| Tracking | Telepon/SMS | Aplikasi web |
| Laporan | Dokumen fisik | Digital + foto |
| Analisis | Manual | Grafik otomatis |
| Akses | Satu lokasi | Multi-device |
| Backup | Manual | Database server |

---

## 4.7 Ringkasan

Bab ini telah menjelaskan hasil implementasi sistem CMMS Armada Logistik dengan metode preventive maintenance berbasis web responsif di PT. Sumber Masanda Jaya. Sistem berhasil diimplementasikan dengan sembilan modul utama: autentikasi, manajemen armada, penjadwalan, tracking, pelaporan kondisi, manajemen suku cadang, dashboard analitik, activity logging, dan PWA.

Pengujian fungsional menunjukkan bahwa seluruh fitur sistem beroperasi sesuai spesifikasi. Pengujian responsivitas membuktikan antarmuka dapat ditampilkan dengan baik pada berbagai ukuran layar. Pengujian keamanan memastikan kontrol akses berbasis peran berfungsi dengan benar.

Penerapan metode preventive maintenance terwujud melalui mekanisme penjadwalan servis berkala, monitoring kondisi kendaraan, sistem peringatan dini, dan pencatatan riwayat perawatan yang komprehensif.

---

# DAFTAR PUSTAKA

1. Connolly, T. & Begg, C. (2015). *Database Systems: A Practical Approach to Design, Implementation, and Management*. 6th Edition. Pearson.

2. Crainic, T. G. & Laporte, G. (1997). "Planning Models for Vehicle Routing and Scheduling Problems." *Transportation Science*, 31(3), pp. 233-248.

3. Hipp, R. D. (2000). *SQLite: Past, Present, and Future*. https://www.sqlite.org

4. Laudon, K. C. & Laudon, J. P. (2020). *Management Information Systems: Managing the Digital Firm*. 16th Edition. Pearson.

5. Marcotte, E. (2011). *Responsive Web Design*. A Book Apart.

6. Mobley, R. K. (2002). *An Introduction to Predictive Maintenance*. 2nd Edition. Butterworth-Heinemann.

7. Moubray, J. (1997). *Reliability-Centered Maintenance*. 2nd Edition. McGraw-Hill.

8. O'Brien, J. A. (2019). *Management Information Systems*. 10th Edition. McGraw-Hill.

9. Otwell, T. (2011). *Laravel: The PHP Framework for Web Artisans*. https://laravel.com

10. Pressman, R. S. (2014). *Software Engineering: A Practitioner's Approach*. 8th Edition. McGraw-Hill.

11. Silberschatz, A., Korth, H. F., & Sudarshan, S. (2019). *Database System Concepts*. 7th Edition. McGraw-Hill.

12. Stallings, W. (2017). *Cryptography and Network Security: Principles and Practice*. 7th Edition. Pearson.
