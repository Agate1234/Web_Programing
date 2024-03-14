<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;
// Pembuatan variabel serta pemberian nilai dari setiap variabel.

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
// mencetak seluruh variabel.

var_dump($e); // digunakan untuk melihat isi variabel dan tipe data yang digunakan.
echo "<br><br>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
// Pembuatan variabel serta pemberian nilai dari setiap variabel.

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
// menghitung nilai rata dengan menjumlahkan semua nilai dan dibagi 3

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
// mencetak semua var

var_dump($rataRata); 
echo "<br><br>";
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus); 
echo "<br>";
var_dump($apakahSiswaSudahUjian); 
/*
Pembuatan variabel dengan pengisian true false, kemudian dicek isi dan tipe data yang digunakan
dengan perintah var_dump
*/
echo "<br><br>";
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
// menghitung nilai rata dengan menjumlahkan semua nilai dan dibagi 3

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;
// cara penggabungan jika variabel tsb adalah string

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap . "<br>";
echo $namaLengkap2 . "<br>";
var_dump($namaDepan);
echo "<br>";
var_dump($namaBelakang); 
// mencetak variabel yang digabungkan tadi
echo "<br><br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0] . "<br>";
var_dump($listMahasiswa); 
// Menampilakan elemen pertama/indeks0 dari array listMahasiswa.
?>