<?php
    $tugas = [
        'JohnWick' => [
            'Foto' => '<img src="img/JohnWick.jpg"></img>',
            'Nama' => 'Jardani Jovanovich',
            'Alamat' => 'Russia',
            'NoHP' => '085577770099',
            'Jurusan' => 'Informatika',
        ],
        'JamesBond' => [
            'Foto' => '<img src="img/JamesBond1.png"></img>',
            'Nama' => 'James Bond 07',
            'Alamat' => 'Skotlandia',
            'NoHP' => '081231234455',
            'Jurusan' => 'Elekro',
        ],
        'Heisenberg' => [
            'Foto' => '<img src="img/WalterWhite.png"></img>',
            'Nama' => 'Walter Hartwell White Sr.',
            'Alamat' => 'Amerika Serikat',
            'NoHP' => '085209800999',
            'Jurusan' => 'Kimia',
        ],
        'SaulGoodman' => [
            'Foto' => '<img src="img/SaulGoodman.png"></img>',
            'Nama' => 'James Morgan McGill',
            'Alamat' => 'Amerika Serikat',
            'NoHP' => '081123410890',
            'Jurusan' => 'Hukum',
        ],
    ];

    foreach($tugas as $tgs){
        echo "$tgs[Foto] <br><br>";
        echo "Nama: $tgs[Nama] <br> Alamat: $tgs[Alamat] <br> No HP: $tgs[NoHP] <br> Jurusan: $tgs[Jurusan] <hr>";
    }
?>