<?php
 require_once("autoload.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Nuevo registro</title>
</head>
<body>
     <header>
         Instertar un nuevo registro 
     </header>

    <?php
    if(isset($_POST["Inserta"])){
    ?>
     <form method ="post">
         <label for ="nombre">Nombre</label>
         <input class= "entrada" type="text" name = "nombre" id="nombre" required>
         <br>

         <label for= "apellido">Apellido</label>
         <input class= "entrada" type="text" name ="apellido" id="apellido" required>
         <br>

         <label for = "edad">Edad</label>
         <input class= "entrada" type="text" name = "edad" id="edad" required> 
         <br>

         <label for = "correo">Correo</label >
         <input  class= "entrada" type="text" name = "correo" id="correo" required>
         <br>

         <input class="button boton1" type="submit" name="guardar" value="guardar" required>
     </form>

    <?php
    }elseif(isset($_POST["guardar"])){
        $nombre =$_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
        $inserta = new Acciones();
        $resultado = $inserta -> Insertar($nombre,$apellido,$edad,$correo);
        if($resultado) header("location: http://localhost/principal.php");
        else echo "Erro al insertar el registro";
    }else{
        header("location: http://localhost/principal.php");
    }
    ?>
    
</body>
</html>
