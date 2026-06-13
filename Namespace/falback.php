<?php

/**
 * FALLBACK NAMESPACE DI PHP - DENGAN ANALOGI SEDERHANA
 * 
 * Analoginya:
 * - Namespace = Lemari pribadi kamu
 * - Namespace Global = Lemari bersama di rumah
 * - Fallback = Kalau barang tidak ada di lemari kamu, cari di lemari bersama
 */

//////////////////////////////////////////////////////////////////////////////
// BAGIAN 1: Tanpa Fallback (Function ADA di Namespace)
//////////////////////////////////////////////////////////////////////////////

namespace RumahAni{ // Ini lemari pribadi Ani

// Buat function SENDIRI di lemari Ani
function sapaan($nama) {
    return "Halo $nama, ini dari lemari Ani!";
}

// Panggil function sapaan()
echo "=== BAGIAN 1: Function ADA di Namespace ===\n";
echo sapaan("Budi") . "\n\n";
// Hasil: Halo Budi, ini dari lemari Ani!
// (Karena function sapaan() ADA di namespace RumahAni, jadi dipakai yang ini)
}

//////////////////////////////////////////////////////////////////////////////
// BAGIAN 2: Dengan Fallback (Function TIDAK ADA di Namespace)
//////////////////////////////////////////////////////////////////////////////

// Pindah ke namespace lain
namespace RumahBudi {} // Ini lemari pribadi Budi

// Di lemari Budi, TIDAK ADA function sapaan()
// Tapi function sapaan() ADA di namespace GLOBAL (lemari bersama)

// Pertama, buat function di namespace GLOBAL (lemari bersama)
namespace { // Ini namespace GLOBAL (tanpa nama)
    function sapaan($nama) {
        return "Halo $nama, ini dari lemari bersama!";
    }
}

// Kembali ke namespace RumahBudi
namespace RumahBudi {

echo "=== BAGIAN 2: Function TIDAK ADA di Namespace (FALLBACK) ===\n";
echo sapaan("Ani") . "\n\n";
// Hasil: Halo Ani, ini dari lemari bersama!
// (Karena function sapaan() TIDAK ADA di RumahBudi, PHP FALLBACK ke namespace GLOBAL)
}

//////////////////////////////////////////////////////////////////////////////
// BAGIAN 3: Fallback untuk Function Bawaan PHP (Seperti strlen())
//////////////////////////////////////////////////////////////////////////////

namespace RumahAni {

echo "=== BAGIAN 3: Fallback Function Bawaan PHP ===\n";
echo "Panjang kata 'PHP': " . strlen("PHP") . "\n";
// Hasil: Panjang kata 'PHP': 3
// (strlen() adalah function bawaan PHP di namespace GLOBAL)
// (Karena tidak ada strlen() di RumahAni, PHP fallback ke global)


//////////////////////////////////////////////////////////////////////////////
// RINGKASAN SINGKAT!
//////////////////////////////////////////////////////////////////////////////
echo "\n=== RINGKASAN ===\n";
echo "Fallback = 'Cari dulu di tempat sendiri, kalo tidak ada cari di tempat cadangan'\n";
echo "1. PHP cari function/constant di NAMESPACE SAAT INI\n";
echo "2. Kalo tidak ketemu, FALLBACK ke NAMESPACE GLOBAL\n";







}




































// Training




namespace rumah {
    echo beli_Di_Warung("Sabun Cuci");
}


namespace {

    function beli_Di_Warung($Barangnya) {
        return "\nAnda Membeli  : {$Barangnya}\n";
    }
}