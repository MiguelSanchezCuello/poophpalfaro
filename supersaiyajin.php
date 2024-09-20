<?php
    require_once "saiyajin.php";

    class SuperSaiyajin extends Saiyajin{



        public function NivelDePelea(){
            return $this->getNombre()." Tiene un nivel de pelea de $this->nivel_pelea";
        }

        public function Transformacion()
        {
            echo "<br/>Elevando nivel de pelea AAAAAAAAHHHH!!!!!!.<br />";
            return parent::Transformacion();
        }
    }