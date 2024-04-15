<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendidikan</title>
        <link rel="stylesheet" href="pendidikan.css">
        <script src="jquery-3.7.1.js"></script>
        <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                $('.pendidikan').fadeIn(1500);

                $('form').submit(function(e){
                    e.preventDefault();
                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: 'server_pendidikan.php',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response){
                        },
                        error: function(){
                        }
                    });
                    $('form').fadeOut(750);
                    $('.pendidikan').fadeOut(750);
                    $('.bg').fadeOut(1500);
                    setTimeout(function(){
                        location.href = "server_pendidikan.php";
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
        <div class="pendidikan" style="display: none;">
            <form method="POST" action="server_pendidikan.php">
                <h2 align="center">Data Pendidikan</h2>
                <hr>
                <br>
                <label for="pen_terakhir"><b>Pendidikan Terakhir: </b></label>
                <select name="pen_terakhir" id="pen_terakhir" size="1">
                    <option value="kosong" selected> </option>
                    <option value="Diploma III (D3)">Diploma III (D3)</option>
                    <option value="Strata I (S1) / Diploma IV (D4)">Strata I (S1) / Diploma IV (D4)</option>
                    <option value="Strata II (S2)">Strata II (S2)</option>
                    <option value="Strata III (S3)">Strata III (S3)</option>
                </select><br><br>

                <label for="sekolah"><b>Sekolah/Perguruan Tinggi: </b></label>
                <input type="text" name="sekolah" id="sekolah" size="30" required><br><br>

                <label for="jurusan"><b>Jurusan: </b></label>
                <input type="text" name="jurusan" id="jurusan" size="30" required><br><br>

                <label for="prostud"><b>Program Studi: </b></label>
                <input type="text" name="prostud" id="prostud" size="30" required><br><br>

                <button type="button" name="prev" class="prev"><span>Previous</span></button>
                <button type="submit" name="submit" class="next" formmethod="post"><span>Next</span></button>
            </form>
        </div>
    </body>
</html>