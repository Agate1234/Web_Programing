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

                <label for="org"><b>Pengalaman Organisasi: </b></label><br>
                <table>
                    <tr>
                        <th>Nama Organisasi</th>
                        <th>Jabatan</th>
                        <th>Masa Jabatan</th>
                        <th>Tahun</th>
                    </tr>
                    <tr>
                        <td><input type="text" nama="nama1" size="15"></td>
                        <td><input type="text" nama="jabatan1" size="10"></td>
                        <td><input type="text" nama="masa1" size="10"></td>
                        <td><input type="text" nama="tahun1" size="8"></td>
                    </tr>
                    <tr>
                        <td><input type="text" nama="nama2" size="15"></td>
                        <td><input type="text" nama="jabatan2" size="10"></td>
                        <td><input type="text" nama="masa2" size="10"></td>
                        <td><input type="text" nama="tahun2" size="8"></td>
                    </tr>
                    <tr>
                        <td><input type="text" nama="nama3" size="15"></td>
                        <td><input type="text" nama="jabatan3" size="10"></td>
                        <td><input type="text" nama="masa3" size="10"></td>
                        <td><input type="text" nama="tahun3" size="8"></td>
                    </tr>
                </table><br>

                <label for="kerja"><b>Pengalaman Kerja: </b></label><br>
                <table>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Jabatan</th>
                        <th>Masa Kerja</th>
                        <th>Tahun</th>
                    </tr>
                    <tr>
                        <td><input type="text" nama="nama4" size="15"></td>
                        <td><input type="text" nama="jabatan4" size="10"></td>
                        <td><input type="text" nama="masa4" size="10"></td>
                        <td><input type="text" nama="tahun4" size="8"></td>
                    </tr>
                    <tr>
                        <td><input type="text" nama="nama5" size="15"></td>
                        <td><input type="text" nama="jabatan5" size="10"></td>
                        <td><input type="text" nama="masa5" size="10"></td>
                        <td><input type="text" nama="tahun5" size="8"></td>
                    </tr>
                    <tr>
                        <td><input type="text" nama="nama6" size="15"></td>
                        <td><input type="text" nama="jabatan6" size="10"></td>
                        <td><input type="text" nama="masa6" size="10"></td>
                        <td><input type="text" nama="tahun6" size="8"></td>
                    </tr>
                </table><br><br>

                <button type="button" name="prev" class="prev"><span>Previous</span></button>
                <button type="submit" name="submit" class="next" formmethod="post"><span>Next</span></button>
            </form>
        </div>
    </body>
</html>