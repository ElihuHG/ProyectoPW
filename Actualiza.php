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
    <title>Editar registro</title>
</head>
<body>
    <header>Actualizar un elemento</header>
    <?php
    if(isset($_POST["Actualiza"])){
        $idb = $_POST["id"];
        $actualiza = new Acciones();
        $resultado = $actualiza->ConsultaId($idb);
    ?>
     <form method ="post">
         <input type="hidden" name="id"  value = "<?php echo $resultado[0]["id"] ?>">
         <label >Id</label>
         <input class= "entrada" type="text"  value = "<?php echo $resultado[0]["id"] ?>" disabled> <br>

         <label for = "nombre">Nombre</label>
         <input class= "entrada" type="text" name = "nombre" id="nombre" value = "<?php echo $resultado[0]["nombre"] ?>"><br>

         <label for = "apellido">Apellido</label>
         <input class= "entrada" type="text" name = "apellido" id="apellido" value = "<?php echo $resultado[0]["apellido"] ?>"><br>

         <label for = "edad">Edad</label>
         <input class= "entrada" type="text" name = "edad" id="edad " value = "<?php echo $resultado[0]["edad"] ?>"><br>

         <label for = "correo">Correo</label>
         <input class= "entrada" type="text" name = "correo" id="correo" value = "<?php echo $resultado[0]["correo"] ?>"><br>

         <input class="button boton1" type="submit" name="guardar" value="guardar">
     </form>

    <?php
    }elseif(isset($_POST["guardar"])){
        $id = $_POST["id"];
        $nombre =$_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
        $actualiza = new Acciones();
        $resultado =  $actualiza -> Actualizar($id,$nombre,$apellido,$edad,$correo);
        if($resultado > 0) header("location: http://localhost/principal.php");
        else echo "Erro al actualizar el registro";
    }else{
        header("location: http://localhost/principal.php");
    }
    ?>
    
</body>
</html>






