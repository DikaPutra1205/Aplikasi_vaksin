<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM data_vaksin WHERE id='$id'";
    $result = $koneksi->query($query);

    if ($result) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
