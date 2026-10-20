<p align="center">
  <img src="https://raw.githubusercontent.com/MasterPandaa/MasterPandaa/main/assets/banners/Jogjacare.svg" alt="Jogjacare Platform Banner" width="100%">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Architecture-Modular_Monolith-E11D48?style=flat-square" alt="Modular Monolith">
  <img src="https://img.shields.io/badge/Framework-Laravel_11-FF2D20?style=flat-square&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/Access-Spatie_RBAC-0284C7?style=flat-square" alt="Spatie">
  <img src="https://img.shields.io/badge/Frontend-Tailwind_|_Alpine.js-38BDF8?style=flat-square" alt="Frontend">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-10B981?style=flat-square" alt="License"></a>
</p>

## Overview

Jogjacare is an enterprise-grade healthcare and clinic management platform built using a **Modular Monolith** architecture on **Laravel 11**. Designed to centralize regional healthcare information across Yogyakarta, the platform provides public facility directories, transparent medical fee structures, and internal clinic administrative workflows.

---

## Core Capabilities

- **Modular Monolith Design**: Decouples domain logic into discrete modules (Directory, Doctor Scheduling, Patient Records, Billing) within a unified codebase.
- **Regional Health Directory**: Comprehensive listing of regional hospitals, community health centers (Puskesmas), and specialized clinics with geolocation tags.
- **Medical Fee Transparency**: Public searchable database of procedure tariffs and consultation estimates to prevent surprise billing.
- **Multi-Role Access Control**: Spatie RBAC boundaries separating Super Administrators, Clinic Staff, Medical Officers, and Citizens.
- **Appointment Request Pipeline**: Digital booking system allowing patients to schedule clinic visits with automated confirmation tracking.

---

## Quickstart

### Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/MasterPandaa/Jogjacare.git
   cd Jogjacare
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install && npm run build
   ```

3. Configure environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Migrate database:
   ```bash
   php artisan migrate --seed
   php artisan serve
   ```

---

## License

This project is licensed under the [MIT License](LICENSE).
