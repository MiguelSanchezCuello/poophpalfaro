<?php
    class Saiyajin{
        public string $nombre;
        public int $nivel_pelea;

        public function __construct($nombre, $nivel_pelea){
            $this->nombre = $nombre;
            $this->nivel_pelea = $nivel_pelea;
        }

        public function Saludar($saludo = "Hola soy "):string{
            return $saludo.$this->nombre;
        }

        public function NivelDePelea(){
            return "$this->nombre tiene un nivel de pelea de $this->nivel_pelea";
        }
    }

