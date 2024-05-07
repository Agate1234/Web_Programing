<table id="example" class="table table-striped table-bordered" style="width:100%"> <!--Pembuatan Table dengan nama id example -->
    <thead>
        <tr> <!--Isi dari tabel yang pertama-->
            <th>No</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>No telp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Mengimpor koneksi ke database
        include('koneksi.php');
        // Variabel untuk nomor urut
        $no = 1;
        // Query untuk mengambil seluruh data dari tabel anggota
        $query = "SELECT * FROM anggota ORDER BY id DESC";         
        $sql = $db1->prepare($query);         
        $sql->execute();         
        $res1 = $sql->get_result();
        // Jika ada hasil dari query
        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? "Laki-laki" : "Perempuan";
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $no_telp; ?></td>
                    <td>
                        <!-- Button edit data -->
                        <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                            <i class="fa fa-edit"></i>Edit
                        </button>
                        <!-- Button hapus data -->
                        <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                            <i class="fa fa-trash"></i>Hapus
                        </button>
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="7">Tidak ada data ditemukan</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    })

        // Fungsi untuk mereset pesan error
        function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    $(document).on('click', '.edit_data', function() {
        $('html, body').animate({scrollTop: 0}, 'slow');
        var id = $(this).attr('id');
        // Mengambil data anggota berdasarkan ID
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                // Mereset
                reset();
                $('html, body').animate({scrollTop: 30}, 'slow');
                // Mengisi nilai pada form dengan data yang diambil
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if (response.jenis_kelamin == "L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
<script>
    // Mengatur tindakan ketika tombol hapus_data diklik
    $(document).on('click', '.hapus_data', function() {
        var id = $(this).attr('id');
        // Menghapus data anggota berdasarkan ID anggota
        $.ajax({
            type: 'POST',
            url: "hapus_data.php",
            data: {
                id: id
            },
            success: function() {
                $('.data').load("data.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>