<?php

include_once '../controlador/DaoPerro.php';
$dao=new DaoPerro();
$idperro=$_GET["idperro"];
$resp=$dao->Eliminar($idperro);
//header lo que hace es redireccionar
header("location:listar.php");

