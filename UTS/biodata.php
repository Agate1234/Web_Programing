<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biodata</title>
        <link rel="stylesheet" href="biodata.css">
        <script src="jquery-3.7.1.js"></script>
        <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                $('.biodata').fadeIn(1500);

                $('form').submit(function(e){
                    e.preventDefault();
                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: 'server_biodata.php',
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
                    $('.biodata').fadeOut(750);
                    $('.bg').fadeOut(1500);
                    setTimeout(function(){
                        location.href = "server_biodata.php";
                    }, 1500);
                });
            });
        </script>
    </head>
    <body>
        <div class="bg"></div>
        <div class="biodata" style="display: none;"> 
            <form method="POST" action="server_biodata.php">
                <h2 align="center">Biodata</h2>
                <hr>
                <br>
                <label for="nama"><b>Nama Lengkap: </b></label>
                <input type="text" name="nama" size="30" id="nama" required><br><br>

                <label><b>Jenis Kelamin: </b></label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin">Laki-laki
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">Perempuan<br><br>
                
                <label for="alamat"><b>Alamat: </b></label>
                <input type="text" name="alamat" id="alamat" size="30"><br><label></label> Jalan/Desa<br><br>
                <label></label>
                <input type="text" name="kec" id="kec" size="30"><br><label></label> Kecamatan<br><br>
                <label></label>
                <input type="text" name="kota" id="kota" size="12.5"> 
                <input type="text" name="prov" id="prov" size="12.5"><br><label></label> Kabupaten/Kota <label class="prov"></label>Provinsi<br><br>

                <label for="tempat_lahir"><b>Tempat Lahir: </b></label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" size="30" required><br><br>

                <label for="tanggal_lahir"><b>Tanggal Lahir: </b></label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"><br><br>

                <label for="agama"><b>Agama: </b></label>
                <input type="text" name="agama" id="agama" size="30" required><br><br>

                <label for="telephone"><b>No HP: </b></label>
                <input type="tel" name="no_hp" id="no_hp" size="30" required><br><br>

                <label for="email"><b>Email: </b></label>
                <input type="email" name="email" id="email" size="30" required><br><br>

                <div class="tombol">
                    <button type="submit" name="submit" class="next"><span>Next</span></button>
                </div>
            </form>
        </div>
    </body>
</html>