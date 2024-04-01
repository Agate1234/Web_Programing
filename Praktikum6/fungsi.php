<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir; // menghitung umur dengan thn_sekarang - tahn_lahir
    return $umur; // mengembalikan nilai variabel umur
}
function perkenalan($nama, $salam="Assalamualaikum" /* parameter default salam */){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya ". $nama ."<br>";

    // memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br>";
    echo "Senang Berkenalan Dengan Anda<br>";
}

// memanggil fungsi perkenalan
perkenalan("Faiz");
?>