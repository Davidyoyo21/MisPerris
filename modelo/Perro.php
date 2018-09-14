<?php

class Perro {
    //estos son mis atributos
    private $idperro;
    private $nombre;
    private $edad;
    private $raza;
    private $estatura;
    
    function __construct() {
        
    }
    
    function getIdperro() {
        return $this->idperro;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getRaza() {
        return $this->raza;
    }

    function getEstatura() {
        return $this->estatura;
    }
    
    function setIdperro($idperro) {
        $this->idperro = $idperro;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setEstatura($estatura) {
        $this->estatura = $estatura;
    }



    
}
