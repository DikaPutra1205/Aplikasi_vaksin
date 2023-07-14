<?php
// Koneksi ke database
$koneksi = new mysqli('localhost', 'root', '', 'vaksin')
    or die(mysqli_error($koneksi));

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Memeriksa apakah ada data yang dikirim dari formulir
if (isset($_POST['simpan'])) {
    // Mendapatkan nilai yang dikirim dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Query untuk menyimpan data pengguna ke database
    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    $koneksi->query($query);

    // Redirect ke halaman admin setelah penyimpanan data
    header("Location: data_user.php");
    exit();
}
?>
