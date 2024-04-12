<?php 
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br><br>";

$pattern = '/[0-9]+/'; //Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0]; // Mencetak bagian teks yang cocok 
} else {
    echo "Tidak ada yang cocok"; // Mencetak pesan tidak ada yang cocok 
}
echo "<br><br>";
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie."

echo "<br><br>";

$pattern = "/go{n,m}d/"; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.' ;
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: ". $matches[0]; // Mencetak bagian teks yang cocok 
} else {
    echo "Tidak ada yang cocok"; // Mencetak pesan tidak ada yang cocok 
}
?>