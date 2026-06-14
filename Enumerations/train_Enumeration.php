<?php



enum buah_Iblis {
    case Gomu_Gomu_No_Mi;
    case Bara_Bara_No_Mi;
    case Pika_Pika_No_Mi;
    case Mera_Mera_no_Mi;
    case Hito_Hito_No_Mi;
}


function Tolong( mixed $aksi) {
    return "========== " . $aksi . " ==========\n";
}
function congrats($barang) {
    return "Telah Mendapatkan :  {$barang}";
}
function pemberianBuahIblis(buah_Iblis $buah, $namaPenerima_Bansos) {
    echo Tolong("SELAMAT KEPADA {$namaPenerima_Bansos}");

    switch ($buah) {
        case buah_Iblis::Gomu_Gomu_No_Mi:
            echo congrats($buah->name);
            break;
        case buah_Iblis::Mera_Mera_no_Mi:
            echo congrats($buah->name);
            break;
        case buah_Iblis::Hito_Hito_No_Mi:
            echo congrats($buah->name);
            break;
        case buah_Iblis::Bara_Bara_No_Mi:
            echo congrats($buah->name);
            break;
        case buah_Iblis::Pika_Pika_No_Mi:
            echo congrats($buah->name);
            break;
        default:
        echo "kamu Tidak Menulis Atau Pun Mengisi Sesuai Yang Ada";
        break;
    }



}
// pemberianBuahIblis(buah_Iblis::Gomu_Gomu_No_Mi, "MONKEY.D LUFFY");
pemberianBuahIblis(buah_Iblis::Pika_Pika_No_Mi , "Kizaru");

