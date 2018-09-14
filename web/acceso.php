<?php 
session_start();//iniciar una sesion
$usuario=$_POST["txtUsuario"];
$pass=$_POST["txtPass"];

$cone= mysqli_connect("localhost", "root", "", "misperris");
$sql="select * from login where usuario='$usuario' and password='$pass'";
$reg= mysqli_query($cone, $sql);
while ($row= mysqli_fetch_array($reg)){
    $_SESSION["sesion"]=$usuario;
    echo 'OK';
    return;
}
echo 'No Existe Usuario o Contraseña';


