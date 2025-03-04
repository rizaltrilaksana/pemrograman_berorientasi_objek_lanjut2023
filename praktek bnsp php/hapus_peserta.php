<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sertifikasi';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Pastikan id_peserta tersedia di URL
if (isset($_GET['id_peserta']) && !empty($_GET['id_peserta'])) {
    $id_peserta = intval($_GET['id_peserta']); // Pastikan ID dalam bentuk angka

    // Query untuk menghapus data
    $sql = "DELETE FROM peserta WHERE id_peserta = $id_peserta";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Peserta berhasil dihapus!');
            window.location.href='index.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "<script>
        alert('ID peserta tidak ditemukan!');
        window.location.href='index.php';
    </script>";
}

$conn->close();
?>
