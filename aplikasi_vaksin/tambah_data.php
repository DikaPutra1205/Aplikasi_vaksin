<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Vaksin - Tambah Data Vaksin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Tambah Data Vaksin</h2>
        <form method="POST" action="tambah_data_controller.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" id="jk" name="jk" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia:</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <div class="mb-3">
                <label for="jenis_vaksin" class="form-label">Jenis Vaksin:</label>
                <input type="text" class="form-control" id="jenis_vaksin" name="jenis_vaksin" required>
            </div>
            <button type="submit" class="btn btn-primary me-2">Tambah Data</button>
            <a href="admin.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
