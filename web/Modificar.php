<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div align='center'>
            <?php include_once 'menu.php'; ?>
            <?php
            include_once '../controlador/DaoPerro.php';
            $dao = new DaoPerro();
            $idperro = $_GET["idperro"];
            $reg = $dao->Buscar($idperro);
            $fila = mysqli_fetch_row($reg);
            ?>
            <div>
                <form method="POST" action="modificar_perro.php">
                    <div class="form-group col-md-4">
                        <thead>
                            <tr>
                        <font face="Times New Roman, Times, serif;" size="6" >Formulario de Modificacion de Perros</font>
                        </tr>                          
                        <br>
                        <br>
                        <br>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID Perro:</td>
                                <td>
                                    <input class="form-control" type="text" name="txtIdperro" value="<?php echo $fila[0] ?>"  /> 
                                </td>
                            </tr>
                            <tr>
                                <td>Nombre:</td>
                                <td>
                                    <input class="form-control" type="text" name="txtNombre" value="<?php echo $fila[1] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td>
                                    <input class="form-control" type="text" name="txtEdad" value="<?php echo $fila[2] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Raza:</td>
                                <td>
                                    <input class="form-control" type="text" name="txtRaza" value="<?php echo $fila[3] ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Estatura:</td>
                                <td>
                                    <input class="form-control" type="text" name="txtEstatura" value="<?php echo $fila[4] ?>" />
                                </td>
                            </tr>
                            <tr>
                        <br>
                        <td>
                            <input class="btn btn-success" type="submit" value="Enviar" />
                        </td>                        
                        </tr>
                        </tbody>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
