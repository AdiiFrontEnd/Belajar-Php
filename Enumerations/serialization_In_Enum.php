<?php

// Enum sederhana
enum Warna: string
{
    case Merah = 'merah';
    case Biru = 'biru';
}

// 1. Buat object enum
$warnaFavorit = Warna::Merah;

// 2. Serialisasi (ubah ke string)
$serialized = serialize($warnaFavorit);
echo "Hasil serialisasi: $serialized\n";

// 3. Deserialisasi (kembalikan ke object enum)
$deserialized = unserialize($serialized);
echo "Hasil deserialisasi: " . $deserialized->name . " (" . $deserialized->value . ")\n";

// Cek apakah sama dengan asli
if ($deserialized === Warna::Merah) {
    echo "Berhasil! Enumnya sama.\n";
}

























// Train Dulu Di Sini Rek


// Serialized Iu bisa Dibayangkan kayak Lego Gitu wok
enum Mainan: string {
    case Mobil = "Mobil";
    case Motor = "Motor";
}

$MainanYangPalingSeringDimainkan = Mainan::Mobil;

$serialisasi = serialize($MainanYangPalingSeringDimainkan); // anggap Aja Kayak Magic Kayk Shir Di Isekai
// pengisianPaket
echo "\nHasil Serialisasi Pada enumerasi Mainan Adalah :  {$serialisasi}\n";



//Pembongkaran Paket
$unserialisasi = unserialize($serialisasi);
echo "\nHasil Unserialisasi Pada enumerasi Mainan Adalah :  {$unserialisasi->value}\n";





