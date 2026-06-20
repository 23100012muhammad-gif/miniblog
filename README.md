## MiniBlog
Project ini merupakan hasil modifikasi dari repositori MiniBlog Laravel yang awalnya dibuat oleh [@abrahamuchos](https://github.com/abrahamuchos). Saya melakukan penyesuaian dan perbaikan untuk keperluan belajar serta pengembangan pribadi.

<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.10.png" alt="guest" width="auto"/>

## 🔧 Yang Sudah Saya Perbaiki / Modifikasi
Beberapa perubahan yang telah saya lakukan antara lain:

- Menyesuaikan tampilan halaman utama dan halaman blog agar lebih rapi.
- Mengatur ulang routing untuk halaman depan, detail postingan, dan dashboard.
- Menambahkan fitur pencarian postingan pada halaman utama.
- Menyesuaikan alur navigasi antara dashboard dan halaman postingan.
- Memperbaiki fitur CRUD postingan untuk pengguna yang sudah login.
- Menyesuaikan validasi form untuk judul, slug, dan isi konten.
- Mengubah tampilan halaman create, edit, dan dashboard admin.
- Menyusun relasi antara pengguna dan postingan agar lebih sesuai dengan alur aplikasi.

## ✅ Fitur Utama
- Login / Register
- Melihat daftar postingan dan detail postingan
- Membuat postingan baru
- Mengedit postingan
- Menghapus postingan
- Pencarian postingan

## ⚙️ Tech Stack
- Laravel 9.19
- PostgreSQL 13
- Laravel Breeze 1.11
- Blade + Vite

## 💾 Instalasi
1. Clone repository
```bash
git clone https://github.com/23100012muhammad-gif/miniblog.git
cd miniblog
```

2. Install dependency
```bash
composer install
npm install
npm run build
```

3. Buat file `.env` dari `.env.example`, lalu sesuaikan konfigurasi database.

4. Generate application key
```bash
php artisan key:generate
```

5. Jalankan migrasi database
```bash
php artisan migrate
```

6. (Opsional) Jalankan seeder untuk data dummy
```bash
php artisan db:seed
```

7. Jalankan server
```bash
php artisan serve
```

## 🔐 User Untuk Testing
- Email: `abraham@mail.com`
- Password: `password`

## 🧾 Environment Variables
Untuk menjalankan project ini, pastikan `.env` memiliki variabel berikut:

```env
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```

## 📸 Screenshot
<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.20.png" alt="drawing" width="500px"/>
<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.30.png" alt="login" width="500px"/>
<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.51.png" alt="edit" width="500px"/>

## 👤 Modified By
Project ini dimodifikasi dan dikembangkan oleh:
- Muhammad Gif
- GitHub: [23100012muhammad-gif](https://github.com/23100012muhammad-gif)

## 🧑‍💻 Sumber Asli
Project ini awalnya berasal dari repository berikut:
- [abrahamuchos/mini-blog](https://github.com/abrahamuchos/mini-blog)

## 📄 Lisensi
Project ini tetap menggunakan lisensi original dari repositori awal (MIT License).
Harap tetap menyertakan credit asli jika digunakan kembali.
