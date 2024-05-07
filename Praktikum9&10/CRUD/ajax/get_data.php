<?php
// Sebelum memulai sesi PHP, kode ini harus dituliskan
session_start();

// Import data php yang bernama koneksi.php dan csrf.php
include 'koneksi.php';
include 'csrf.php';

// Mendapatkan ID anggota dari permintaan POST
$id = $_POST['id'];

// Membuat query untuk mengambil data dari tabel anggota berdasarkan id-nya
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";

// Menyiapkan dan mengeksekusi statement SQL menggunakan parameterized query untuk mencegah serangan SQL injection
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();
$res1 = $sql->get_result();

// Menginisialisasi array asosiatif untuk menyimpan data anggota
$h = array();

// Mengambil data anggota
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama'] = $row["nama"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['alamat'] = $row["alamat"];
    $h['no_telp'] = $row["no_telp"];
}

echo json_encode($h);

// Closing database
$db1->close();
?>