<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $usia = $_POST['usia'];
    $jenis_vaksin = $_POST['jenis_vaksin'];

    $query = "UPDATE data_vaksin SET nama='$nama', jk='$jk', usia='$usia', jenis_vaksin='$jenis_vaksin' WHERE id='$id'";
    $result = $koneksi->query($query);

    if ($result) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
