<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title> <!-- Judul halaman -->
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php 
    //inisialisasi variabel
    $namaErr = "";
    $nama = "";

    //cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // validasi nama (contoh: pastikan nama tidak kosong)
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi:";
        } else {
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan: ";
        }
    }
    ?>
    <!--form inputan-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama: </label> <!--Label yang digunakan untuk input nama -->
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> <!--penginputan teks untuk nama dan mencetaknya -->
    <span class="error"><?php echo $namaErr; ?></span><br><br> <!--Pemberitahuan error -->

    <input type="submit" name="submit" value="Submit"> <!-- Tombol submit -->
</form>
</body>
</html>