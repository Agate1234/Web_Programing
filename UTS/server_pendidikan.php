<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["pen_terakhir"] = htmlspecialchars($_POST["pen_terakhir"]);
    $_SESSION["sekolah"] = htmlspecialchars($_POST["sekolah"]);
    $_SESSION["jurusan"] = htmlspecialchars($_POST["jurusan"]);
    $_SESSION["prostud"] = htmlspecialchars($_POST["prostud"]);
}

header("location: lampiran.php");
