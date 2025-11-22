# NRA Streaming Project

This guide will help you set up the **NRA Streaming Laravel Project** on your local machine. It includes installing PHP, Composer, Laravel, MySQL, cloning the project, running migrations, seeding data, and serving the application.


## 1. Prerequisites

- **PHP 8.1+**
- **Composer**
- **MySQL**
- **Node.js & NPM**


## 2. Install PHP

### Windows
- Install [XAMPP](https://www.apachefriends.org/index.html) or PHP from [windows.php.net](https://windows.php.net/download/)
- Add `php.exe` to your PATH
```bash
php -v
```

### Mac
```bash
brew install php
php -v
```


## 3. Install Composer

### Windows
- Download installer from getcomposer.org

### Mac
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
sudo mv composer.phar /usr/local/bin/composer
composer -v
```


## 4. Install Laravel
```bash
composer global require laravel/installer
laravel --version
```


## 5. Install MySQL

### Windows
- Use XAMPP for MySQL installation

### Mac
```bash
brew install mysql
brew services start mysql
```


## 6. Create Database (Run from MySQL shell)
```bash
CREATE DATABASE nra_db;
```


## 7. Install Dependencies
- Do not close this terminal after running the commands
```bash
composer install
npm install
npm run dev
```


## 8. Edit .env File inside the Project
```bash
DB_CONNECTION=mysql
DB_HOST=<YOUR_HOST>
DB_PORT=3306
DB_DATABASE=nra_db
DB_USERNAME=<YOUR_USERNAME>
DB_PASSWORD=<YOUR_PASSWORD>
```


## 9. Create Tables and Seed Data
```bash
php artisan migrate:fresh --seed
```


## 10. Run (New Terminal)
```bash
php artisan serve
```


## Admin: http://127.0.0.1:8000/admin/genres
## User: http://127.0.0.1:8000/user