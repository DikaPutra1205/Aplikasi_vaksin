<?php
// Koneksi ke database
$koneksi = new mysqli('localhost', 'root', '', 'vaksin')
    or die(mysqli_error($koneksi));
?>
