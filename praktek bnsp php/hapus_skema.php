<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sertifikasi';

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah parameter kd_skema tersedia
if (isset($_GET['kd_skema'])) {
    $kd_skema = $_GET['kd_skema'];

    // Hapus data dari tabel skema
    $sql = "DELETE FROM skema WHERE kd_skema = '$kd_skema'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='sertifikasi.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location.href='sertifikasi.php';</script>";
    }
} else {
    echo "<script>alert('ID Skema tidak ditemukan!'); window.location.href='sertifikasi.php';</script>";
}

$conn->close();
?>
