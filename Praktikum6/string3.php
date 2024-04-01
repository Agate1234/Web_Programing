<?php

$pesan = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
// explode untuk memisahkan string menjadi array. setiap kata dalam string dipisah lalu disimpan dalam array.
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
// strrev setiap kata dalam array dibalik
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);
//implode untuk menggabungkan elemn array jadi satu string.
// kata yang sudah dibalik tadi akan digabung kembali menjadi string

echo $pesan . "<br>";

?>