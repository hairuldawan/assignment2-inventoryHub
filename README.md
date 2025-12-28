# Inventory Hub API

Simple REST API untuk manage products. Project ni buat guna Laravel dan PostgreSQL.

Requirements

PHP >= 8.2
Composer
PostgreSQL
Laravel 12

## Setup

### 1. Install Dependencies
```bash
composer install
```

### 2. Setup Environment

Copy file `.env.example` jadi `.env`:

```bash
cp .env.example .env
```

Edit `.env` untuk database:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=inventory_hub
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

### 3. Generate Key & Setup Database
```bash
php artisan key:generate
php artisan migrate
```

### 4. Run Server
```bash
php artisan serve
```

API ready di: `http://127.0.0.1:8000`

## API Endpoints

**Base URL:** `http://127.0.0.1:8000/api`

| Method | URL | Kegunaan |

| GET | `/products` | List semua products |
| GET | `/products/1` | Detail product ID 1 |
| POST | `/products` | Create product baru |
| PUT | `/products/1` | Update product ID 1 |
| DELETE | `/products/1` | Delete product ID 1 |

## Test dengan Bruno

### Create Product
Method: POST
URL: http://127.0.0.1:8000/api/products
Headers: Content-Type: application/json
```

Body:
json
{
    "name": "Laptop Dell",
    "description": "Business laptop",
    "price": 4500.00,
    "stock": 10
}
```

### Get All Products
Method: GET
URL: http://127.0.0.1:8000/api/products
```

### Update Product
Method: PUT
URL: http://127.0.0.1:8000/api/products/1
Headers: Content-Type: application/json
```

Body:
{
    "name": "Laptop Dell XPS",
    "price": 5000.00
}

### Delete Product
Method: DELETE
URL: http://127.0.0.1:8000/api/products/1


**Author:** Hairul Fitri Mohd Dawan