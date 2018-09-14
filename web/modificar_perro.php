<?php

include_once '../controlador/DaoPerro.php';
include_once '../modelo/Perro.php';

$idperro=$_POST["txtIdperro"];
$nombre=$_POST["txtNombre"];
$edad=$_POST["txtEdad"];
$raza=$_POST["txtRaza"];
$estatura=$_POST["txtEstatura"];

$perro=new Perro();
$perro->setIdperro($idperro);
$perro->setNombre($nombre);
$perro->setEdad($edad);
$perro->setRaza($raza);
$perro->setEstatura($estatura);

$dao=new DaoPerro();
$filas_afectadas=$dao->Modificar($perro);
if ($filas_afectadas>0) {
    echo header("location:Listar.php");
} else {
    echo 'No Modifico';
}