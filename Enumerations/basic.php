<?php


enum Makanan_Rumah {
    case Nasi;
    case Ikan_Goreng;
    case Telur;
    case Mie;
}


// Mengambil Nama case
// echo Makanan_Rumah::Nasi->name . "\n";
// sleep(1);
// echo Makanan_Rumah::Mie->name . "\n";


// contoh Suit Cases


enum pilihan_Suit {
    case batu;
    case gunting;
    case kertas;
}

function Tanding(pilihan_Suit $Suit) {
    return "Yang Anda Gunakan Adalah " . $Suit->name;
}


$batu = pilihan_Suit::batu;
$gunting = pilihan_Suit::gunting;
$kertas = pilihan_Suit::kertas;
echo Tanding($gunting);
