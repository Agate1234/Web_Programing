<?php
session_start();

if (isset($_FILES['file'])) {
    $errors = array();
    $arrayFile = array();
    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpeg", "jpg", "png");
        $no = $key + 1;
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "<br>Ekstensi file ke $no yang diizinkan adalah jpg, jpeg, dan png.<br>";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB<br>';
        }
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            $arrayFile[$key] = "uploads/" . $file_name;
            $_SESSION["file"][$key] = $arrayFile[$key];
        }
    }

    foreach ($_FILES['file1']['tmp_name'] as $temp => $tmp_name) {
        $file_name = $_FILES['file1']['name'][$temp];
        $file_size = $_FILES['file1']['size'][$temp];
        $file_tmp = $_FILES['file1']['tmp_name'][$temp];
        $file_type = $_FILES['file1']['type'][$temp];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions1 = array("pdf");
        $no = $temp + 1;
        if (in_array($file_ext, $extensions1) === false) {
            $errors[] = "<br>Ekstensi file ke $no yang diizinkan adalah pdf.<br>";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB<br>';
        }
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            $arrayFile[$temp] = "documents/" . $file_name;
            $_SESSION["file1"][$temp] = $arrayFile[$temp];
        }
    }
}

header("location: hasil.php");
?>