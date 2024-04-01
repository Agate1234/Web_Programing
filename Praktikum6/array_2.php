<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table{
                border-collapse: collapse;
                border-spacing: 0;
                width: 75%;
                border: 1px solid black;
            }

            th, td{
                text-align: left;
                padding: 16px;
            }

            th {
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <table> 
            <tr>
                <th>Nama Dosen</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
            // membuat array multidimensi

            echo "<tr>";
            echo "<td>". "{$Dosen ['nama']}". "</td>"; // memanggil array indeks nama
            echo "<td>"."{$Dosen ['domisili']}". "</td>"; // memanggil array indeks domisili
            echo "<td>". "{$Dosen ['jenis_kelamin']}". "</td>"; // memanggil indeks jenis_kelamin
            echo "</tr>";
        ?>
    </body>
</html>