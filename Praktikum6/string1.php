<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quibusdam modi velit eius possimus veniam id adipisci nihil sunt aliquid a temporibus numquam tenetur, soluta, distinctio dicta, quas debitis hic."; // deklarasi variabel

echo "<p>{$loremIpsum}</p>"; // menampilkan isi dari variabel loremIpsum
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>"; //menampilkan panjang karakter
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>"; // menampilkan jumlah kata 
echo "<p>" . strtoupper($loremIpsum). "</p>"; // mencetak var loremIpsum dan mengubah semuanya menjadi huruf kapital
echo "<p>" . strtolower($loremIpsum). "</p>"; // mencetak var loremIpsum dan mengubah semuanya menjadi huruf kecil

?>