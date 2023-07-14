<?php
include 'koneksi.php';
include 'show_controller.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Vaksin - Data Vaksin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aplikasi Vaksin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <form method="POST" action="user.php">
                            <button class="btn btn-outline-primary me-2" type="submit" name="logout">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Tabel Data Vaksin -->
    <h2 class="text-center mt-4">Data Vaksin</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Usia</th>
                <th>Jenis Vaksin</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jk']; ?></td>
                    <td><?php echo $row['usia']; ?></td>
                    <td><?php echo $row['jenis_vaksin']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
