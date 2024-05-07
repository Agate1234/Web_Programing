<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($connect, $sql);

    // Untuk menghitung jumlah baris
    $cek = mysqli_num_rows($result);

    // Pemeriksaan baris hasil baris query
    if($cek > 0) {
        // Jika ada (lebih dari 0), mulai sesi
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda Berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman Home </a> <?php
    }else{
        ?>
        Gagal login, silahkan login lagi 
        <a href="sessionLoginForm.html"> Halaman Login </a> <?php
        echo mysqli_error($connect);
    }
?>