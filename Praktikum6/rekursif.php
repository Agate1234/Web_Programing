<?php
// membuat fungsi tampilkanAngka dengan parameter jumlah dan default indeks = 1
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama indeks < jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

//memanggil fungsi dan mengisi nilai 20, yang berarti akan dilakukan perulangan sampai 20 (1 sampai 20)
tampilkanAngka(20);
?>