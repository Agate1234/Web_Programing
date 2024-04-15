<?php
if(isset($_POST["submit"])) { // untuk mengecek apakah form sudah di submit
    $targetDirectory = "documents/"; //Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // membuat array untuk eksitensi dokumen ("txt", "pdf", "doc", "docx)
    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;
    
    if(in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else{
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>