
## Dokumentasi My Gwehh
# ``` DOKUMENTASI PEMELAJARAN PHP ```
 Ya Masih Belajar CIk
 lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas.



### Kesimpulan Fallback Namespace

**Fallback Namespace** adalah mekanisme di PHP dimana:
1. Kita berada di dalam sebuah namespace (misal: `namespace MyApp;`)
2. Kita memanggil **function** atau **constant** yang **TIDAK ADA** di namespace tersebut
3. PHP **tidak langsung error**, tapi akan **mencari ke namespace GLOBAL** (tempatnya function bawaan PHP seperti `strlen()`, `date()`, dll)

**Catatan Penting:**
- Fallback hanya berlaku untuk **function** dan **constant**
- Fallback **TIDAK berlaku** untuk kelas (class)

**Analogi Mudah:**
- Namespace = Lemari pribadi kamu
- Namespace Global = Lemari bersama di rumah
- Fallback = Kalau barang tidak ada di lemari kamu, cari di lemari bersama





### Btw Ini Bagian Enum


Meskipun Enum dibangun di atas kelas dan objek, Enum tidak mendukung semua fungsi yang terkait dengan objek. Secara khusus, kasus Enum dilarang memiliki status.

- Konstruktor dan Destruktor dilarang.
- Pewarisan tidak didukung. Enum tidak dapat memperluas atau diperluas.
- Properti statis atau objek tidak diperbolehkan.
- Pengkloningan sebuah case Enum tidak didukung, karena case harus berupa instance singleton.
 - Metode magis , kecuali yang tercantum di bawah ini, tidak diperbolehkan.
- Enum harus selalu dideklarasikan sebelum digunakan.
- Fungsionalitas objek berikut tersedia, dan berperilaku sama seperti pada objek lainnya:

- Metode publik, privat, dan terlindungi.
- Metode statis publik, privat, dan terlindungi.
- Konstanta publik, privat, dan terlindungi.
- Enum dapat mengimplementasikan sejumlah antarmuka.
- Enum dan case dapat memiliki atribut yang melekat padanya. - TARGET_CLASSFilter target mencakup Enum itu sendiri. - TARGET_CLASS_CONSTFilter target mencakup Case Enum.
- Metode ajaib __call , __callStatic , dan __invoke
__CLASS__dan __FUNCTION__konstanta berperilaku seperti biasa
- Konstanta ::classajaib pada tipe Enum dievaluasi menjadi nama tipe termasuk namespace apa pun, persis sama seperti pada objek. ::class Konstanta ajaib pada instance Case juga dievaluasi menjadi tipe Enum, karena merupakan instance dari tipe tersebut.

Selain itu, kasus enum tidak dapat diinstansiasi secara langsung dengan new, maupun dengan ReflectionClass::newInstanceWithoutConstructor() dalam refleksi. Keduanya akan menghasilkan kesalahan.

```<?php

$clovers = new Suit();
// Error: Cannot instantiate enum Suit

$horseshoes = (new ReflectionClass(Suit::class))->newInstanceWithoutConstructor()
// Error: Cannot instantiate enum Suit ```


### Serialisasi di Enum

Enum di PHP secara **native mendukung serialisasi dan deserialisasi** sejak PHP 8.1.

#### Contoh Serialisasi:
```php
enum Warna: string
{
    case Merah = 'merah';
    case Biru = 'biru';
}

$warnaFavorit = Warna::Merah;
$serialized = serialize($warnaFavorit);
echo $serialized; // Hasil serialisasi
```

#### Contoh Deserialisasi:
```php
$deserialized = unserialize($serialized);
echo $deserialized->name;  // Output: Merah
echo $deserialized->value; // Output: merah

// Cek apakah sama dengan asli
var_dump($deserialized === Warna::Merah); // bool(true)
```

Catatan:
- Hasil serialisasi menyimpan nama enum dan nama case
- Backed Enum juga bisa diakses via nilai backingnya dengan `from()` atau `tryFrom()`


### Mengapa Enum Tidak Bisa Di-Extend?

Alasan utama enum tidak mendukung pewarisan (inheritance):

1. **Fixed Set of Values**: Enum adalah kumpulan nilai yang **tetap dan terbatas**. Kalau bisa di-extend, set nilainya bisa berubah-ubah yang melanggar tujuan enum.
2. **Type Safety**: Enum dirancang untuk keamanan tipe. Kalau bisa di-extend, type checking jadi tidak konsisten.
3. **Desain PHP**: Enum di PHP memang didesain **tidak mendukung inheritance**.

#### Cara Alternatif (Jika Butuh Perilaku yang Sama):
Gunakan **interface** dan **trait**!
```php
interface WarnaInterface
{
    public function getNama();
}

trait WarnaTrait
{
    public function getNama()
    {
        return $this->name;
    }
}

enum WarnaLengkap: string implements WarnaInterface
{
    use WarnaTrait;
    case Merah = 'merah';
    case Biru = 'biru';
    case Hijau = 'hijau';
}

$warna = WarnaLengkap::Hijau;
echo $warna->getNama(); // Output: Hijau
```