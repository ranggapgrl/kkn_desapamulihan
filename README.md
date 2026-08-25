# Website Desa Pamulihan 03

Website landing page & portal informasi publik Desa Pamulihan, Kec. Pamulihan, Kab. Sumedang, Jawa Barat — dibangun untuk program KKN Tematik Universitas Muhammadiyah Bandung.

## Tentang

Website ini menyediakan informasi profil desa, struktur pemerintahan, potensi unggulan, berita, galeri kegiatan, layanan publik (syarat & jadwal pengurusan surat), produk hukum desa, dan kontak resmi.

## Teknologi

- **Laravel 12** — routing & controller (data statis via `config/desa.php`, tidak pakai database untuk konten utama)
- **Tailwind CSS** (via CDN) — styling, dengan skema warna kustom netral minimalis (biru, hijau, emas didesaturasi)
- **Blade** — templating

## Struktur Data

Seluruh konten (profil, statistik, pemerintahan, potensi, berita, layanan publik, produk hukum, galeri) dikumpulkan di `config/desa.php` supaya mudah diedit tanpa menyentuh file view.

> ⚠️ **Penting sebelum rilis publik:** beberapa data masih estimasi/placeholder (ditandai `TODO` atau `[Isi dengan Nama Asli]` di dalam `config/desa.php`) — nama perangkat desa, batas wilayah, sarana prasarana, dan tautan dokumen resmi. Wajib dikonfirmasi ulang ke Balai Desa Pamulihan sebelum website digunakan sebagai rujukan resmi.

## Menjalankan Secara Lokal

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000` di browser.

## Menambah Foto

- Foto potensi desa: taruh di `public/images/potensi/`, nama file sesuai field `gambar` di `config/desa.php`
- Foto galeri kegiatan: taruh di `public/images/galeri/`, nama file sesuai field `gambar` di `config/desa.php`

Jika file foto belum ada, tampilan otomatis fallback ke ikon (tidak error).

## Tim KKN

Dikerjakan oleh tim 4 orang mahasiswa Teknik Informatika UMB — detail anggota dapat dilihat di halaman `/kelompok`.
