<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5 ($_POST['password']);

    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $row= mysqli_fetch_assoc($result);

    if($row['level']== 1) {
        // Jika level 1 (admin di db), menampilkan pesan di bawah dan ada tautan ke homeAdmin.html
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    }else if($row['level']== 2) {
        // Jika level 2 (guest di db), menampilkan pesan di bawah dan ada tautan ke homeGuest.html
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeGuest.html">Halaman HOME</a>
        <?php
    }else {
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login kembali</a>
        <?php
        echo mysqli_error($connect);
    }


?>