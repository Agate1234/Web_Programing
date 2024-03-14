<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
// Menggunakan Pemilihan besyarat untuk mencetak nilai yang memenuhi syarat

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer <br><br>";
/*
Pertama membuat variabel jarak saat ini, target, dan peningkatan hari an jarak.
setelah itu akan dilakukan loop hingga jarak saat ini melebihi atau sama dengan target.
setiap loop , jarak saat ini akan ditambahkan dengan peningkatan harian dan setiap loop hari juga akan bertambah 1.
hingga hasilnya hari = 17 untuk mencapai jarak target.
*/

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br><br>";
/*
membuat variabel jumlah lahan, tanaman perlahan, dan buah per tanaman.
setelah itu akan melakukan loop dengan syarat $i kurang dari sama dengan jumlah lahan.
setiap loop "jumlahBuah += (tanamanPerLahan * buahPerTanaman)" hingga hasil jumlah buah akhir adalah 500
*/

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br><br>";
/*
Menggunakan perulangan foreach untuk menjumlahkan skor di array
*/

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai) {
    if($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
/*
Menggunakan perulangan foreach dan persyaratan.
jika nilai kurang dari 60 akan mencetak tidak lulus dan dilanjutkan continue 
(apapun yang akan di cetak atau dibawah continue di dalam loop akan diabaikan dan dilanjut loop selanjutnya)
jika tidak memenuhi syarat akan mencetak Lulus
*/

echo "<br>";

$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nilaiMaks = 0;
$nilaiMaks1 = 0;
$nilaiMin = 100;
$nilaiMin1 = 100;
$jumlahNilai = 0;
// membuat variabel array untuk nilai, nilai maks 1 dan 2, nilai min 1 dan 2, serta total nilai.

foreach($nilaiUjian as $nilai) {
    if($nilai > $nilaiMaks) {
        $nilaiMaks = $nilai;
    }
    if($nilai < $nilaiMin) {
        $nilaiMin = $nilai;
    }
}
/*
melakukan perulangan foreach 
dengan syarat jika nilai lebih dari nilai maks yang bernilai 0 maka nilai maks tersebut adalah nilai itu sendiri
syarat kedua jika nilai kurang dari nilai min yang bernilai 100 maka nilai min tersebut adalah nilai itu sendiri
*/

$panjang = count($nilaiUjian);

for($i = 0; $i < $panjang; $i++) {
    if($nilaiUjian[$i] == $nilaiMaks || $nilaiUjian[$i] == $nilaiMin) {
        continue;
    }
    if($nilaiUjian[$i] > $nilaiMaks1) {
        $nilaiMaks1 = $nilaiUjian[$i];
    }
    if($nilaiUjian[$i] < $nilaiMin1) {
        $nilaiMin1 = $nilaiUjian[$i];
    }
}
/*
melakukan perulangan yang hampir sama dengan yang pertama
dengan tambahan syarat jika nilai sama dengan nilai maks yang pertama atau nilai min sama dengan yang pertama,
maka perulangan akan dilewati
*/

for($i = 0; $i < $panjang; $i++) {
    if($nilaiUjian[$i] == $nilaiMaks || $nilaiUjian[$i] == $nilaiMin || $nilaiUjian[$i] == $nilaiMaks1 || $nilaiUjian[$i] == $nilaiMin1) {
        continue;
    }
    $jumlahNilai += $nilaiUjian[$i];
}
/*
perulangan dengan syarat, jika nilai ujian sama dengan nilai maks 1 dan 2 atau nilai min 1 dan 2 maka akan dilewati
jika syarat tidak memenuhi, var jumlah nilai akan menampung semua penjumlahan nilai dalam array.
*/


$rata = $jumlahNilai / ($panjang-4);
// membuat var rata untuk membagi jumlah nilai dengan banyaknya siswa(indeks array) dikurangi 4 yang merupakan siswa nilai maks 1, 2 dan min 1, 2.

echo "Rata-rata setelah menghilangkan nilai tertinggi: $nilaiMaks dan $nilaiMaks1, Nilai terendah: $nilaiMin dan $nilaiMin1 adalah: $rata <br><br>";
// mencetak semua nilai maks 1, 2, dan nilai min 1, 2 serta rata yang hasilnya adalah 82,5

$harga = 120000;
$diskon = 0.2;
$syarat = 100000;
$totaldiskon = 0;
// membuat variabel diskon, harga dan syarat diskon

if($harga > $syarat) {
    $totaldiskon = $harga * $diskon;
    $harga -= $totaldiskon;
}
// jika harga lebih dari syarat diskon maka pelanggan akan mendapatkan diskon

echo "Harga yang harus dibayar adalah: $harga <br><br>";
// total harga yang dibayar dari 120000 sekarang menjadi 96000

$hadiah = false;
$poin = 250;
$syaratPoin = 500;
// membuat variabel hadiah, poin, dan syarat poin untuk mendapatkan hadiah

echo "Total skor pemain adalah: $poin <br>";

if($poin > $syaratPoin) {
    $hadiah = true;
}
// jika poin melebihi syarat poin maka value hadia akan menjadi true

echo "Apakah Pemain mendapatkan hadiah tambahan? ";

$dapat = ($hadiah == true) ? "YA" : "TIDAK";
// membuat variabel dapat untuk persyaratan, jika hadiah sama dengan true maka akan mencetak YA

echo "$dapat"
?>