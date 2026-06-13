<?php

/**
 * 🔍 ALUR LANGKAH DEMI LANGKAH: Cara PHP "Membaca" Nama
 * 
 * Kita akan lihat secara detail apa yang dilakukan PHP ketika menemukan sebuah nama.
 */

// Langkah 1: Definisikan namespace dan classnya
namespace TokoOnline {
    class Produk {
        public function info() {
            echo "📦 Ini Produk Toko Online!\n";
        }
    }
    
    function cekStok() {
        echo "✅ Stok tersedia!\n";
    }
}

namespace TokoOnline\Admin {
    class Produk {
        public function info() {
            echo "🛠️ Ini Produk di Panel Admin!\n";
        }
    }
}

// --- Sekarang kita masuk ke Global Namespace (tanpa nama) ---
namespace {
    echo "===== ALUR 1: Fully Qualified Name (\TokoOnline\Produk) =====\n";
    
    // PHP melihat: new \TokoOnline\Produk();
    // Langkah A: Ada \ di awal? → YES, ini FQN!
    // Langkah B: Langsung cari namespace "TokoOnline" di root
    // Langkah C: Di dalam "TokoOnline", cari class "Produk"
    // Hasil: Ketemu! ✅
    $produk1 = new \TokoOnline\Produk();
    $produk1->info(); // Output: 📦 Ini Produk Toko Online!
    
    echo "\n===== ALUR 2: Di dalam Namespace TokoOnline =====\n";
}

namespace TokoOnline {
    echo "Kita sekarang berada di namespace: " . __NAMESPACE__ . "\n";
    
    // PHP melihat: new Produk();
    // Langkah A: Ada \ di awal? → NO (Unqualified Name)
    // Langkah B: Cek "Kita sedang di namespace apa?" → TokoOnline
    // Langkah C: Cari class "Produk" di dalam namespace "TokoOnline"
    // Hasil: Ketemu! ✅
    $produkLokal = new Produk();
    $produkLokal->info(); // Output: 📦 Ini Produk Toko Online!
    
    echo "\n---\n";
    
    // PHP melihat: new Admin\Produk();
    // Langkah A: Ada \ di awal? → NO (Qualified Name, ada prefix "Admin")
    // Langkah B: Cek "Kita sedang di namespace apa?" → TokoOnline
    // Langkah C: Gabungkan! "TokoOnline" + "Admin" → "TokoOnline\Admin"
    // Langkah D: Cari class "Produk" di "TokoOnline\Admin"
    // Hasil: Ketemu! ✅
    $produkAdmin = new Admin\Produk();
    $produkAdmin->info(); // Output: 🛠️ Ini Produk di Panel Admin!
    
    echo "\n---\n";
    
    // PHP melihat: cekStok();
    // Langkah A: Unqualified Name
    // Langkah B: Cari function "cekStok" di "TokoOnline"
    // Hasil: Ketemu! ✅
    cekStok(); // Output: ✅ Stok tersedia!
}

namespace {
    echo "\n===== RANGKUMAN ATURAN =====\n";
    echo "1. \Nama\Lengkap → FQN: Langsung ke alamat itu\n";
    echo "2. Nama\Lengkap → Qualified: Tambahin namespace sekarang di depan\n";
    echo "3. Nama → Unqualified: Cari di namespace sekarang\n";
}


