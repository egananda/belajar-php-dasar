<?php


// array
$hewan = ['Kucing', 'Anjing', 'Burung', 'Koala'];

var_dump($hewan);

// menambahkan data array 
$hewan[] = "Kecoa";


// menjumlahkan array 
var_dump(count($hewan));


// array multi dimensi 
$barang = [
    ['Remote', 'Kursi', 'Meja'],
    ['Tv', 'Kipas', 'Kasur'],
    ['Kabel', 'Buku', 'Senter']
];


$data = [
    "DataPeserta" => [
        "nama" => "EGA",
        "umur" => "18 Tahun",
        "JK"   => "Laki- Laki"
    ],

    "Addres" => [
        "alamat" => "Bandar Lampung"
    ]
];


print_r($data);

unset($barang[1]);

print_r($barang);

die;
// associative array 
$daerah = [
    "Sumatera1" => "Aceh",
    "Sumatera2" => "Medan",
    "Sumatera3" => "Padang",
    "Sumatera4" => "Palembang",
    "Sumatera5" => "Lampung"
];


var_dump($daerah);
print_r($daerah);
