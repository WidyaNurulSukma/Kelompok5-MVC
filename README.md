# PHP MVC Project

Proyek PHP MVC adalah aplikasi yang memisahkan logika bisnis, antarmuka pengguna, dan kontrol aliran data menggunakan tiga komponen utama: Model, View, dan Controller.

## Struktur direktori

- `app/` 
  - `App/` - Berisi konfigurasi utama atau komponen inti aplikasi.
  - `Controller/` -> Berisi file controller yang menangani logika aplikasi dan interaksi dengan model serta view.
  - `Core/` -> Berisi file inti atau framework dasar aplikasi, seperti base classes atau libraries.
  - `helpers/` -> Berisi fungsi atau kelas bantuan untuk operasi umum seperti validasi atau manipulasi string.
  - `Model/` -> Berisi file model yang mengelola data dan logika bisnis serta berinteraksi dengan database.
  - `View/` -> Berisi file view yang bertanggung jawab untuk presentasi data kepada pengguna.
  - `config.php` -> File konfigurasi aplikasi, seperti pengaturan koneksi database dan konstanta-konstanta aplikasi.
- `public/`
  -
