# Inventory Hub API

A professional RESTful API for managing product inventory, built with **Laravel 12** and **PostgreSQL**. This project features secure Authentication and Role-Based Access Control (RBAC).

## Requirements
* PHP >= 8.2
* Composer
* PostgreSQL
* Laravel 12

## Setup Instructions

### 1. Install Dependencies
```bash
composer install
```

### 2. Environment Configuration
Copy the .env.example file to .env and update your database credentials:
```bash
cp .env.example .env
```

### 3. Database & Permissions Setup
Run migrations and seeders to set up roles, permissions, and demo users:
```bash
php artisan key:generate
php artisan migrate:fresh --seed
```

### 4. Run Server
```bash
php artisan serve
```

## Authentication & Authorization (Part E)
This project uses Laravel Sanctum for token-based authentication and Spatie Laravel Permission for access control.


### Roles & Access Levels

======================================================
ROLE    |   PERMISSIONS
Admin   |   Full Access (View, Create, Update, Delete)
Staff   |   Limited Access (View, Create, Update)
Viewer  |   Read Only Access (View Only)
======================================================


### Demo Accounts (For Testing)
Use these in Bruno to test different access levels:

* Admin: admin@mail.com | password123
* Viewe: viewer@mail.com | password123



## API Endpoints


### 1. Authentication
 
======================================================
Method  |  URL                  |   Description
POST    |  /api/auth/register   |   Register a new user
POST    |  /api/auth/login      |   Login and receive Bearer Token
GET     |  /api/auth/me         |   Get current user info (Auth required)
POST    |  /api/auth/logout     |   Revoke token (Auth required)
======================================================


### 2. Products (Protected)

======================================================
Method  |   URL                 |   Required Permission
GET     |   /api/products       |   products-view
POST    |   /api/products       |   products-create
PUT     |   /api/products/{id}  |   products-update
DELETE  |   /api/products/{id}  |   products-delete
======================================================


## Testing Screenshots
All API testing screenshots as required for Assignment are located in the /screenshots folder.


Author: Hairul Fitri Mohd Dawan