<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Hasil</title>
    <link rel="stylesheet" type="text/css" href="hasil.css">
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $('.hasil').fadeIn(1500);

            $("#slide").click(function(){
                $("#efek").slideToggle("slow");
            });

            $("#slide1").click(function(){
                $("#efek1").slideToggle("slow");
            });

            $('form').submit(function(e){
                e.preventDefault();
                $('form').fadeOut(750);
                $('.pendidikan').fadeOut(750);
                $('.bg').fadeOut(1500);
                setTimeout(function(){            
                }, 1500);
            });
        });
    </script>
</head>
    <body>
        <div class="bg"></div>
        <div class="hasil" style="display: none;">
            <div id="bio">
                <h3>Biodata</h3>
            </div>
            <div id="form_bio"> 
                <table>
                    <tr>
                        <td colspan="3"><img src="<?php echo $_SESSION["file"][0] ?>"></td>
                    </tr>
                    <tr >
                        <td id="col1">Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["nama"]; ?></td>
                    </tr>
                    <tr>
                        <td id="col1">Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["jenis_kelamin"]; ?></td>
                    </tr>
                    <tr>
                        <td id="col1">Alamat</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["alamat"]; ?></td>
                    </tr>
                    <tr>
                        <td id="col1">Tempat Lahir</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["tempat_lahir"]; ?></td>
                    </tr>
                    <tr>
                        <td id="col1">Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["tanggal_lahir"]; ?></td>
                    </tr>
                    <tr>
                        <td id="col1">Agama</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["agama"]; ?></td>
                        
                    </tr>
                    <tr>
                        <td id="col1">No HP</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["no_hp"]; ?></td>
                    </tr>
                    <tr>
                        <td id="col1">Email</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["email"]; ?></td>
                    </tr>
                </table>
                <br><br>
            </div>
            <div id="slide">
                <h3>Data Pendidikan</h3>
            </div>
            <div id="efek" style="display: none;">
                <table>
                    <tr>
                        <td id="kol1">Pendidikan Terakhir</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["pen_terakhir"]; ?></td>
                    </tr>
                    <tr>
                        <td id="kol1">Sekolah/Perguruan Tinggi</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["sekolah"]; ?></td>
                    </tr>
                    <tr>
                        <td id="kol1">Jurusan</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["jurusan"]; ?></td>
                    </tr>
                    <tr>
                        <td id="kol1">Program Studi</td>
                        <td>:</td>
                        <td><?php echo $_SESSION["prostud"]; ?></td>
                    </tr>
                </table>
            </div>
            <div id="slide1">
                <h3>Lampiran</h3>
            </div>
            <div id="efek1" style="display: none;">
                <table>
                    <tr>
                        <td id="kol1">Ijazah</td>
                        <td>:</td>
                        <td><a href="<?php echo $_SESSION["file"][1] ?>" target="_blank">Ijazah</a></td>
                    </tr>
                    <tr>
                        <td id="kol1">Transkrip Nilai</td>
                        <td>:</td>
                        <td><a href="<?php echo $_SESSION["file"][2] ?>" target="_blank">Transkrip Nilai</a></td>
                    </tr>
                    <tr>
                        <td id="kol1">Surat Pengalaman Kerja (Optional)</td>
                        <td>:</td>
                        <td><a href="<?php echo $_SESSION["file1"][0] ?>" target="_blank">Surat Pengalaman</a></td>
                    </tr>
                    <tr>
                        <td id="kol1">Sertifikat (Optional)</td>
                        <td>:</td>
                        <td><a href="<?php echo $_SESSION["file1"][1] ?>" target="_blank">Sertifikat</a></td>
                    </tr>
                </table>
            </div>
            <div>
                <button type="button" name="prev" class="prev"><span>Previous</span></button>
                <button type="button" name="end" class="end"><span>Selesai</span></button>
            </div>
        </div>
    </body>
</html>