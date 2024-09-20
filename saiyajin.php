<?php
    class Saiyajin{
        # Esta clase se puede simplificar definiendo los atributos dentro de los parametros del constructor
        /*
         *  Por ejemplo
         *  public function __construct(public string $nombre, public int $nivel_pelea){ }
         *  se borra dentro del constructor y los atributos definidos previamente y funciona igual.
         *  PHP 8 en adelante, se encarga de mapear correctamente los atributos.
         */
        private string $nombre;
        public int $nivel_pelea;
        public string $clase = "Saiyajin";

        public function getNombre(): string{
            return $this->nombre;
        }

        public function setNombre(string $nombre): void{
            $this->nombre = $nombre;
        }

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

        public function Transformacion(){
            if($this->nivel_pelea > 1500){
                $this->nivel_pelea *= 2;
                $this->clase = "SuperSaiyajin";

                return "$this->nombre se ha transformado en un $this->clase";
            }

            return "$this->nombre aun no se ha transformado";

        }
    }




