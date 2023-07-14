<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $usia = $_POST['usia'];
    $jenis_vaksin = $_POST['jenis_vaksin'];

    $query = "INSERT INTO data_vaksin (nama, jk, usia, jenis_vaksin) VALUES ('$nama', '$jk', '$usia', '$jenis_vaksin')";
    $result = $koneksi->query($query);

    if ($result) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
