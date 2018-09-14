<?php

include_once '../controlador/DaoFormulario.php';
include_once '../modelo/Formulario.php';

$idform=$_POST["txtIdFormulario"];
$nombre=$_POST["txtNombreCompleto"];
$run=$_POST["txtRun"];
$correo=$_POST["txtCorreo"];
$fecha=$_POST["txtFechaNac"];
$telefono=$_POST["txtTelefono"];
$region=$_POST["cboRegion"];
$ciudad=$_POST["cboCiudad"];
$vivienda=$_POST["cboVivienda"];

$form=new Formulario();
$form->setIdformulario($idform);
$form->setNombrecompleto($nombre);
$form->setRun($run);
$form->setCorreo($correo);
$form->setFechanac($fecha);
$form->setTelefono($telefono);
$form->setRegion($region);
$form->setCiudad($ciudad);
$form->setVivienda($vivienda);

$dao=new DaoFormulario();
$filas_afectadas=$dao->Grabar($form);
if ($filas_afectadas>0) {
    echo 'Grabo';
} else {
    echo 'No Grabo';
}