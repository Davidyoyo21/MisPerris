<?php

include_once 'conexion.php';
include_once '../modelo/Perro.php';

class DaoPerro {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Grabar($perro) {
        try {
            $sql = "insert into perro values(@id,'@nom',@ed,'@raz',@est)";
            //el arroba antes del parametro es para que la base de datos lo reconosca como tal
            //dentro de la base de datos
            $sql = str_replace("@id", $perro->getIdperro(), $sql);
            $sql = str_replace("@nom", $perro->getNombre(), $sql);
            $sql = str_replace("@ed", $perro->getEdad(), $sql);
            $sql = str_replace("@raz", $perro->getRaza(), $sql);
            $sql = str_replace("@est", $perro->getEstatura(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Modificar($perro) {
        try {
            $sql = "update perro set idperro=@id, nombre='@nom', edad=@ed, raza='@raz', estatura=@est where idperro=@id";
            $sql = str_replace("@id", $perro->getIdperro(), $sql);
            $sql = str_replace("@nom", $perro->getNombre(), $sql);
            $sql = str_replace("@ed", $perro->getEdad(), $sql);
            $sql = str_replace("@raz", $perro->getRaza(), $sql);
            $sql = str_replace("@est", $perro->getEstatura(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    public function Listar() {
        try {
            $sql = "select * from perro";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Eliminar($idperro){
        try {
            $sql="delete from perro where idperro='$idperro'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Buscar($idperro){
        try {
            $sql="select * from perro where idperro='$idperro'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}
