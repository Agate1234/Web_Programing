<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nama"] = htmlspecialchars($_POST["nama"]);
    $_SESSION["jenis_kelamin"] = htmlspecialchars($_POST["jenis_kelamin"]);
    $_SESSION["alamat"] = htmlspecialchars($_POST["alamat"]);
    $_SESSION["kec"] = htmlspecialchars($_POST["kec"]);
    $_SESSION["kota"] = htmlspecialchars($_POST["kota"]);
    $_SESSION["prov"] = htmlspecialchars($_POST["prov"]);
    $_SESSION["tempat_lahir"] = htmlspecialchars($_POST["tempat_lahir"]);
    $_SESSION["tanggal_lahir"] = htmlspecialchars($_POST["tanggal_lahir"]);
    $_SESSION["agama"] = htmlspecialchars($_POST["agama"]);
    $_SESSION["no_hp"] = htmlspecialchars($_POST["no_hp"]);
    $_SESSION["email"] = htmlspecialchars($_POST["email"]);
}

header("location: pendidikan.php");
?>