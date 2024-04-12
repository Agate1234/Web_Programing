<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <!--Formulir yang digunakan untuk memilih buah-->
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <!--Option-->
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>
        <!--Formulir yang digunakan untuk memilih warna-->
        <label>Pilih warna Favorit</label> <br>
        <input type="checkbox" name="warna[]" value="merah">Merah <br>
        <input type="checkbox" name="warna[]" value="biru">Biru <br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau<br>

        <br>

        <!--Formulir untuk memilih jenis kelamin-->
        <label>Pilih Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>

        <br>
        <!--Tombol submit-->
        <input type="submit" value="Submit">
    </form>
</body>
</html>