<?php
//Sebelum memulai sesi PHP, kode ini harus dituliskan
session_start();

// Mengimpor 'koneksi.php' dan 'csrf.php'
include 'koneksi.php';
include 'csrf.php';

// Mengambil data dari form dan membersihkannya dari karakter khusus ditandai dengan "htmlpecialchars"
$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

if ($id == "") { //Pengecekan id
    // Query untuk INSERT data baru
    $query = "INSERT into anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
    $sql->execute();
} else {
    // Query untuk UPDATE data yang sudah ada
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $sql->execute();
}

echo json_encode(['success' => 'Sukses']);

// Closing koneksi database
$db1->close();
?>