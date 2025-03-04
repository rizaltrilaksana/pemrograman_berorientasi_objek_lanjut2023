<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sertifikasi';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_skema = $_POST['kd_skema'];
    $nm_peserta = $_POST['nm_peserta'];
    $jekel = $_POST['jekel'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    
    $sql = "INSERT INTO peserta (kd_skema, nm_peserta, jekel, alamat, no_hp) VALUES ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Peserta berhasil ditambahkan!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>
<body>
<div class="container mt-3">
    <h2 class="text-center">Tambah Peserta</h2>
    <form method="POST">
        <div class="form-group">
            <label>Skema Sertifikasi</label>
            <select name="kd_skema" class="form-control" required>
                <option value="">Pilih Skema</option>
                <option value="SKM-001">Junior Web Developer</option>
                <option value="SKM-002">Digital Marketing</option>
                <option value="SKM-003">Desainer Multimedia Muda</option>
                <option value="SKM-004">Network Administrator Muda</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Peserta</label>
            <input type="text" name="nm_peserta" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jekel" class="form-control" required>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
