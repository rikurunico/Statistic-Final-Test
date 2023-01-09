### Laravel Website
##### Website Ini Saya Buat Untuk Belajar Clean Code Menggunakan Laravel serta belajar menggunakan Queue untuk generate PDF agar tidak memakan waktu yang lama

##### Cara Install
- Clone Repository ini
- Jalankan perintah `composer install` untuk menginstall package yang dibutuhkan
    ```bash
        composer install
    ```
- Jalankan perintah `npm install` atau `yarn install`
    ```bash
        npm install
    ```
- Copy file `.env.example` menjadi `.env`
    ```bash
        cp .env.example .env
    ```
- Jalankan perintah `php artisan key:generate` untuk membuat key baru
    ```bash
        php artisan key:generate
    ```
- Sesuaikan isi .env agar sesuai dengan database yang digunakan
- Jalankan perintah `php artisan migrate --seed`
    ```bash
        php artisan migrate --seed
    ```
- Jalankan perintah `php artisan storage:link` 
    ```bash
        php artisan storage:link
    ```
- Jalankan perintah `php artisan serve`
    ```bash
        php artisan serve
    ```
- Jalankan perintah `npm run dev`
    ```bash
        npm run dev
    ```
- Jalankan perintah Job `php artisan queue:work` untuk generate PDF
    ```bash
        php artisan queue:work
    ```