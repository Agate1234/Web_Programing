<?php
// untuk mendefinisikan host, user, password, dan database
define('HOST', 'localhost'); 
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');


$db1 = new mysqli(HOST, USER, PASS, DB1);

if ($db1->connect_error) {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    die("Koneksi Gagal: " . $db1->connect_error);
}

?>
