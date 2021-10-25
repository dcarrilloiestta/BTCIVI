<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
         input{
    padding: 11px;
    margin: 10px;
   
    }
    </style>
    
</head>
<body>
    <div class="contenedor">
    <form action="index.php"  method="GET">
    <input type="text" name="usuario" ><br>
    <input type="password" name="contraseña" placeholder="contraseña"><br>
    <input type="submit" value="Iniciar sesion" name="iniciar">

    </form>
    </div>


   
<?php


        if(isset($_GET['iniciar'])){
            $ide = $_GET['usuario'];
            $cont = $_GET['contraseña'];

            if ($ide=="angel" && $cont=="1234" ) {
               // echo" se inicio coretamente";
                ?> <div class="alert alert-success" role="alert">
                Se inicio con exito su sesion 
                </div><?php
            }
            else{
                //echo" fallo";
                ?> <div class="alert alert-warning" role="alert">
                 Escriba bien su Usuario y contraseña
                </div><?php
            }
        }

   
       /* <div class="alert alert-success" role="alert">
        This is a success alert—check it out!
        </div>
        <div class="alert alert-danger" role="alert">
        This is a danger alert—check it out!
        </div>
        <div class="alert alert-warning" role="alert">
         This is a warning alert—check it out!
        </div>
        <div class="alert alert-info" role="alert">
             This is a info alert—check it out!
        </div>
        <div class="alert alert-light" role="alert">
         This is a light alert—check it out!
        </div>
        <div class="alert alert-dark" role="alert">
        This is a dark alert—check it out!
        </div>*/
   
   



?>
</body>
</html>

