<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Memeriksa halaman yang dipanggil menggunakan method POST atau tidak
    // Pengambilan nilai nama dan email
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $error[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi password
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } else if (strlen($password) < 8) {
        $errors[] = "Minimal password memiliki minimal 8 karakter";
    }

    // Jika ada kesalahan validasi 
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, dengan menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirm: Nama = $nama, Email = $email";
    }
}
?>