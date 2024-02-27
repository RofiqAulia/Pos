<!-- resources/views/products/baby_kid.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Baby & Kid</title>
</head>
<body>
    <h1>Daftar Produk Baby & Kid</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.') }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/') }}">Kembali ke Halaman Utama</a>
</body>
</html>
