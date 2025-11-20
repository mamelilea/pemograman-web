# Project Laravel — Panduan Instalasi & Menjalankan Project

Repository ini berisi project Laravel yang digunakan untuk kebutuhan praktikum.  
Setelah melakukan `git clone`, silakan ikuti langkah-langkah berikut agar project dapat berjalan dengan benar.

---

## Langkah-Langkah Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/mamelilea/pemograman-web.git
cd pemograman-web/ecommerce
```

### 2. Install Dependency Composer
```bash
composer install
```

### 3. Setup File Environment (.env)

**Windows:**
```bash
copy .env.example .env
```

**Linux/Mac:**
```bash
cp .env.example .env
```

### 4. Konfigurasi Database

Buka file `.env` dan sesuaikan konfigurasi database dengan environment lokal Anda (dibawah ini punya saya):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=toko-laravel
DB_USERNAME=root
DB_PASSWORD=
```

> **Catatan:** Pastikan database kalian sudah dibuat terlebih dahulu di MySQL/phpMyAdmin.

### 5. Menjalankan Server Laravel
```bash
php artisan serve
```

Server akan berjalan di: **http://127.0.0.1:8000**

---

## Troubleshooting

- **Error "Please provide a valid cache path"**: Jalankan `php artisan cache:clear`
- **Error composer**: Pastikan Composer sudah terinstall dengan benar
- **Error database connection**: Periksa kembali konfigurasi `.env` dan pastikan MySQL sudah berjalan

---
