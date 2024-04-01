<?php
echo $_SERVER['PHP_SELF']; // Berisi informasi nama file yang sedang dieksekusi (berdasarkan dokumen dari root)
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Menampilkan nama server
echo "<br>";
echo $_SERVER['HTTP_HOST']; // Menampilkan host http
echo "<br>";
echo $_SERVER['HTTP_REFERER']; // Halaman url yang jadi referensi ke halaman yang dieksekusi
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; // Berisi informasi dari user yang melakukan request content.
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // Menampilkan nama file skrip saat ini
echo "<br>";
?>