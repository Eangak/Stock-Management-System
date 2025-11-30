# Laravel Project Readme

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

Follow these steps to install and run the Laravel project locally:

### 1. Clone the Repository
```bash
git clone https://github.com/your-repository/project.git
cd project
```

### 2. Install Dependencies
Install PHP dependencies:
```bash
composer install
```

Install Node.js dependencies:
```bash
npm install
```

### 3. Environment Setup
Copy the example environment file:
```bash
cp .env.example .env
```
Generate the application key:
```bash
php artisan key:generate
```

### 4. Configure Database
Update your `.env` file with correct database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ims_app_db
DB_USERNAME=root
DB_PASSWORD=
```
Run migrations:
```bash
php artisan migrate
```

### 5. Run the Project
Start the Laravel server:
```bash
php artisan serve
```
Start Vite (for frontend assets):
```bash
npm run dev
```
Your project should now be accessible at:
```
http://127.0.0.1:8000
```

---

## About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- Simple, fast routing engine.
- Powerful dependency injection container.
- Multiple back-ends for session and cache storage.
- Expressive, intuitive database ORM.
- Database agnostic schema migrations.
- Robust background job processing.
- Real-time event broadcasting.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel
Laravel has extensive documentation and a full video tutorial library to help developers of all levels. Visit:
- https://laravel.com/docs
- https://laravel.com/learn
- https://laracasts.com

## Contributing
The contribution guide is available at: https://laravel.com/docs/contributions

## Code of Conduct
Please review and abide by the Code of Conduct: https://laravel.com/docs/contributions#code-of-conduct

## Security Vulnerabilities
If you discover a security vulnerability, email Taylor Otwell at taylor@laravel.com.

## License
The Laravel framework is open-sourced software licensed under the MIT license.

