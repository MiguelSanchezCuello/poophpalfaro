<?php
    class Saiyajin{
        # Esta clase se puede simplificar definiendo los atributos dentro de los parametros del constructor
        /*
         *  Por ejemplo
         *  public function __construct(public string $nombre, public int $nivel_pelea){ }
         *  se borra dentro del constructor y los atributos definidos previamente y funciona igual.
         *  PHP 8 en adelante, se encarga de mapear correctamente los atributos.
         */
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

