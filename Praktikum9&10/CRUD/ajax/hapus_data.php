<?php
//Sebelum memulai sesi PHP, kode ini harus dituliskan
session_start();

//Import data php yang bernama koneksi.php dan csrf.php
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];

//Pembuatan Query Untuk menghapus data dari tabel anggota dengan syarat id
$query = "DELETE FROM anggota WHERE id=?";
$sql = $dbl->prepare($query);
$sql->bind_param("i", $id);
$sql->execute();

echo json_encode(['success' => 'Sukses']);

$dbl->close();
?>