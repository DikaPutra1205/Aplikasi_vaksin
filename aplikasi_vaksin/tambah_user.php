<?php
include 'koneksi.php';
include 'tambah_user_controller.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Vaksin - Tambah User</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-4">Tambah User</h2>
    <form method="POST" action="tambah_user.php">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <select class="form-select" id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary me-2">Simpan</button>
        <a href="admin.php" class="btn btn-danger">Batal</a>
    </form>
</div>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
