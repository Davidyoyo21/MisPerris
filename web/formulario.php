<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<!--            <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">-->
    </head>
    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
               $("#cboRegion").change(function(){
                   var id_region=$("#cboRegion").val();
                 alert('cambio')+id_region;
                 $.ajax({
                     url:"llenar_ciudad.php",
                     type:'POST',
                     data: {id_region:id_region},
                     success: function(data){
                         $("#cboCiudad").html(data);
                     }
                 });
               });
            });
        </script>
        <?php
        $cone= mysqli_connect("localhost","root","","misperris");
        $cone->set_charset('utf8');
        $viv= mysqli_query($cone, "select * from regiones");
        $reg= mysqli_query($cone, "select * from tipo_vivienda");
        ?>
            <div align="center">
                <?php include_once './menu_contacto.php'; ?>
            <form method="POST" action="grabar_formulario.php">
                <div class="form-group col-md-4">
                    <table>
                        <thead>
                            <tr>
                                <td><font face="Times New Roman, Times, ;" size="6" >Formulario de Ingreso de Postulantes</font></td>                        
                            </tr>
                        <br>
                        <br>

                        </thead>
                        <tr>
                            <td>ID Formulario:</td>
                            <td>
                                <input placeholder="ID" class="form-control" type="number" name="txtIdFormulario" value="" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre Completo:</td>
                            <td>
                                <input placeholder="Nombre" class="form-control" type="text" name="txtNombreCompleto" value="" required/>
                            </td>
                        </tr>
                        <tr>

                            <td>RUN:</td>
                            <td>
                                <input placeholder="Run" class="form-control" type="text" name="txtRun" value="" required/>
                            </td>

                        </tr>
                        <tr>

                            <td>Correo Electronico:</td>
                            <td>
                                <input placeholder="Email" class="form-control" type="text" name="txtCorreo" value="" required/>
                            </td>

                        </tr>
                        <tr>

                            <td>Fecha Nacimiento:</td>
                            <td>
                                <input placeholder="Fecha nacimietno" class="form-control" type="date" max="2001-01-01" 
                                       name="txtFechaNac" value="" required/>
                            </td>

                        </tr>
                        <tr>

                            <td>Telefono:</td>
                            <td>
                                <input placeholder="Telefono" class="form-control" type="text"  
                                       name="txtTelefono" value="" required/>
                            </td>

                        </tr>
                        <tr>
                            <td>Region:</td>
                            <td>
                                <select name="cboRegion" class="form-control" id="cboRegion" required> 
                                    <?php
                                    while ($row = mysqli_fetch_array($viv)) {
                                        echo '<option value="' . $row[0] . '"">' . $row[1] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Ciudades:</td>
                            <td><select name="cboCiudad" class="form-control" id="cboCiudad" required></select></td>

                        </tr>
                        <tr>
                            <td>Tipo vivienda:</td>
                            <td>
                                <select name="cboVivienda" class="form-control" id="cboVivienda" required>
                                    <?php
                                    while ($row = mysqli_fetch_array($reg)) {
                                        echo '<option value="' . $row[0] . '"">' . $row[1] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="btn btn-success" type="submit" value="Enviar" />
                                <input class="btn btn-info" type="reset" value="Limpiar" />
                            </td>                        
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>
