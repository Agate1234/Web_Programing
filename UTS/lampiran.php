<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lampiran</title>
        <link rel="stylesheet" type="text/css" href="lampiran.css">
        <script src="jquery-3.7.1.js"></script>
        <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                $('.lampiran').fadeIn(1500);

                $('form').submit(function(e){
                    e.preventDefault();
                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: 'server_lampiran.php',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response){
                            $("#hasil").html(response);
                        },
                        error: function(){
                            ("#hasil").html('Terjadi Kesalahan saat mengunggah file')
                        }
                    });
                    $('form').fadeOut(750);
                    $('.lampiran').fadeOut(750);
                    $('.bg').fadeOut(1500);
                    setTimeout(function(){
                        location.href = "server_lampiran.php";
                    }, 1500);
                });

                $('.prev').click(function(e){
                    e.preventDefault();
                    $('form').fadeOut(750);
                    $('.pendidikan').fadeOut(750);
                    $('.bg').fadeOut(1500);
                    setTimeout(function(){
                        history.back();
                    }, 1500);
                });
            });
        </script>
    </head>
    <body>
        <div class="bg"></div>
        <div class="lampiran"  style="display: none;">
            <form method="post" enctype="multipart/form-data" action="server_lapmpiran.php">
                <h2 align="center">Lampiran</h2>
                <hr>
                <br>
                <label for="foto"><b>Foto diri ukuran 3x4: </b></label>
                <input type="file" name="file[]" id="file" required><br><br>

                <label for="ijazah"><b>Ijazah: </b></label>
                <input type="file" name="file[]" id="file" required><br><br>

                <label for="nilai"><b>Transkip Nilai: </b></label>
                <input type="file" name="file[]" id="file" required><br><br>

                <label for="kerja"><b>Pengalaman Kerja (Optional): </b></label>
                <input type="file" name="file1[]" id="file1"><br><br>

                <label for="sertif"><b>Sertifikat (Optional): </b></label>
                <input type="file" name="file1[]" id="file1"><br><br>

                <button type="button" name="prev" class="prev"><span>Previous</span></button>
                <button type="submit" name="submit" class="next"><span>Submit</span></button>
            </form>
        </div>
    </body>
</html>