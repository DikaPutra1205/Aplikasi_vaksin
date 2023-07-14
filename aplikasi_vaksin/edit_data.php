<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Vaksin - Edit Data Vaksin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Edit Data Vaksin</h2>
        <?php
        // Mendapatkan ID data yang akan diedit dari parameter URL
        $id = $_GET['id'];

        // Query untuk mendapatkan data vaksin berdasarkan ID
        $query = "SELECT * FROM data_vaksin WHERE id='$id'";
        $result = $koneksi->query($query);
        $row = $result->fetch_assoc();
        ?>

        <form method="POST" action="edit_data_controller.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" id="jk" name="jk" required>
                    <option value="Laki-laki" <?php if ($row['jk'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($row['jk'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia:</label>
                <input type="number" class="form-control" id="usia" name="usia" value="<?php echo $row['usia']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jenis_vaksin" class="form-label">Jenis Vaksin:</label>
                <input type="text" class="form-control" id="jenis_vaksin" name="jenis_vaksin" value="<?php echo $row['jenis_vaksin']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="admin.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
