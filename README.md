# Laravel API

A RESTful API built using the [Laravel](https://laravel.com/) framework.

---

## Features

-   Laravel 12
-   RESTful API structure
-   Authentication with Sanctum
-   API Resource responses
-   Request validation
-   Environment-based configuration
-   Database migrations and seeders

---

## Requirements

-   PHP >= 8.1
-   Composer
-   MySQL
-   Node.js and npm (optional for frontend assets)
-   Laravel CLI

---

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/your-username/your-laravel-api.git
cd your-laravel-api
```

2. **Install dependencies**

```bash
composer install
```

3. **Setup the environment**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure .env**

```bash
APP_NAME=Laravel
APP_URL=http://localhost:8000
DB_CONNECTION=mysql
DB_HOST=your_db_host
DB_PORT=your_db_port
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run migrations and seeders**

```bash
php artisan migrate:fresh --seed
```

6. **Serve the API**

```bash
php artisan serve
npm run dev
```

## Authentication

This api supports token-based authentication using Laravel Sanctum and Bearer tokens.

The supported methods are:
GET
POST
PUT
PATCH
DESTROY
