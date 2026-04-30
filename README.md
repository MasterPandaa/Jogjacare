# JogjaCare - Healthcare Management System

A modular healthcare information management system built on Laravel 11.x, designed to manage medical centers, healthcare services, points of care, medical costs, and alternative medicine providers.

---

## Table of Contents

- [Overview](#overview)
- [System Architecture](#system-architecture)
- [Technology Stack](#technology-stack)
- [Core Features](#core-features)
- [Medical Modules](#medical-modules)
- [Directory Structure](#directory-structure)
- [Installation Guide](#installation-guide)
- [Configuration](#configuration)
- [Custom Commands](#custom-commands)
- [User Roles & Permissions](#user-roles--permissions)
- [API & Routes](#api--routes)
- [Docker Support](#docker-support)
- [Security](#security)
- [Development Guidelines](#development-guidelines)
- [Troubleshooting](#troubleshooting)
- [License](#license)

## Overview

JogjaCare is a comprehensive healthcare information management platform developed to support medical service providers in Yogyakarta. The system enables administrators to manage medical centers, healthcare services, medical cost information, points of care, and alternative medicine providers through a centralized admin dashboard, while providing public access to healthcare information via a responsive frontend interface.

### Key Objectives
- Centralize healthcare facility information for the Yogyakarta region
- Provide role-based access control for administrators and content managers
- Support modular expansion for future healthcare service categories
- Enable multi-language support for diverse user communities
- Maintain data integrity with backup and audit logging capabilities

## System Architecture

JogjaCare follows a modular monolith architecture built on the Laravel framework:

- **Frontend Layer**: Public-facing interface built with Tailwind CSS, responsive design, dark mode support
- **Backend Layer**: Admin dashboard built with Bootstrap 5 and CoreUI, separate route namespace under `/admin`
- **Module System**: 5 healthcare-specific modules managed via `nwidart/laravel-modules`
- **Database Layer**: SQLite by default (configurable for MySQL/PostgreSQL), with migration and seeding support
- **Authentication**: Laravel Breeze with social login integration (Google, Facebook, GitHub)
- **Authorization**: Spatie Laravel Permission for role-based access control
- **File Management**: Laravel File Manager for media uploads
- **Activity Logging**: Spatie Laravel Activity Log for audit trails

### Modular Design

Each medical domain is implemented as an independent module with its own:
- Routes (frontend and backend)
- Controllers
- Models
- Database migrations
- Views (Blade templates)
- Configuration files
- Language files

## Technology Stack

### Backend
| Technology | Version | Purpose |
|-----------|---------|---------|
| PHP | ^8.2 | Core language |
| Laravel | ^11.0 | Web framework |
| SQLite | default | Database (MySQL/PostgreSQL supported) |
| Spatie Permission | ^6.4 | Role-based access control |
| Spatie Media Library | ^11.4 | File uploads and media management |
| Spatie Backup | ^8.6 | Application backup |
| Spatie Activity Log | ^4.8 | Audit logging |
| Laravel Socialite | ^5.12 | OAuth authentication |
| Livewire | ^3.4 | Dynamic UI components |
| Yajra DataTables | ^11.0 | Admin data tables |
| Intervention Image | ^3.7 | Image processing |
| UniSharp File Manager | ^2.9 | File browser |

### Frontend
| Technology | Version | Purpose |
|-----------|---------|---------|
| Tailwind CSS | ^3.4 | Frontend styling |
| Bootstrap | ^5.3 | Admin dashboard styling |
| CoreUI | ^5.0 | Admin UI components |
| FontAwesome | ^6.5 | Icons |
| AlpineJS | ^3.4 | Frontend interactions |
| Vite | ^5.2 | Asset bundling |
| Sass | ^1.72 | CSS preprocessing |
| Flowbite | ^2.3 | UI components |

### DevOps & Tools
| Tool | Purpose |
|------|---------|
| Laravel Pint | Code style fixing |
| Laravel Sail | Docker development |
| PHPUnit | Unit testing |
| Laravel Debugbar | Development debugging |
| Laravel Ignition | Error page styling |

## Core Features

### Authentication & Authorization
- **Multi-auth system**: Local registration/login with email verification
- **Social login**: Google, Facebook, GitHub OAuth integration
- **Role-based access**: Granular permissions via Spatie Laravel Permission
- **User management**: Create, edit, block, unblock, soft-delete users
- **Profile management**: Avatar upload, password change, email verification resend

### Admin Dashboard
- **Backend namespace**: All admin routes under `/admin` with `view_backend` permission
- **Dark mode**: Toggle between light and dark themes
- **DataTables**: Sortable, searchable tables for all resources
- **File manager**: Laravel File Manager integration for media handling
- **Backup manager**: Generate and download ZIP backups (database + files + source)
- **Log viewer**: Browse and monitor application logs via ArcaneDev Log Viewer
- **Activity log**: Track all user actions and system events
- **Notifications**: Dashboard and detail view for system notifications
- **Settings**: Dynamic application configuration

### Frontend
- **Public pages**: Home, About Us, Contact, Partner pages
- **Healthcare directories**: Browse medical facilities by category
- **Responsive design**: Mobile-first Tailwind CSS layout
- **Dark mode**: Automatic/manual theme switching
- **Localization**: Multi-language support with language switcher
- **Livewire components**: Privacy policy and terms pages

### Content Management
- **Dynamic menu system**: Configurable navigation menus
- **WYSIWYG editor**: Rich text editing for content
- **File browser**: Integrated media upload and selection
- **SEO-friendly URLs**: Slug-based routing for public content

## Medical Modules

JogjaCare implements 5 specialized healthcare modules:

### 1. MedicalCenter
Manages hospitals and medical center listings. Each center includes detailed information about facilities, departments, services, and contact details. Supports both frontend public browsing and backend administration.

### 2. MedicalCare
Handles general healthcare services and care programs. Enables management of medical service offerings, care packages, and health program descriptions accessible to the public.

### 3. MedicalPoint
Manages specific points of care such as clinics, health posts, and primary care facilities. Provides location-based information and service availability for smaller healthcare providers.

### 4. MedicalCost
Maintains medical cost information and pricing data for various treatments, procedures, and healthcare services. Supports transparent cost disclosure for patient reference.

### 5. MedicalAlter
Manages alternative medicine providers including traditional medicine, herbal clinics, acupuncture, and other complementary healthcare services available in the Yogyakarta region.

### Module Architecture
Each module follows the Laravel Modules package structure:
```
Modules/{ModuleName}/
├── Config/
├── Console/
├── database/
│   ├── migrations/
│   └── seeders/
├── Http/
│   ├── Controllers/
│   │   ├── Backend/
│   │   └── Frontend/
│   └── Requests/
├── Models/
├── Providers/
├── Resources/
│   └── views/
│       ├── backend/
│       └── frontend/
├── Routes/
│   ├── web.php
│   └── api.php
└── lang/
```

Module activation status is controlled via `modules_statuses.json`.

## Directory Structure

```
jogjacare/
├── app/
│   ├── Console/           # Artisan commands
│   ├── Events/            # Application events
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/      # Authentication controllers
│   │   │   ├── Backend/   # Admin dashboard controllers
│   │   │   └── Frontend/  # Public page controllers
│   │   └── Middleware/    # Custom middleware
│   ├── Livewire/          # Livewire components
│   ├── Mail/              # Mailable classes
│   ├── Models/            # Eloquent models
│   ├── Notifications/     # Notification classes
│   └── Providers/         # Service providers
├── bootstrap/
├── config/                # Configuration files
├── database/
│   ├── factories/         # Model factories
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
├── Modules/               # Healthcare modules
│   ├── MedicalCenter/
│   ├── MedicalCare/
│   ├── MedicalPoint/
│   ├── MedicalCost/
│   └── MedicalAlter/
├── public/                # Web root
├── resources/
│   ├── views/
│   │   ├── auth/          # Authentication views
│   │   ├── backend/       # Admin dashboard views
│   │   ├── frontend/      # Public page views
│   │   ├── layouts/       # Master layouts
│   │   ├── components/    # Blade components
│   │   └── livewire/      # Livewire views
│   ├── css/               # Stylesheets
│   └── js/                # JavaScript files
├── routes/
│   ├── web.php            # Web routes
│   ├── api.php            # API routes
│   ├── auth.php           # Auth routes
│   └── console.php        # Console routes
├── storage/
├── tests/                 # PHPUnit tests
├── .env                   # Environment variables
├── composer.json          # PHP dependencies
├── package.json           # Node dependencies
├── tailwind.config.js     # Tailwind configuration
├── vite.config.js         # Vite configuration
└── docker-compose.yml     # Docker services
```

## Installation Guide

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & NPM
- SQLite (default) or MySQL/PostgreSQL
- Git

### Standard Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url> jogjacare
   cd jogjacare
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Edit `.env` to configure database and other settings.

5. **Database setup**
   ```bash
   php artisan migrate --seed
   ```
   Default SQLite database will be created automatically.

6. **Storage link**
   ```bash
   php artisan storage:link
   ```

7. **Build frontend assets**
   ```bash
   npm run build
   ```
   For development: `npm run dev`

8. **Start the application**
   ```bash
   php artisan serve
   ```
   Visit `http://127.0.0.1:8000`

### Default Admin Credentials
After seeding, the following accounts are available:

| Role | Email | Password |
|------|-------|----------|
| Super Admin | super@admin.com | secret |
| Regular User | user@user.com | secret |

### Post-Installation

After creating new permissions, clear the permission cache:
```bash
php artisan cache:forget spatie.permission.cache
```

## Configuration

### Database
Edit `.env` to switch from SQLite to MySQL:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jogjacare
DB_USERNAME=root
DB_PASSWORD=secret
```

### Social Login
Configure OAuth credentials in `.env`:
```env
GOOGLE_ACTIVE=true
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT=http://localhost/login/google/callback

FACEBOOK_ACTIVE=true
FACEBOOK_CLIENT_ID=your-app-id
FACEBOOK_CLIENT_SECRET=your-app-secret

GITHUB_ACTIVE=true
GITHUB_CLIENT_ID=your-client-id
GITHUB_CLIENT_SECRET=your-client-secret
```

### Application Settings
Key `.env` variables:
```env
APP_NAME="JogjaCare"
APP_URL=http://localhost
APP_TIMEZONE="Asia/Dhaka"

USER_REGISTRATION=true
INITIAL_USERNAME=100000

MAIL_MAILER=log
MAIL_FROM_ADDRESS="hello@example.com"
```

### Localization
Multi-language support is enabled across the project. Language files are located in:
- `lang/` - Core application translations
- `Modules/{Module}/lang/` - Module-specific translations

Available locales can be configured in `config/app.php`.

## Custom Commands

### Module Management

**Create a new module**
```bash
php artisan module:build MODULE_NAME
```
Use `--force` to overwrite existing module files:
```bash
php artisan module:build MODULE_NAME --force
```

### Cache Management

**Clear all caches**
```bash
composer clear-all
```
This clears config, route, view, compiled, and permission caches in one command.

### Code Quality

**Fix code style with Laravel Pint**
```bash
composer pint
```

### Role & Permission Commands

Several commands are available for managing role-permissions. Refer to the [Role-Permission Wiki](https://github.com/nasirkhan/laravel-starter/wiki/Role-Permission) for detailed examples.

Common commands:
```bash
php artisan cache:forget spatie.permission.cache
php artisan permission:cache-reset
```

## User Roles & Permissions

JogjaCare implements granular access control via Spatie Laravel Permission.

### Default Permissions
- `view_backend` - Access admin dashboard
- `edit_settings` - Modify application settings
- `block_users` - Block/unblock user accounts
- Module-specific permissions are auto-generated for each healthcare module (view, create, edit, delete, restore)

### Default Roles
- **Super Administrator**: Full system access
- **Administrator**: Backend access with limited settings
- **Manager**: Content management for specific modules
- **User**: Frontend access only

### Managing Permissions
Permissions can be assigned via:
- Admin UI (Users > Roles)
- Artisan commands
- Database seeders

## API & Routes

### Route Structure

| Namespace | Prefix | Middleware | Purpose |
|-----------|--------|------------|---------|
| `App\Http\Controllers\Frontend` | `/` | `web` | Public pages |
| `App\Http\Controllers\Backend` | `/admin` | `auth`, `can:view_backend` | Admin dashboard |
| `Modules\{Module}\Http\Controllers\Frontend` | `/` | `web` | Module public pages |
| `Modules\{Module}\Http\Controllers\Backend` | `/admin` | `auth`, `can:view_backend` | Module admin pages |

### Key Routes

**Public routes**
- `/` - Homepage
- `/home` - Home alias
- `/aboutus` - About page
- `/contact` - Contact form
- `/partner` - Partners page
- `/medicalcenters` - Medical centers listing
- `/medicalcenters/{id}/{slug}` - Medical center detail

**Admin routes**
- `/admin` - Dashboard
- `/admin/users` - User management
- `/admin/roles` - Role management
- `/admin/settings` - Application settings
- `/admin/backups` - Backup management
- `/admin/notifications` - System notifications
- `/admin/medicalcenters` - Module content management

**File Manager**
- `/laravel-filemanager` - File upload and browser (auth required)

## Docker Support

JogjaCare includes Laravel Sail for containerized development.

### Sail Installation

1. Clone repository and install dependencies:
   ```bash
   composer install
   ```

2. Create environment from Sail template:
   ```bash
   cp .env-sail .env
   ```

3. Start containers:
   ```bash
   ./vendor/bin/sail up
   ```
   Or with alias:
   ```bash
   alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
   sail up
   ```

4. Run migrations:
   ```bash
   sail artisan migrate --seed
   ```

5. Create storage link:
   ```bash
   sail artisan storage:link
   ```

6. Visit `http://localhost`

## Security

### Authentication
- Password hashing with Laravel default bcrypt
- Email verification required for new accounts
- Remember token support
- Session-based authentication with file driver (configurable)

### Authorization
- Role-based access control on all admin routes
- Permission checks for sensitive operations (user blocking, settings edit)
- Middleware-protected file manager

### Data Protection
- Soft deletes on User model with `deleted_by` tracking
- Media file hashing via Spatie Media Library
- CSRF protection on all forms
- XSS protection via Laravel Blade escaping

### Reporting Vulnerabilities
If you discover security-related issues, please email `nasir8891@gmail.com` instead of using the issue tracker.

## Development Guidelines

### Adding a New Module
1. Use the module generator:
   ```bash
   php artisan module:build NewModule
   ```
2. Register routes in `Modules/NewModule/Routes/web.php`
3. Create frontend and backend controllers
4. Add migrations to `Modules/NewModule/database/migrations/`
5. Create Blade views in `Modules/NewModule/Resources/views/`
6. Update `modules_statuses.json` to enable

### Frontend Asset Building
```bash
npm run dev     # Development with hot reload
npm run build   # Production build
```

### Code Style
Always run Laravel Pint before committing:
```bash
composer pint
```

### Testing
Run PHPUnit tests:
```bash
php artisan test
```

## Troubleshooting

### Permission Cache Issues
If roles/permissions are not working after changes:
```bash
php artisan cache:forget spatie.permission.cache
php artisan permission:cache-reset
```

### Module Not Loading
Check `modules_statuses.json` and ensure the module is set to `true`.

### File Upload Failures
Ensure storage link exists:
```bash
php artisan storage:link
```

### Asset Build Errors
Clear and reinstall Node modules:
```bash
rm -rf node_modules
npm install
npm run build
```

### Database Locked (SQLite)
If you see "database is locked" errors during migration:
```bash
php artisan cache:clear
php artisan config:clear
```

## License

This project is licensed under the GPL-3.0-or-later License. See `LICENSE.md` for details.
