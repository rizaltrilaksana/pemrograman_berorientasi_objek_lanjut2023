<?php 
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sertifikasi';

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Pastikan parameter kd_skema tersedia
if (!isset($_GET['kd_skema']) || empty($_GET['kd_skema'])) {
    die("Error: Kode skema tidak ditemukan.");
}

$kd_skema = htmlspecialchars($_GET['kd_skema']); // Mencegah XSS

// Menggunakan prepared statement untuk keamanan
$stmt = $conn->prepare("SELECT nm_skema, jenis, jml_unit FROM skema WHERE kd_skema = ?");
$stmt->bind_param("s", $kd_skema);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Jika data tidak ditemukan
if (!$row) {
    die("Error: Data tidak ditemukan.");
}

// Proses update data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm_skema = htmlspecialchars($_POST['nm_skema']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $jml_unit = intval($_POST['jml_unit']); // Memastikan input berupa angka

    // Validasi tambahan
    if (empty($nm_skema) || empty($jenis) || $jml_unit <= 0) {
        echo "<script>alert('Harap isi semua kolom dengan benar!');</script>";
    } else {
        // Menggunakan prepared statement untuk update data
        $update_stmt = $conn->prepare("UPDATE skema SET nm_skema = ?, jenis = ?, jml_unit = ? WHERE kd_skema = ?");
        $update_stmt->bind_param("ssis", $nm_skema, $jenis, $jml_unit, $kd_skema);

        if ($update_stmt->execute()) {
            echo "<script>alert('Data berhasil diperbarui!'); window.location.href='sertifikasi.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skema Sertifikasi</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">Sertifikasi</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="sertifikasi.php" class="nav-link">
                            <i class="nav-icon fas fa-certificate"></i>
                            <p>Kelola Skema</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="peserta.php" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Kelola Peserta</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Skema Sertifikasi</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Skema</h3>
                    </div>
                    <form method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nm_skema">Nama Skema</label>
                                <input type="text" name="nm_skema" class="form-control" value="<?= htmlspecialchars($row['nm_skema']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <select name="jenis" class="form-control">
                                    <option value="KKNI" <?= ($row['jenis'] == 'KKNI') ? 'selected' : ''; ?>>KKNI</option>
                                    <option value="Klaster" <?= ($row['jenis'] == 'Klaster') ? 'selected' : ''; ?>>Klaster</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jml_unit">Jumlah Unit</label>
                                <input type="number" name="jml_unit" class="form-control" value="<?= htmlspecialchars($row['jml_unit']); ?>" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Update</button>
                            <a href="sertifikasi.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

</div>

<!-- AdminLTE Scripts -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>
</html>
