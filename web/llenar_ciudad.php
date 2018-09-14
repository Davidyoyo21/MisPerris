<?php

$id_region=$_POST["id_region"];
$cone= mysqli_connect("localhost", "root", "", "misperris");
$reg= mysqli_query($cone,"select * from ciudades "."where regiones_idregiones=$id_region");

?>

<option values="0">Seleccione</option>
<?php 
while ($row = mysqli_fetch_array($reg)){
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
?>
