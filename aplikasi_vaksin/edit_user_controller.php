<?php
include 'koneksi.php';

// Memeriksa apakah ada data yang dikirim dari form
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Melakukan query untuk mengupdate data pengguna
    $query_update = "UPDATE users SET username='$username', password='$password', role='$role' WHERE id='$id'";
    $koneksi->query($query_update);

    // Redirect ke halaman data pengguna setelah update
    header("Location: data_user.php");
    exit();
}

// Mendapatkan data pengguna berdasarkan ID yang diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data pengguna berdasarkan ID
    $query_data = "SELECT * FROM users WHERE id='$id'";
    $result_data = $koneksi->query($query_data);
    $row_data = $result_data->fetch_assoc();
}
?>