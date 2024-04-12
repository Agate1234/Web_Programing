<?php
$myArray = array(); //Array kosong
if (empty($myArray)) { //empty berfungsi untuk mengecek apakah variabel bernilai kosong atau tidak
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

echo "<br><br>";

// melakukan pengecekkan variabel yang kosong
if (empty($nonExixtentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>