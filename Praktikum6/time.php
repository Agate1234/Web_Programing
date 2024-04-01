<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3>Time</h3>
        <?php
        // zona waktu yang digunakan
        date_default_timezone_set("asia/jakarta");
        // menampilkan waktu dalam format jam:menit:detik
        echo date("h:i:sa");
        ?>
    </body>
</html>