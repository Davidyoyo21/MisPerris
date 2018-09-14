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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../web/css/style.css">
    </head>
    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function (event){
                $("#btnLogin").click(function(){
                    $.ajax({
                        url:"acceso.php",
                        type:'POST',
                        data:$("#formulario").serialize(),
                        success: function(data){
                            if(data=="OK"){
                                window.location="home.php";
                            }else{
                                alert(data);
                            }
                        }
                    });
                });
            });
        </script>
        <div align="center" class="login-page">
            <div class="form">
                <form id="formulario" method="post">
                    <table>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="text" id="txtUsuario" minlength="2" name="txtUsuario"
                                       required="true" placeholder="username"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="password" id="txtPass" minlength="2" name="txtPass" 
                                       required="true" placeholder="password"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="btn btn-dark" type="button" value="LOGIN" id="btnLogin"/>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
