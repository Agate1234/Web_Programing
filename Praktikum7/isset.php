<?php
$umur;

// Untuk mengecek apakah variabel $umur telah di deklasrasi
// dan apakah variabel $umur memiliki nilai (sesuai syarat) atau tidak
if (isset($umur) && $umur >= 18) { // jika umur ada nilainya dan lebih dari sama dengan 18 
    echo "Anda sudah dewasa."; // perintah ini akan tercetak
} else { // selain syarat itu, perintah di bawah ini akan tercetak
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}
echo"<br> <br>";

// mengecek array $data dengan nama apakah nilainya tersedia atau kosong.
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>