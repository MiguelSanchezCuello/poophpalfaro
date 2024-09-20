<?php
    require_once "saiyajin.php";

    class SuperSaiyajin extends Saiyajin{

        /*
         * La propiedad estatica se puede redefinir en la clase que la hereda,
         * hay que recordar que para acceder a ella en la clse que la heredo tenemos que aplicar polimorfismo
         * reescribimos el metodo MostrarColorCabello y aunque tiene el mismo codigo que su clase padre, al escribirlo
         * en la clase hija este forza el llamado a la variable $cabello de la clase hija (self) anteiormente el self
         * hacia un llamado al padre.
         */
        public  static string $cabello = "Amarillo";

        public function NivelDePelea(){
            return $this->getNombre()." Tiene un nivel de pelea de $this->nivel_pelea";
        }

        public function Transformacion()
        {
            echo "<br/>Elevando nivel de pelea AAAAAAAAHHHH!!!!!!.<br />";
            return parent::Transformacion();
        }

        public static function MostrarColorCabello(){
            return "Tengo el cabello de color ".self::$cabello;
        }
    }