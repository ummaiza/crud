```markdown
# CRUD Project - Laravel 11

Ini adalah project CRUD sederhana yang dikembangkan menggunakan Laravel 11. Ikuti langkah-langkah di bawah ini untuk mendownload, menginstal, dan menjalankan proyek ini di lokal Anda.

## Prasyarat

Pastikan Anda memiliki beberapa prasyarat berikut sebelum memulai:

1. **Composer** - Dependency Manager untuk PHP. [Download Composer](https://getcomposer.org/)
2. **PHP 8.3+** - Laravel 11 membutuhkan PHP versi 8.1 atau lebih tinggi.
3. **Node.js & NPM** - Untuk mengelola asset frontend.
4. **Git** - Untuk mendownload project dari GitHub.
5. **MySQL** atau database lain yang kompatibel.

## Instalasi

1. **Clone Repository**

   Pertama, clone repository dari GitHub ke lokal Anda:

   ```bash
   git clone https://github.com/ummaiza/crud.git
   ```

2. **Masuk ke Direktori Project**

   Pindah ke direktori project yang baru saja di-clone:

   ```bash
   cd crud
   ```

3. **Install Dependencies Composer**

   Jalankan perintah berikut untuk menginstal semua dependencies Laravel yang diperlukan:

   ```bash
   composer install
   ```

4. **Copy File `.env`**

   Laravel menggunakan file `.env` untuk konfigurasi lingkungan. Salin file `.env.example` menjadi `.env`:

   ```bash
   cp .env.example .env
   ```

5. **Generate App Key**

   Laravel membutuhkan key aplikasi untuk enkripsi. Generate key tersebut dengan perintah:

   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi Database**

   Buka file `.env` yang baru saja Anda salin dan ubah bagian konfigurasi database agar sesuai dengan pengaturan database lokal Anda:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

7. **Migrasi Database**

   Setelah database dikonfigurasi, jalankan migrasi untuk membuat tabel:

   ```bash
   php artisan migrate
   ```

8. **Install Dependencies NPM**

   Untuk mengelola frontend seperti CSS dan JavaScript, jalankan perintah berikut:

   ```bash
   npm install
   ```

9. **Build Assets Frontend**

   Bangun asset frontend menggunakan perintah:

   ```bash
   npm run dev
   ```

10. **Jalankan Server Lokal**

   Sekarang, Anda bisa menjalankan server Laravel dengan perintah:

   ```bash
   php artisan serve
   ```

   Server akan berjalan di `http://127.0.0.1:8000`.

## Penggunaan

Anda dapat mengakses aplikasi di browser Anda menggunakan URL `http://127.0.0.1:8000`. Dari sana, Anda bisa menggunakan fitur CRUD yang telah disediakan.

## Catatan Tambahan

- Jika Anda ingin menjalankan Laravel Mix untuk compile asset dalam mode production, gunakan:

  ```bash
  npm run build
  ```

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
```

Itu adalah langkah-langkah untuk mendownload dan menginstal project CRUD Laravel 11 dari GitHub.
