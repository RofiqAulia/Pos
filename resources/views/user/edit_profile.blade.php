<!-- resources/views/user/edit_profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Pengguna</title>
</head>
<body>
    <h1>Edit Profil Pengguna</h1>
    <form method="POST" action="{{ url('/user/profile') }}">
        @csrf
        <label for="name">Nama Pengguna:</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ url('/user/profile') }}">Batal</a><br>
    <a href="{{ url('/') }}">Kembali ke Halaman Utama</a>
</body>
</html>
