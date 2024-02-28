<!-- resources/views/user/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>ID: {{ $user->id }}</p>
    <p>Name: {{ $user->name }}</p>
    <!-- Tampilkan informasi profil pengguna lainnya sesuai kebutuhan -->
</body>
</html>
