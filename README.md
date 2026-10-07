# 🏥 JogjaCare - Integrated Modular Healthcare Management System

[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat&logo=laravel&logoColor=white)](#)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat&logo=php&logoColor=white)](#)
[![Frontend](https://img.shields.io/badge/UI-TailwindCSS%203.4%20%7C%20Alpine.js%20%7C%20Flowbite-38B2AC?style=flat&logo=tailwind-css&logoColor=white)](#)
[![Admin Panel](https://img.shields.io/badge/Admin-CoreUI%205%20%7C%20Bootstrap%205.3-0075FF?style=flat)](#)
[![Architecture](https://img.shields.io/badge/Architecture-Modular%20Monolith-blueviolet.svg)](#)
[![Database](https://img.shields.io/badge/Database-SQLite%20(Default)%20%7C%20MySQL-blue.svg)](#)
[![License](https://img.shields.io/badge/License-GPL--3.0-green.svg)](LICENSE.md)

**JogjaCare** adalah platform sistem informasi dan manajemen layanan kesehatan berbasis web yang mengadopsi arsitektur **Modular Monolith** di atas framework **Laravel 11.x**. Sistem ini dirancang untuk mendigitalisasi, memusatkan, dan mengintegrasikan seluruh direktori fasilitas medis, estimasi biaya tindakan, titik layanan faskes primer, hingga pengobatan komplementer di wilayah **D.I. Yogyakarta**.

Platform ini memadukan **Public Portal** modern (berbasis Tailwind CSS & Alpine.js) yang responsif dan ramah pengguna dengan **Enterprise Admin Dashboard** (berbasis CoreUI 5 & Yajra DataTables) dengan kontrol otorisasi bertingkat (*Role-Based Access Control*).

---

## 🌟 Mengapa Menggunakan JogjaCare?

- 🏛️ **Pusat Direktori Faskes Terpadu**: Mengintegrasikan Rumah Sakit, Klinik Pratama, Puskesmas, dan Pengobatan Komplementer dalam satu portal tunggal terverifikasi.
- 💰 **Transparansi Estimasi Biaya Medis**: Membantu masyarakat dan pasien mengetahui perkiraan biaya rawat jalan, tindakan, dan paket pemeriksaan kesehatan secara terbuka.
- 🧩 **Arsitektur Modular Terisolasi**: Dibangun menggunakan `nwidart/laravel-modules` sehingga setiap domain medis memiliki controller, migrasi, model, rute, dan tampilan independen yang mudah diperluas (*scalable*).
- 🛡️ **Keamanan Tingkat Lanjut & Audit Trail**: Dilengkapi sistem otorisasi granular via **Spatie Laravel Permission**, pencatatan aktivitas pengguna secara otomatis via **Spatie Activity Log**, serta pencadangan database berkala via **Spatie Backup**.
- 🌓 **Desain Modern Dual-Theme**: Dukungan penuh *Dark Mode* dan *Light Mode* pada portal publik maupun panel kontrol administrator.

---

## 🚀 5 Modul Medis Utama (*Core Medical Domains*)

JogjaCare membagi fungsionalitas sistem ke dalam 5 modul spesifik yang berdiri sendiri:

```text
                                 ┌─────────────────────────┐
                                 │   JOGJACARE CORE SYSTEM │
                                 └────────────┬────────────┘
        ┌──────────────────┬──────────────────┼──────────────────┬──────────────────┐
        ▼                  ▼                  ▼                  ▼                  ▼
┌───────────────┐  ┌───────────────┐  ┌───────────────┐  ┌───────────────┐  ┌───────────────┐
│ MedicalCenter │  │  MedicalCare  │  │ MedicalPoint  │  │  MedicalCost  │  │ MedicalAlter  │
│ Rumah Sakit & │  │ Layanan Medis │  │ Klinik & Faskes│ │ Transparansi │ │  Pengobatan   │
│ Pusat Medis   │  │  & Paket Care │  │    Primer     │  │  Biaya Medis  │  │  Komplementer │
└───────────────┘  └───────────────┘  └───────────────┘  └───────────────┘  └───────────────┘
```

1. **🏥 MedicalCenter Module (`Modules/MedicalCenter`)**:
   - Direktori rumah sakit umum, RS khusus, dan pusat kesehatan di seluruh kabupaten/kota D.I. Yogyakarta.
   - Manajemen profil fasilitas, poliklinik, instalasi gawat darurat (IGD), kontak darurat, dan koordinat lokasi.
2. **🩺 MedicalCare Module (`Modules/MedicalCare`)**:
   - Katalog paket pemeriksaan kesehatan (*Medical Check-Up*), program rawat jalan, vaksinasi, dan layanan spesialis.
3. **📍 MedicalPoint Module (`Modules/MedicalPoint`)**:
   - Pemetaan titik layanan kesehatan primer: Klinik Pratama, Puskesmas pembantu, apotek, dan laboratorium diagnostik terdekat.
4. **💵 MedicalCost Module (`Modules/MedicalCost`)**:
   - Informasi acuan tarif medis dan rentang biaya prosedur perawatan untuk keterbukaan informasi kepada publik.
5. **🌿 MedicalAlter Module (`Modules/MedicalAlter`)**:
   - Direktori layanan pengobatan tradisional berizin, klinik herbal, akupunktur, fisioterapi, dan terapi komplementer.

---

## 🛠️ Arsitektur & Teknologi

### Backend Core
- **Framework**: Laravel 11.x (PHP ^8.2)
- **Module Engine**: `nwidart/laravel-modules`
- **Authentication**: Laravel Breeze + Laravel Socialite (OAuth Google, GitHub, Facebook)
- **Authorization (RBAC)**: `spatie/laravel-permission` (^6.4)
- **Data Tables**: `yajra/laravel-datatables-oracle` (^11.0)
- **Media & File Management**: `spatie/laravel-medialibrary` & `unisharp/laravel-filemanager`
- **Logging & Utilities**: `spatie/laravel-activitylog`, `spatie/laravel-backup`, `arcanedev/log-viewer`

### Frontend & UI
- **Public Portal**: Tailwind CSS 3.4, Flowbite 2.3, Alpine.js 3.4, Livewire 3.4, Vite 5.2
- **Admin Panel**: CoreUI 5.0, Bootstrap 5.3, FontAwesome 6.5, Sass Preprocessor

---

## 💻 Tata Cara Instalasi

### 1. Prasyarat Sistem
Pastikan lingkungan lokal Anda telah memenuhi spesifikasi berikut:
- **PHP** >= 8.2 (dengan ekstensi `pdo_sqlite`, `pdo_mysql`, `mbstring`, `openssl`, `gd`/`imagick`, `zip`)
- **Composer** >= 2.x
- **Node.js** >= 18.x & **NPM**
- **Git**

---

### 2. Langkah Instalasi Langkah-demi-Langkah

```bash
# 1. Clone repositori
git clone https://github.com/MasterPandaa/Jogjacare.git
cd Jogjacare

# 2. Install dependensi backend (Composer)
composer install

# 3. Install dependensi frontend (NPM)
npm install

# 4. Buat file konfigurasi lingkungan (.env)
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Jalankan migrasi dan seeder database
php artisan migrate --seed

# 7. Hubungkan direktori storage publik
php artisan storage:link

# 8. Build aset frontend (Tailwind & Vite)
npm run build
```

---

### 3. Menjalankan Server Lokal

Jalankan dua terminal terpisah untuk *development*:

```bash
# Terminal 1: Jalankan server aplikasi Laravel
php artisan serve

# Terminal 2: Jalankan asset hot-reloading (opsional untuk frontend dev)
npm run dev
```

Buka peramban (*browser*) dan akses: **`http://127.0.0.1:8000`**

---

### 🐳 Opsi Instalasi Menggunakan Docker (Laravel Sail)

Jika Anda lebih memilih menggunakan container Docker:

```bash
cp .env-sail .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail artisan storage:link
```

---

## 🔑 Kredensial Default & Hak Akses

Setelah menjalankan *seeder* (`php artisan migrate --seed`), akun default berikut siap digunakan:

| Peran (*Role*) | Alamat Email | Kata Sandi (*Password*) | Akses Area |
|---|---|---|---|
| **Super Admin** | `super@admin.com` | `secret` | Penuh (`/admin`, Settings, Backups, Users, Modules) |
| **Regular User** | `user@user.com` | `secret` | Frontend Portal & Pengaturan Profil |

> [!NOTE]
> Seluruh rute manajemen backend dilindungi oleh middleware `auth` dan permission `view_backend` pada rute namespace `/admin`.

---

## 📖 Panduan Penggunaan & Alur Kerja

```text
┌─────────────────────────┐      ┌─────────────────────────┐      ┌─────────────────────────┐
│ 1. Login Administrator  │ ───> │ 2. Buka Menu Modul      │ ───> │ 3. Publikasikan Data    │
│    Akses: /admin        │      │    (Contoh: MedCenter)  │      │    Fasilitas Medis      │
└─────────────────────────┘      └─────────────────────────┘      └─────────────────────────┘
                                                                               │
                                                                               ▼
                                 ┌─────────────────────────┐      ┌─────────────────────────┐
                                 │ 5. Audit Log & Backup   │ <─── │ 4. Pengunjung Akses     │
                                 │    Otomatis Tercatat    │      │    Portal Publik (Home) │
                                 └─────────────────────────┘      └─────────────────────────┘
```

1. **Akses Dashboard Admin**: Masuk ke `http://127.0.0.1:8000/login` menggunakan akun Super Admin.
2. **Manajemen Konten Faskes**: Masuk ke menu modul (misal: `/admin/medicalcenters`) untuk menambah, mengubah, atau memvalidasi data rumah sakit/layanan.
3. **Penyimpanan Media**: Manfaatkan *File Manager* terintegrasi untuk mengunggah foto fasilitas, logo klinik, atau dokumen izin operasional.
4. **Pencadangan Sistem (*Backup*)**: Buka `/admin/backups` untuk membuat dan mengunduh berkas ZIP cadangan database dan storage sewaktu-waktu.
5. **Pemantauan Log Aktivitas**: Periksa `/admin/activitylog` untuk meninjau jejak audit setiap aksi yang dilakukan oleh staf/admin.

---

## 🧪 Testing, Cache & Quality Control

### Pembersihan Cache Komprehensif
Jika Anda melakukan perubahan konfigurasi, route, atau permission, bersihkan cache dengan:
```bash
composer clear-all
```
*Atau secara mandiri:*
```bash
php artisan cache:forget spatie.permission.cache
php artisan optimize:clear
```

### Standarisasi Gaya Kode (Linting)
Proyek ini menggunakan **Laravel Pint** untuk menjaga kerapian kode:
```bash
composer pint
```

### Menjalankan Unit & Feature Test
```bash
php artisan test
```

---

## 📦 Struktur Direktori Proyek

```text
Jogjacare/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/              # Otentikasi Breeze & Socialite OAuth
│   │   │   ├── Backend/           # Controller Admin Panel (/admin)
│   │   │   └── Frontend/          # Controller Portal Publik
│   │   └── Middleware/            # Middleware otorisasi & role check
│   ├── Models/                    # Eloquent Models (User, Setting, dll.)
│   └── Notifications/             # Notifikasi email & sistem
├── Modules/                       # 5 Modul Kesehatan Terisolasi
│   ├── MedicalAlter/              # Pengobatan komplementer & herbal
│   ├── MedicalCare/               # Paket perawatan & program medis
│   ├── MedicalCenter/             # Rumah sakit & pusat kesehatan
│   ├── MedicalCost/               # Data transparansi tarif & biaya medis
│   └── MedicalPoint/              # Klinik pratama & faskes primer
├── database/
│   ├── migrations/                # Skema database tabel utama
│   └── seeders/                   # Seeder data awal & permission RBAC
├── resources/
│   ├── views/
│   │   ├── backend/               # Blade templates Admin CoreUI
│   │   └── frontend/              # Blade templates Portal Tailwind CSS
│   ├── css/                       # Sumber stylesheet Tailwind & Sass
│   └── js/                        # Asset bundler JavaScript
├── routes/
│   ├── web.php                    # Rute portal publik
│   ├── auth.php                   # Rute otentikasi
│   └── api.php                    # Rute endpoint RESTful API
├── composer.json                  # Definisi paket PHP & modul
├── package.json                   # Definisi paket Node.js & Vite
├── tailwind.config.js             # Konfigurasi Tailwind & tema
└── README.md                      # Dokumentasi komprehensif sistem
```

---

## 🔒 Keamanan & Praktik Terbaik

- **Role-Based Access Control (RBAC)**: Proteksi rute berbasis izin (*permission-guarded*) untuk mencegah eskalasi hak akses (*privilege escalation*).
- **CSRF & XSS Protection**: Proteksi bawaan form token Laravel dan auto-escaping pada Blade templating engine.
- **Audit Trail & Soft Deletes**: Setiap penghapusan entitas menerapkan *soft-delete* dengan pencatatan `deleted_by` dan *activity logging* lengkap.
- **Secure File Handling**: Validasi MIME-type dan sanitasi nama file pada upload media guna mencegah eksekusi skrip berbahaya.

---

## 📄 Lisensi & Kontribusi

Proyek ini didistribusikan di bawah lisensi [GPL-3.0-or-later](LICENSE.md).

Kontribusi, pelaporan kendala (*bug report*), dan usulan modul baru dipersilakan melalui [GitHub Issues](https://github.com/MasterPandaa/Jogjacare/issues) atau *Pull Request*.
