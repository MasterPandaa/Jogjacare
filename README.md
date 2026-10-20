# JogjaCare — Modular Healthcare Information & Directory Platform

[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat&logo=laravel&logoColor=white)](#)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat&logo=php&logoColor=white)](#)
[![Frontend](https://img.shields.io/badge/UI-TailwindCSS%203.4%20%7C%20Alpine.js-38B2AC?style=flat&logo=tailwind-css&logoColor=white)](#)
[![Admin Panel](https://img.shields.io/badge/Admin-CoreUI%205%20%7C%20Bootstrap%205.3-0075FF?style=flat)](#)
[![Architecture](https://img.shields.io/badge/Architecture-Modular%20Monolith-blueviolet.svg)](#)
[![Database](https://img.shields.io/badge/Database-SQLite%20(Default)%20%7C%20MySQL-blue.svg)](#)
[![License](https://img.shields.io/badge/License-GPL--3.0-green.svg)](LICENSE.md)

A healthcare directory and clinical services portal built on a **Modular Monolith** architecture with **Laravel 11.x**. JogjaCare centralizes verified medical facilities, primary healthcare providers, estimated procedural costs, and licensed complementary therapies across the Special Region of Yogyakarta (D.I. Yogyakarta).

The system integrates a responsive public portal (Tailwind CSS, Alpine.js) with an administrative back-office (CoreUI 5, Yajra DataTables) featuring fine-grained role-based access control.

---

## Architecture Overview

```text
                                 ┌─────────────────────────┐
                                 │   JOGJACARE CORE SYSTEM │
                                 └────────────┬────────────┘
        ┌──────────────────┬──────────────────┼──────────────────┬──────────────────┐
        ▼                  ▼                  ▼                  ▼                  ▼
┌───────────────┐  ┌───────────────┐  ┌───────────────┐  ┌───────────────┐  ┌───────────────┐
│ MedicalCenter │  │  MedicalCare  │  │ MedicalPoint  │  │  MedicalCost  │  │ MedicalAlter  │
│ Hospitals &   │  │ Clinical Care │  │ Primary Clinics│ │ Medical Cost  │ │ Complementary │
│ Med Centers   │  │ & Checkups    │  │ & Diagnostics │  │ Transparency  │ │ & Herbal Care │
└───────────────┘  └───────────────┘  └───────────────┘  └───────────────┘  └───────────────┘
```

JogjaCare structures its domain logic into 5 decoupled modules via `nwidart/laravel-modules`, ensuring clean boundaries between service areas:

1. **MedicalCenter Module (`Modules/MedicalCenter`)**: Manages public/private hospitals, emergency facilities, emergency phone contacts, and geolocation data.
2. **MedicalCare Module (`Modules/MedicalCare`)**: Packages clinical checkup tiers (MCU), outpatient schedules, vaccinations, and specialist clinics.
3. **MedicalPoint Module (`Modules/MedicalPoint`)**: Catalogs primary healthcare centers, pharmacies, and licensed diagnostic laboratories.
4. **MedicalCost Module (`Modules/MedicalCost`)**: Standardizes medical fee reference ranges and consultation cost benchmarks.
5. **MedicalAlter Module (`Modules/MedicalAlter`)**: Profiles certified complementary medicine, herbal clinics, acupuncture, and physical therapy centers.

---

## Technical Stack

- **Backend Framework**: Laravel 11.x, PHP 8.2+
- **Modular Engine**: `nwidart/laravel-modules`
- **Public Frontend**: Blade, Tailwind CSS 3.4, Alpine.js, Flowbite
- **Admin Interface**: CoreUI 5, Bootstrap 5.3, Yajra DataTables
- **Security & Authorization**: `spatie/laravel-permission` (Granular RBAC)
- **Observability**: `spatie/laravel-activitylog` (System Audit Trails) & `spatie/laravel-backup`
- **Database**: SQLite (Development) / MySQL 8.0+

---

## Installation & Setup

### Prerequisites

- PHP >= 8.2 (extensions: `curl`, `mbstring`, `pdo_sqlite`/`pdo_mysql`, `xml`, `zip`)
- Composer >= 2.x
- Node.js >= 18.x & NPM

### Setup Instructions

1. **Clone the repository**:
   ```bash
   git clone https://github.com/MasterPandaa/Jogjacare.git
   cd Jogjacare
   ```

2. **Install PHP and frontend dependencies**:
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Configure environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run migrations and seeders for all modules**:
   ```bash
   php artisan module:migrate
   php artisan module:seed
   ```
   *(Or standard `php artisan migrate --seed`)*

5. **Start development server**:
   ```bash
   php artisan serve
   ```
   Access the public portal at `http://localhost:8000`.

---

## License

This project is licensed under the [GNU General Public License v3.0](LICENSE.md).
