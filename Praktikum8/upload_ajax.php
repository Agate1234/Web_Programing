<?php
if (isset($_FILES['file'])) { //Pemeriksaan isi file
    $errors = array();
    // foreach dan array soal 3.2
    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
    $file_name = $_FILES['file']['name'][$key];
    $file_size = $_FILES['file']['size'][$key];
    $file_tmp = $_FILES['file']['tmp_name'][$key];
    $file_type = $_FILES['file']['type'][$key];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    // array yang berisi ekstensi yang diizinkan
    $extensions = array("jpeg", "jpg", "png", "gif");

    // Melakukan Pemeriksaan ekstensi file
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPEG, JPG, PNG, atau GIF.";
    }

    // Melakukan pemeriksaan ukuran file
    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    // Menangani masalah pengunggahan
    if (empty($errors)) {
        $destination = "uploads/" . $file_name;
        if (move_uploaded_file($file_tmp, $destination)) {
            echo "File $file_name berhasil diunggah.<br>";
        }else {
            echo "Gagal unggah file";
        }
    } else {
        echo implode(" ", $errors);
    }
    }

}


?>