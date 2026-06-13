
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