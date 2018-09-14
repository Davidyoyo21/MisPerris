<?php

class Tipo_Vivienda{
    
    private $tipo_nombre;
    
    function __construct() {
        
    }

    function getTipo_nombre() {
        return $this->tipo_nombre;
    }

    function setTipo_nombre($tipo_nombre) {
        $this->tipo_nombre = $tipo_nombre;
    }


    
}