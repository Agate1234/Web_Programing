<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--Impor jQuery-->
</head>
<body>
    <h2>Form Contoh</h2>
    <!--Pembuatan Form-->
    <form id="myForm"> <!--Form dengan id myForm-->
        <label for="buah">Pilih Buah: </label> <br>
        <!--Pembuatan opsi untuk buah-->
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br> <br>

        <!--Pembuatan label untuk warna-->
        <label>Pilih Warna Favorit:</label> <br>
        <!--Checkbox untuk memilih warna-->
        <input type="checkbox" nama="warna[]" value="merah">Merah <br>
        <input type="checkbox" nama="warna[]" value="biru">Biru <br>
        <input type="checkbox" nama="warna[]" value="hijau">Hijau <br>

        <br> <br>

        <label>Pilih Jenis Kelamin:</label> <br>
        <!--Radio button untuk memilih jenis kelamin-->
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan">Permepuan<br>

        <br> <br>

        <!--Tombol submit-->
        <input type="submit" value="Submit">

    </form>
    <!--Container yang berfungsi untuk menampilkan hasil dari proses-->
    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <!--jQuery-->
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                e.preventDefault(); // Mencegah pengiriman form secara default

                // Mengumpulkan data form
                var formData = $("#myForm").serialize();

                //Kirim data ke server PHP dengan menggunakan AJAX
                $.ajax({
                    url: "proses_lanjut.php", // Ganti dengan nama file PHP yang sesuai 
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    } 
                })
            })
        })
    </script>
</body>
</html>