<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 Run Project

## ⚙️ Bước 1: Khởi động môi trường

* Mở XAMPP
* Start **Apache** và **MySQL**

---

## 📦 Bước 2: Cài đặt project

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

---

## 🗄️ Bước 3: Cấu hình database

Mở file `.env` và chỉnh:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=web_server
DB_USERNAME=root
DB_PASSWORD=
```

---

## 🧱 Bước 4: Tạo database

```bash
php artisan migrate --seed
```

---

## ▶️ Bước 5: Chạy project

Chạy 2 lệnh song song:

```bash
php artisan serve
npm run dev
```

---

## 🌐 Truy cập

* User: http://127.0.0.1:8000/
* Admin: http://127.0.0.1:8000/admin/dashboard

---

## 🔐 Tài khoản admin

* Email: [admin@gmail.com](mailto:admin@gmail.com)
* Password: 123456
