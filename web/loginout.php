<?php
session_start();
//elimino la variable de sesion
unset($_SESSION["sesion"]);
header("location:login.php");


