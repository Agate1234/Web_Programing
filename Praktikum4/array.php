<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96]; 
$nilaiLulus = [];

foreach( $nilaiSiswa as $nilai) {
    if($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
/*
menggunakan array 1 dimensi untuk menyimpan nilai di dalam nilaiSiswa.
menggunakan perulangan foreach untuk mencari nilai yang lebih dari sama dengan 70
*/

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$KaryawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan) {
    if($karyawan[1] > 5) {
        $KaryawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $KaryawanPengalamanLimaTahun) . "<br><br>";
/*
Menggunakan array 2 dimensi untuk menyimpan nama daftar karyawan dan pengalaman kerja (num).
Menggunakan perulangan foreach untuk mencari karyawan yang pengalaman kerjanya lebih dari 5 tahun lalu mencetak nama dari karyawan tersebut melalui implode.
*/

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';

echo "Daftar Nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
/*
Menggunakan array multidimensi untuk menyimpan data nilai mahasiswa ditiap mata kuliah.
lalu menggunakan variabel mata kuliah agar bisa membedakan daftarNilai fisika dengan yang lainnya.
lalu mencetak daftar mahasiswa berupa nama dan nilainya (dalam mata kuliah fisika) dengan menggunakan foreach.  
*/

echo "<br>";

$nilaiMhs = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$mhsLulus = [];
$rata = 0;

foreach($nilaiMhs as $nilai) {
    $rata += $nilai[1];
}

$rata /= count($nilaiMhs);

echo "Nilai Mahasiswa di atas rata-rata $rata: <br>";

foreach($nilaiMhs as $nilai) {
    if($nilai[1] > $rata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
/*
Pertama membuat array dua dimensi.
foreach pertama untuk menambah semua total nilai lalu membagi nya dengan total array.
lalu foreach kedua untuk  mencetak nilai yang lebih dari rata-rata.
*/
?>