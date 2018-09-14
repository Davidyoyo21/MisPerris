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
        
        <form method="POST" action="grabar_perro.php">
            <div class="form-group col-md-4">
            
                <thead>
                    <tr>
                        <td><font face="Times New Roman, Times, serif;" size="6" >Formulario de Ingreso de Perros</font></td>                        
                    </tr>
                    <br>
                    <br>
                    
                </thead>
                <tbody>
                    <tr>
                        <td>ID Perro:</td>
                        <td>
                            <input placeholder="ID" class="form-control" type="number" name="txtIdperro" value="" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input placeholder="Nombre" class="form-control" type="text" name="txtNombre" value="" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td>
                            <input placeholder="Edad" class="form-control" type="number" name="txtEdad" value="" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input placeholder="Raza" class="form-control" type="text" name="txtRaza" value="" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Estatura:</td>
                        <td>
                            <input placeholder="Estatura" class="form-control" type="number" name="txtEstatura" value="" required />
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <input class="btn btn-success" type="submit" value="Enviar" />
                            <input class="btn btn-info" type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            
            </div>
        </form>
        </div>
    </body>
</html>
