<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id='$id'";
    $result = $koneksi->query($query);

    if ($result) {
        header("Location: data_user.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
