<?php


// Jadi contohnya Disini Gw Adalah Aizen



enum Numeros : string {
    case ONCE = "Shawlong Koufang";
    case DOCE = "Grimmjow Jaegerjaquez";
    case TRECE = "Edrad Liones";
    case CATORCE = "Nakeem Grindina";
    case QUINCE = "Yylfordt Granz";
    case DYESISEIS = "Di Roy Rinker";

    private function Helper( Numeros $siapa) {
        return "\n========== ALERT ==========\nAnda Aizen Telah Memanggil NUMEROS {$siapa->name} Dengan Nama {$siapa->value}\n";
    }
    public function Panggil() {
        return $this->Helper($this);
    }
} 

// Contoh Penggunaan
echo Numeros::DOCE->Panggil();
echo Numeros::ONCE->Panggil();
?>