<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["pen_terakhir"] = htmlspecialchars($_POST["pen_terakhir"]);
    $_SESSION["sekolah"] = htmlspecialchars($_POST["sekolah"]);
    $_SESSION["jurusan"] = htmlspecialchars($_POST["jurusan"]);
    $_SESSION["prostud"] = htmlspecialchars($_POST["prostud"]);
    $_SESSION["nama1"] = htmlspecialchars($_POST["nama1"]);
    $_SESSION["nama2"] = htmlspecialchars($_POST["nama2"]);
    $_SESSION["nama3"] = htmlspecialchars($_POST["nama3"]);
    $_SESSION["nama4"] = htmlspecialchars($_POST["nama4"]);
    $_SESSION["nama5"] = htmlspecialchars($_POST["nama5"]);
    $_SESSION["nama6"] = htmlspecialchars($_POST["nama6"]);
    $_SESSION["jabatan1"] = htmlspecialchars($_POST["jabatan1"]);
    $_SESSION["jabatan2"] = htmlspecialchars($_POST["jabatan2"]);
    $_SESSION["jabatan3"] = htmlspecialchars($_POST["jabatan3"]);
    $_SESSION["jabatan4"] = htmlspecialchars($_POST["jabatan4"]);
    $_SESSION["jabatan5"] = htmlspecialchars($_POST["jabatan5"]);
    $_SESSION["jabatan6"] = htmlspecialchars($_POST["jabatan6"]);
    $_SESSION["masa1"] = htmlspecialchars($_POST["masa1"]);
    $_SESSION["masa2"] = htmlspecialchars($_POST["masa2"]);
    $_SESSION["masa3"] = htmlspecialchars($_POST["masa3"]);
    $_SESSION["masa4"] = htmlspecialchars($_POST["masa4"]);
    $_SESSION["masa5"] = htmlspecialchars($_POST["masa5"]);
    $_SESSION["masa6"] = htmlspecialchars($_POST["masa6"]);
    $_SESSION["tahun1"] = htmlspecialchars($_POST["tahun1"]);
    $_SESSION["tahun2"] = htmlspecialchars($_POST["tahun2"]);
    $_SESSION["tahun3"] = htmlspecialchars($_POST["tahun3"]);
    $_SESSION["tahun4"] = htmlspecialchars($_POST["tahun4"]);
    $_SESSION["tahun5"] = htmlspecialchars($_POST["tahun5"]);
    $_SESSION["tahun6"] = htmlspecialchars($_POST["tahun6"]);
}

if(!isset($_SESSION["nama1"]) && !isset($_SESSION["jabatan1"]) && !isset($_SESSION["masa1"]) && !isset($_SESSION["tahun1"])){
    $_SESSION["nama1"] = " ";
    $_SESSION["jabatan1"] = " ";
    $_SESSION["masa1"] = " ";
    $_SESSION["tahun1"] = " ";
}

if(!isset($_SESSION["nama2"]) && !isset($_SESSION["jabatan2"]) && !isset($_SESSION["masa2"]) && !isset($_SESSION["tahun2"])){
    $_SESSION["nama2"] = " ";
    $_SESSION["jabatan2"] = " ";
    $_SESSION["masa2"] = " ";
    $_SESSION["tahun2"] = " ";
}

if(!isset($_SESSION["nama3"]) && !isset($_SESSION["jabatan3"]) && !isset($_SESSION["masa3"]) && !isset($_SESSION["tahun3"])){
    $_SESSION["nama3"] = " ";
    $_SESSION["jabatan3"] = " ";
    $_SESSION["masa3"] = " ";
    $_SESSION["tahun3"] = " ";
}

if(!isset($_SESSION["nama4"]) && !isset($_SESSION["jabatan4"]) && !isset($_SESSION["masa4"]) && !isset($_SESSION["tahun4"])){
    $_SESSION["nama4"] = " ";
    $_SESSION["jabatan4"] = " ";
    $_SESSION["masa4"] = " ";
    $_SESSION["tahun4"] = " ";
}

if(!isset($_SESSION["nama5"]) && !isset($_SESSION["jabatan5"]) && !isset($_SESSION["masa5"]) && !isset($_SESSION["tahun5"])){
    $_SESSION["nama5"] = " ";
    $_SESSION["jabatan5"] = " ";
    $_SESSION["masa5"] = " ";
    $_SESSION["tahun5"] = " ";
}

if(!isset($_SESSION["nama6"]) && !isset($_SESSION["jabatan6"]) && !isset($_SESSION["masa6"]) && !isset($_SESSION["tahun6"])){
    $_SESSION["nama6"] = " ";
    $_SESSION["jabatan6"] = " ";
    $_SESSION["masa6"] = " ";
    $_SESSION["tahun6"] = " ";
}

header("location: lampiran.php");
?>