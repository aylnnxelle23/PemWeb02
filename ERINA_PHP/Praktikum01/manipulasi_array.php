<?php

$arrayBuah = ["Jeruk","Manggis","Apel","Anggur"];

//mengurutkan
// => sort($arrayBuah);

//menghapus data akhir
// => array_pop($arrayBuah);

//menghapus semua data
// => unset($arrayBuah);
//unset 2
// => unset($arrayBuah[2]);

//menambahkan data array di akhir
// => array_push($arrayBuah,"Pala");

//menghapus data array paling awal
// => array_shift($arrayBuah);

//menambahkan data paling awal
//array_unshift($arrayBuah);

//mengubah data array
$arrayBuah[3] = "Plum";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}