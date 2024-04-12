<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Untuk pemeriksaan syarat apakah permintaan yang dikirim merupakan POST
    // Untuk mendapatkan nilai dari inputan nama dan email
    $nama = $_POST["nama"]; 
    $email = $_POST["email"];
    
    // Untuk mencetak nama dan email yang diterima dari form
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>