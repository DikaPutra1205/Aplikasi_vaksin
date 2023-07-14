<?php
include 'login_controller.php';

// Mendapatkan data vaksin dari database
$query = "SELECT * FROM data_vaksin";
$result = $koneksi->query($query);

// Memulai sesi
session_start();

// Memeriksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Untuk menghandle tombol logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>