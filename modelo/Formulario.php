<?php

class Formulario{
    
    private $idformulario;
    private $nombrecompleto;
    private $run;
    private $correo;
    private $fechanac;
    private $telefono;
    //pertenecen a los combobox ke son llamados desde la base de datos
    private $region;
    private $ciudad;
    private $vivienda;
    
    function __construct() {
        
    }
    
    function getIdformulario() {
        return $this->idformulario;
    }
    
    function getNombrecompleto() {
        return $this->nombrecompleto;
    }

    function getRun() {
        return $this->run;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getFechanac() {
        return $this->fechanac;
    }

    function getTelefono() {
        return $this->telefono;
    }
    
    function getRegion() {
        return $this->region;
    }
    
    function getCiudad() {
        return $this->ciudad;
    }
    
    function getVivienda() {
        return $this->vivienda;
    }
        
    function setIdformulario($idformulario) {
        $this->idformulario = $idformulario;
    }
     
    function setNombrecompleto($nombrecompleto) {
        $this->nombrecompleto = $nombrecompleto;
    }

    function setRun($run) {
        $this->run = $run;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setFechanac($fechanac) {
        $this->fechanac = $fechanac;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    
    function setRegion($region) {
        $this->region = $region;
    }
    
    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }
    
    function setVivienda($vivienda) {
        $this->vivienda = $vivienda;
    }


    
    
}