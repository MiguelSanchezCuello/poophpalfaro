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
        public string $clase = "Saiyajin";

        public function __construct($nombre, $nivel_pelea){
            $this->nombre = $nombre;
            $this->nivel_pelea = $nivel_pelea;
        }

        public function Saludar($saludo = "Hola soy "):string{
            return $saludo.$this->nombre." y soy un ".$this->MostrarClase();
        }

        public function NivelDePelea(){
            return "$this->nombre tiene un nivel de pelea de $this->nivel_pelea";
        }

        public function MostrarClase(): string
        {
            return $this->clase;
        }
    }

    class SuperSaiyajin extends Saiyajin{
        public function Transformacion(){
            return "$this->nombre se ha convertido en un ".$this->clase =
                                                                $this->nivel_pelea > 1500 ?
                                                                    $this->clase = "SuperSaiyajin" :
                                                                    $this->clase = "Saiyajin";
        }
    }


