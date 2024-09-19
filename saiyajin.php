<?php
    class Saiyajin{
        public string $nombre = "Goku";
        public int $nivel_pelea = 1000;

        public function Saludar():string{
            return "Hola soy ".$this->nombre;
        }

        public function NivelDePelea(){
            return "$this->nombre tiene un nivel de pelea de $this->nivel_pelea";
        }
    }

    $goku = new Saiyajin();

    echo $goku->nombre."<br />";
    echo $goku->NivelDePelea()."<br />";

    $vegeta = new Saiyajin();
    var_dump($vegeta);