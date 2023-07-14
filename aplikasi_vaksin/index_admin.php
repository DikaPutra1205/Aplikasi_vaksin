<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Vaksin - Menu Utama</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            margin: 0 auto; /* Menengahkan card secara horizontal */
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .card-body {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Menu Utama</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Vaksin</h5>
                        <p class="card-text">Kelola data vaksin</p>
                        <a href="admin.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pengguna</h5>
                        <p class="card-text">Kelola data pengguna</p>
                        <a href="data_user.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
