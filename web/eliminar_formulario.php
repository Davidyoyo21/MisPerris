<?php

include_once '../controlador/DaoFormulario.php';
$dao=new DaoFormulario();
$idform=$_GET["idformulario"];
$resp=$dao->Eliminar($idform);
//redireccionar
header("location:listar_formulario.php");



