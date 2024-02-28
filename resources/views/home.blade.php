<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi POS</h1>
    <p>Ini adalah halaman utama aplikasi POS.</p>
    <a href="{{ url('/category/food-beverage') }}">Lihat Daftar Produk Food & Beverage</a><br>
    <a href="{{ url('/category/beauty-health') }}">Lihat Daftar Produk Beauty & Health</a><br>
    <a href="{{ url('/category/home-care') }}">Lihat Daftar Produk Home Care</a><br>
    <a href="{{ url('/category/baby-kid') }}">Lihat Daftar Produk Baby & Kid</a><br>
    <a href="{{ url('/user/profile') }}">Lihat Profil Pengguna</a><br>
    <a href="{{ url('/sales') }}">Lihat Halaman Transaksi POS</a><br>
</body>
</html>
