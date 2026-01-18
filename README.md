📦 Inventory Hub API

A professional RESTful API for managing product inventory, built with Laravel 12 and PostgreSQL.
This project implements secure authentication and Role-Based Access Control (RBAC) using Laravel best practices.

⸻

# Tech Stack
	•	Laravel 12
	•	PHP 8.2+
	•	PostgreSQL
	•	Laravel Sanctum (Token Authentication)
	•	Spatie Laravel Permission (RBAC)

⸻

# Requirements
	•	PHP >= 8.2
	•	Composer
	•	PostgreSQL
	•	Laravel 12

⸻

# Setup Instructions

## Install Dependencies
composer install


⸻

## Environment Configuration
Copy the example environment file and update your database credentials:
cp .env.example .env


⸻

## Application Key, Database & Seeders
Run migrations and seeders to set up roles, permissions, and demo users:
php artisan key:generate
php artisan migrate:fresh --seed


⸻

## Run the Development Server
php artisan serve


⸻

# Authentication & Authorization
This project uses:
	•	Laravel Sanctum for token-based authentication
	•	Spatie Laravel Permission for role & permission management

⸻

# Roles & Access Levels
Role	Permissions
Admin	View, Create, Update, Delete (Full Access)
Staff	View, Create, Update
Viewer	View Only (Read Access)


⸻

# Demo Accounts (For Testing)
Use these accounts in Bruno / Postman:

Role	Email	        Password
Admin	admin@mail.com	password123
Viewer	viewer@mail.com	password123


⸻

# API Endpoints

## Authentication
Method	Endpoint	Description
POST	/api/auth/register	Register a new user
POST	/api/auth/login	Login & receive Bearer token
GET	    /api/auth/me	Get authenticated user info
POST	/api/auth/logout	Revoke current token


⸻

## Products (Protected Routes)
Method	Endpoint	Required Permission
GET	    /api/products	products-view
POST	/api/products	products-create
PUT	    /api/products/{id}	products-update
DELETE	/api/products/{id}	products-delete


⸻

# API Testing
All API testing screenshots (as required for the assignment) are available in the:
/screenshots folder.

⸻

# Author
Hairul Fitri Mohd Dawan