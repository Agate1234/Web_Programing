<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];
// membuat array multidimensi menu

// membuat fungsi tampilkan menu dengan parameter array menu
function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    // membuat unordered list
    foreach ($menu as $key => $item) { // perulangan rekursif 
        echo "<li>{$item['nama']}</li>";
        // mencetak list item dengan indeks nama
        if(isset($item['subMenu'])){ // untuk baris ini saya menggunakan isset, jika array item memiliki indeks subMenu maka akan melakukan perulangan rekursif
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
// memanggil fungsi
?>