# Perpustakaan Mini

Aplikasi CRUD daftar buku dengan Laravel, Blade, dan Tailwind CSS.

## Fitur

- Tambah, lihat, ubah, dan hapus data buku (judul, penulis, penerbit, tahun terbit, sinopsis)
- Pencarian berdasarkan judul atau penulis, dengan pagination
- Validasi dan pesan error dalam Bahasa Indonesia
- Login dan registrasi (Laravel Breeze): tamu hanya bisa melihat, pengguna yang login bisa menambah, mengubah, dan menghapus

## Cara Menjalankan

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
php artisan serve
```

Buka `http://localhost:8000`. Akun contoh dari seeder: `test@example.com` / `password`.
