<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "{$a} + {$b} = {$hasilTambah} <br>";
echo "{$a} - {$b} = {$hasilKurang} <br>";
echo "{$a} * {$b} = {$hasilKali} <br>";
echo "{$a} / {$b} = {$hasilBagi} <br>";
echo "{$a} % {$b} = {$sisaBagi} <br>";
echo "{$a} pangkat {$b} = {$pangkat} <br><br>";
/* 
membuat variabel hasil operasi matematika antara variabel a dan b.
lalu mencetak hasil tersebut (penjumlahan, pengurangan, perkalian, pembagian, sisa bagi dan pangkat).
*/

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo $a . " = " . $b . "? " . $hasilSama . "<br>";
echo "{$a} != {$b}? {$hasilTidakSama} <br>";
echo "{$a} < {$b}? {$hasilLebihKecil} <br>";
echo "{$a} > {$b}? {$hasilLebihBesar} <br>";
echo "{$a} <= {$b}? {$hasilLebihKecilSama} <br>";
echo "{$a} >= {$b}? {$hasilLebihBesarSama} <br><br>";

/* 
Setelah membuat variabel (hasil perbandingan antara variabel a dan b). 
lalu mencetak hasil tersebut ke dalam perintah echo
*/

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "{$a} And {$b} = {$hasilAnd} <br>";
echo "{$a} Or {$b} = {$hasilOr} <br>";
echo "Not {$a} = {$hasilNotA} <br>";
echo "Not {$b} = {$hasilNotB} <br><br>";
/*
membuat operasi logika a dan b.
Lalu mencetaknya
*/

echo "{$a} += {$b} = " ;
$a += $b;
echo $a . "<br>";
echo "{$a} -= {$b} = "; 
$a -= $b;
echo $a . "<br>";
echo "{$a} *= {$b} = "; 
$a *= $b;
echo $a . "<br>";
echo "{$a} /= {$b} = ";
$a /= $b;
echo $a . "<br>";
echo "{$a} %= {$b} = ";
$a %= $b;
echo $a. "<br><br>";
// Hasil operasi assignment terhadap a dan b serta hasil cetaknya

$hasilIdentik = $a === $b; // operasi yang menyatakan apakah a sama dengan b dan berasal dari tipe data yang sama.
$hasilTidakIdentik = $a !== $b; // operasi yang menyatakan apakah a tidak sama dengan b dan berasal dari tipe data yang berbeda.

echo "{$a} Identik dengan {$b}? {$hasilIdentik} <br>";
echo "{$a} Tidak Identik dengan {$b}? {$hasilTidakIdentik} <br><br>";

$kursi = 45;
$pelanggan = 28;
$sisa = $kursi - $pelanggan;
$persenKursiKosong = ($sisa / $kursi) * 100;

echo "Banyak kursi sebuah resto adalah " . $kursi . " dan pelanggan menempati kursi sebanyak " . $pelanggan . ". Sisa kursi sebanyak " . $sisa . " yang memiliki banyak persen kursi kosong yaitu " . $persenKursiKosong . "%";
/*
Pertama kali membuat varibel yang berisikan jumlah kursi dan kursi pelanggan yang ditempati. 
Kemudian membuat varibel baru hasi pengurangan antara kursi dikurangi dengan kursi pelanggan yang ditempati. 
Maka akan menghasilkan rumus seperti di atas yaitu "persenKursiKosong = (sisa/kursi) * 100" 
Setelah itu akan menghasilkan hasil 37.77..% 
*/
?>