<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quibusdam modi velit eius possimus veniam id adipisci nihil sunt aliquid a temporibus numquam tenetur, soluta, distinctio dicta, quas debitis hic.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>