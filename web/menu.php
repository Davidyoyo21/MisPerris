<?php
session_start();
if(!isset($_SESSION["sesion"])){
    header("location:login.php");
}else{
    $usuario=$_SESSION["sesion"];
}
?>
<link rel="stylesheet" href="css/style.css">
<header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <div class="contenedor">
        <div id="marca">
            <img src="img/logo.png" alt="">
        </div>
        <nav >
            
            <ul>
                <a class="actual" href="../web/home.php">inicio</a>
                <a class="" href="">quienes somos</a>
                <a class="" href="">servicios</a>
                <a class="" href="../web/menu_contacto.php">contáctanos</a>
                <a class="" href="loginout.php">cerrar sesion</a>
            </ul>
        </nav>
    </div>
</header>
<br>
<section>
    <div align="center">
        <nav>
            <ul style="list-style-type:none">
            <li><a href="Ingresar.php">Agregar Perro</a></li>
            <li><a href="Listar.php">Listar Perros</a></li>        
            </ul>   
        </nav>
    </div>
</section>
<section>
    <!DOCTYPE html>
    <html>
        <head>
            <style>
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #33E3BA;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #E0E0E0;
            }
            </style>
        </head>
        <body>
        </body>
    </html> 
</section>
<br>
<br>
<br>