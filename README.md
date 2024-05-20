# PHP MVC Project

Proyek PHP MVC adalah aplikasi yang memisahkan logika bisnis, antarmuka pengguna, dan kontrol aliran data menggunakan tiga komponen utama: Model, View, dan Controller.

## Struktur direktori
- `app/` 
  - `App/` -> Berisi konfigurasi utama atau komponen inti aplikasi.
  - `Controller/` -> Berisi file controller yang menangani logika aplikasi dan interaksi dengan model serta view.
  - `Core/` -> Berisi file inti atau framework dasar aplikasi, seperti base classes atau libraries.
  - `helpers/` -> Berisi fungsi atau kelas bantuan untuk operasi umum seperti validasi atau manipulasi string.
  - `Model/` -> Berisi file model yang mengelola data dan logika bisnis serta berinteraksi dengan database.
  - `View/` -> Berisi file view yang bertanggung jawab untuk presentasi data kepada pengguna.
  - `config.php` -> File konfigurasi aplikasi, seperti pengaturan koneksi database dan konstanta-konstanta aplikasi.
- `public/`
  - `css/` -> Berisi file CSS yang digunakan untuk styling halaman web.
  - `fonts/` -> Berisi file font yang digunakan dalam desain web.
  - `image/` -> Berisi file gambar yang digunakan dalam situs web.
  - `js/` -> Berisi file JavaScript yang digunakan untuk interaktivitas dan fungsionalitas situs web.
  - `index.php` -> File utama yang digunakan sebagai titik masuk untuk aplikasi web berbasis PHP.

## Persyaratan
- PHP >= 7.2
- MySQL

## Installation
1. Clone repositori dengan cara: `https://github.com/WidyaNurulSukma/mvc-kelompok5.git` di htdocs pada cmd
2. Kemudian masuk kedalam direktori proyek:`cd mvc-kelompok5`
3. Buat database dan import file sql yang ada
4. Ketikkan di cmd: `cd public`
5. Jalankan server PHP: `php -S localhost:8080`
6. Buka aplikasi web browser dan masuk ke link `http://localhost:8080`

## Contributors
1. Widya Nurul Sukma (2208107010054)
2. Pryta Rosela (22081079010046)
3. Farah Nasywa (2208107010051)
4. Mila Lestari (2208107010002)
5. Ahmad Arif Nuhuda (240710402156202000)

