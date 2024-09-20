<?php
    require_once "saiyajin.php";

    class SuperSaiyajin extends Saiyajin{
        public function Transformacion(){
            return "$this->nombre se ha convertido en un ".$this->clase =
                    $this->nivel_pelea > 1500 ?
                        $this->clase = "SuperSaiyajin" :
                        $this->clase = "Saiyajin";
        }
    }