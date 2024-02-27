<!-- resources/views/user/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    <p>ID Pengguna: {{ $user->id }}</p>
    <p>Nama Pengguna: {{ $user->name }}</p>
    <a href="{{ url('/user/profile/edit') }}">Edit Profil</a><br>
    <a href="{{ url('/') }}">Kembali ke Halaman Utama</a>
</body>
</html>
