<?php
$x = 75;
$y = 25;

// membuat fungsi penjumlahan
function addition() {
    // mengakses variabel global x dan y memakai array global
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// memanggil fungsi
addition();

// menampilkan var z (hasil)
echo $z;
?>