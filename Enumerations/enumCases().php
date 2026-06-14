<?php

// Buat enum simple
enum Warna {
    case Merah;
    case Biru;
    case Hijau;
}

// Langkah 1: Panggil cases() untuk dapatkan semua case
$semuaWarna = Warna::cases();
// Dia Mengubah Semua case yang ada Pada Enum menjadi Array = Warna = ["Merah","Biru","Hijau"]

// Langkah 2: Lihat isi array yang dikembalikan
echo "Isi dari Warna::cases(): ";
var_dump($semuaWarna);

echo "\n\n";

// Langkah 3: Loop array untuk akses setiap case
echo "Daftar Warna:\n";
foreach ($semuaWarna as $warna) {
    echo "- " . $warna->name . "\n";
}




enum Makananwarung: string {
    case MakananPokok = "Nasi";
    case Lauk1 = "Daun Singkong";
    case Lauk2 = "Ayam Goreng";
    case Lauk3 = "Lele Goreng";
    case Lauk4 = "Sambal Goreng";
    case Lauk5 = "Sambel";
}


// Cara 1: Loop biasa (tidak array asosiatif)
echo "=== Cara 1: Loop Biasa ===\n";
$semuaMakanan = Makananwarung::cases();
foreach ($semuaMakanan as $makanan) {
    echo "Menu : {$makanan->name}\nMakanan : {$makanan->value}\n\n";
}
?>