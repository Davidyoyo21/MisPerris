<?php

include_once 'conexion.php';
include_once '../modelo/Formulario.php';

class DaoFormulario {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Grabar($formulario) {
        try {
            $sql = "insert into formulario "
                    . "values(@id,'@nom','@ru','@co','@fec','@tel',@tip,@ciu,@reg)";
            $sql = str_replace("@id", $formulario->getIdformulario(), $sql);
            $sql = str_replace("@nom", $formulario->getNombrecompleto(), $sql);
            $sql = str_replace("@ru", $formulario->getRun(), $sql);
            $sql = str_replace("@co", $formulario->getCorreo(), $sql);
            $sql = str_replace("@fec", $formulario->getFechanac(), $sql);
            $sql = str_replace("@tel", $formulario->getTelefono(), $sql);
            $sql = str_replace("@tip", $formulario->getVivienda(), $sql);
            $sql = str_replace("@ciu", $formulario->getCiudad(), $sql);
            $sql = str_replace("@reg", $formulario->getRegion(), $sql);
//            echo 'sql:'.$sql;
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

//    public function Modificar($auto) {
//        try {
//            $sql = "update auto set dueno='@du',modelo='@mo',marca='@mar',ano=@an "
//                    . " where patente='@pa'";
//            $sql = str_replace("@pa", $auto->getPatente(), $sql);
//            $sql = str_replace("@du", $auto->getDueno(), $sql);
//            $sql = str_replace("@mo", $auto->getModelo(), $sql);
//            $sql = str_replace("@mar", $auto->getMarca(), $sql);
//            $sql = str_replace("@an", $auto->getAno(), $sql);
//            return $this->cone->SqlOperacion($sql);
//        } catch (Exception $exc) {
//            echo $exc->getTraceAsString();
//        }
//    }
//
    public function Listar() {
        try {
            $sql = "select * from formulario";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Eliminar($idform) {
        try {
            $sql = "delete from formulario where idformulario='$idform'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
//
//    public function Buscar($patente) {
//        try {
//            $sql = "select * from auto where patente='$patente'";
//            return $this->cone->SqlSeleccion($sql);
//        } catch (Exception $exc) {
//            echo $exc->getTraceAsString();
//        }
//    }

}
