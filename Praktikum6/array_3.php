<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Menghubungkan dengan file style.css -->
    </head>
    <body>
        <h2>Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Ratung</th>
                <!-- membuat baris table dengan kolomnya sebagai head -->
            </tr>
            <?php
                $movie = [
                    ["Avengers: Infinity War", 2018, 8.7],
                    ["The Avengers", 2012, 8.1],
                    ["Guardians of the Galaxy", 2014, 8.1],
                    ["Iron Man", 2008, 7.9]
                ];
                // membuat multidimensi array
                echo "<tr>";
                    echo "<td>" . $movie[0][0] . "</td>";
                    echo "<td>" . $movie[0][1] . "</td>";
                    echo "<td>" . $movie[0][2] . "</td>";
                echo "</tr>";
                // membuat table baris dengan kolom nya array indeks 0 dan indeks ke-2 0 sampai habis
                echo "<tr>";
                    echo "<td>" . $movie[1][0] . "</td>";
                    echo "<td>" . $movie[1][1] . "</td>";
                    echo "<td>" . $movie[1][2] . "</td>";
                echo "</tr>";
                // membuat table baris dengan kolom nya array indeks 1 dan indeks ke-2 0 sampai habis
                echo "<tr>";
                    echo "<td>" . $movie[2][0] . "</td>";
                    echo "<td>" . $movie[2][1] . "</td>";
                    echo "<td>" . $movie[2][2] . "</td>";
                echo "</tr>";
                // membuat table baris dengan kolom nya array indeks 2 dan indeks ke-2 0 sampai habis
                echo "<tr>";
                    echo "<td>" . $movie[3][0] . "</td>";
                    echo "<td>" . $movie[3][1] . "</td>";
                    echo "<td>" . $movie[3][2] . "</td>";
                echo "</tr>";
                // membuat table baris dengan kolom nya array indeks 3 dan indeks ke-2 0 sampai habis
            ?>
        </table>
    </body>
</html>