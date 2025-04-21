
## Requirements

- PHP 8.0 or higher
- Composer
- Node.js
- MySQL or any supported database

## Installation

Follow these steps to get the project running on your local machine:

### 1. Clone the Repository
```bash
git clone https://github.com/gm-zesan/As-Sunnah-Products.git
cd As-Sunnah-Products
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Configure Environment Variables
```bash
cp .env.example .env
```
### 4. Open .env and update the following values
```bash
APP_NAME=As-Sunnah-Products
DB_CONNECTION=mysql
DB_DATABASE=as_sunnah
```
### 5. Generate Application Key
```bash
php artisan key:generate
```
### 6. Run Migrations
```bash
php artisan migrate
```
### 7. Run the Development Server
```bash
php artisan serve
```