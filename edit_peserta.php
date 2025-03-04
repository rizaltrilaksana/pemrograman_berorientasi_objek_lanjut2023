<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sertifikasi';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah ID peserta tersedia di URL
if (!isset($_GET['id_peserta'])) {
    die("ID peserta tidak ditemukan!");
}

$id = $_GET['id_peserta'];
$result = $conn->prepare("SELECT * FROM peserta WHERE id_peserta = ?");
$result->bind_param("i", $id);
$result->execute();
$data = $result->get_result()->fetch_assoc();

if (!$data) {
    die("Peserta tidak ditemukan!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_skema = $_POST['kd_skema'];
    $nm_peserta = $_POST['nm_peserta'];
    $jekel = $_POST['jekel'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = $conn->prepare("UPDATE peserta SET kd_skema=?, nm_peserta=?, jekel=?, alamat=?, no_hp=? WHERE id_peserta=?");
    $sql->bind_param("sssssi", $kd_skema, $nm_peserta, $jekel, $alamat, $no_hp, $id);
    
    if ($sql->execute()) {
        echo "<script>alert('Peserta berhasil diperbarui!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>
<body>
<div class="container mt-3">
    <h2 class="text-center">Edit Peserta</h2>
    <form method="POST">
        <div class="form-group">
            <label>Skema Sertifikasi</label>
            <select name="kd_skema" class="form-control" required>
                <option value="SKM-001" <?= $data['kd_skema'] == 'SKM-001' ? 'selected' : '' ?>>Junior Web Developer</option>
                <option value="SKM-002" <?= $data['kd_skema'] == 'SKM-002' ? 'selected' : '' ?>>Digital Marketing</option>
                <option value="SKM-003" <?= $data['kd_skema'] == 'SKM-003' ? 'selected' : '' ?>>Desainer Multimedia Muda</option>
                <option value="SKM-004" <?= $data['kd_skema'] == 'SKM-004' ? 'selected' : '' ?>>Network Administrator Muda</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Peserta</label>
            <input type="text" name="nm_peserta" class="form-control" value="<?= htmlspecialchars($data['nm_peserta']); ?>" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jekel" class="form-control" required>
                <option value="L" <?= $data['jekel'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                <option value="P" <?= $data['jekel'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= htmlspecialchars($data['alamat']); ?></textarea>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?= htmlspecialchars($data['no_hp']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
