<?php
include 'koneksi.php';
include 'edit_user_controller.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Vaksin - Edit Pengguna</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-4">Edit Pengguna</h2>
    <form method="POST" action="edit_user_controller.php">
        <input type="hidden" name="id" value="<?php echo $row_data['id']; ?>">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $row_data['username']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="text" class="form-control" id="password" name="password" value="<?php echo $row_data['password']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <select class="form-select" id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="data_user.php" class="btn btn-danger">Batal</a>
    </form>
</div>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>