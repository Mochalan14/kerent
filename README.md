# kerent
 Projek Akhir dari Program Sekolah Beta
 
 ## Langkah - Langkah untuk menjalankan Projek ini ke Local Enviroment
 1. Clone/download Repo ini, Extract dan letakkan pada folder yang kamu pilih
 2. Buat File .env pada projek tersebut
 3. ketik "composer install" untuk mengunduh vendor yg terdapat pada projek ini.
 4. ketik "php artisan key:generate" untuk membuat app key laravel.
 5. Buat sebuah database baru pada phpmyadmin/mysql dengan nama "db_kerent".
 6. Pastikan nama database pada file .env yaitu "db_kerent".
 7. ketik "php artisan migrate", untuk membuat tabel pada db_kerent.
 8. ketik "php artisan db:seed", untuk mengisi tabel yg ada pada db_kerent (data dummy).
 9. ketik "php artisan serve", untuk mulai menjalankan projek ini.
 10. Done , Hope U Understand :)
