<?php

enum espada: string {
    case Primera = "Coyote Stark";
    case Segunda = "Baraggan Louisenbairn";
    case Tercera = "Tier Harribel";
    case Cuarta = "Ulquiorra Cifer";
    case Quinta = "Nnoitra Gilga";
    case Sexta = "Grimmjow Jaegerjaquez";
    case Séptima = "Zommari Rureaux";
    case Octava = "Szayelaporro Granz";
    case Novena = "Aaroniero Arruruerie";
    case Décima = "Yammy Llargo";


    private function tolong(espada $siapa) {
        return "\nAnda Memanggil Espada Nomor : {$siapa->name} Dengan Nama : {$siapa->value}\n";
    }

    public function Panggil() {
        return $this->tolong($this);
    }
}

$stark = espada::Primera;
echo $stark->Panggil();

?>