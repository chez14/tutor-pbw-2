## Session Bug.
Credits to Irvan H.

Jadi pas kita klik go back, dan kita klik benda lain, kita langsung nggak bisa record history lagi.

Penyebabnya adalah karena saat kita go back, kita lupa dia masih jalan terus eksekusinya. Jadi si halaman terakhir sebetulnya masih terekam ke data historynya, lalu kita pop hingga akhirnya di `pagination.php` dia ngerekam lagi.


Solusinya adalah dengan kill si aksesnya saat setelah `go_back` di jalankan.


```php
if(isset($_GET['back'])) {
    go_back();
    die();
}
```