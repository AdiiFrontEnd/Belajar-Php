<?php



interface Kemampuan_Kemampuan_manusia {
    public function Bernapas();
    public function Berpikir();
}
trait Konsumsi {
    public function Makan(string $makanan) {
        return "Makan :  {$makanan}\n";
    }
    public function Minum(string $minuman) {
        return "Minum : {$minuman}\n";
    }
}


enum AnakAnakDiSekolah: string implements Kemampuan_Kemampuan_manusia  {
    use Konsumsi;

    case ANAKPINTAR = "Adii Jier";
    case ANAKSUKI = "Afiq Suki Banget";
    case ANAKBEROTAKSENGKU = "Dede Woilah";


    public function Bernapas() {
        return "{$this->value} Bernapas";
    }
    public function Berpikir() {
        return "{$this->value} Berpikir";
    }
    public function aksi(int $pilihan, string $ObjekKomsumsi) {
        switch ($pilihan) {
            case 1 :
                return $this->value . " : " . $this->Makan($ObjekKomsumsi);
                break;
            case 2 :
                return $this->value . " : " . $this->Minum($ObjekKomsumsi);
                break;
                default:
                    return "Pilihan Tidak Ada";
        }
    }
}


$Adii = AnakAnakDiSekolah::ANAKPINTAR;
echo $Adii->aksi(1, "Mie Ayam");


echo $Adii->aksi(2, "Es boba");



?>