<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php // Menghapus dan menghancurkan sesi
        session_unset();
        session_destroy();

        // Untuk menampilkan pesan jika semua variabel sesi sudah dihapus
        echo "All session variables are now removed, and the session is destroyed."
    ?>
</body>
</html>