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
    <title>Eliminar registro</title>
</head>
<body>
    <header class="eliminar">Eliminar un elemento</header>
    <?php
    if(isset($_POST["Elimina"])){
        $idb = $_POST["id"];
        $consulta = new Acciones();
        $resultado = $consulta->ConsultaId($idb);
    ?>
     <form method ="post">
         <input type="hidden" name="id"  value = "<?php echo $resultado[0]["id"] ?>">
         <label >Id</label>
         <input class= "entrada" type="text"  value = "<?php echo $resultado[0]["id"] ?>" disabled> <br>

         <label for = "nombre">Nombre</label>
         <input class= "entrada"  type="text" name = "nombre" id="nombre" value = "<?php echo $resultado[0]["nombre"] ?>" disabled><br>

         <label for = "apellido">Apellido</label>
         <input class= "entrada" type="text" name = "apellido" id="apellido" value = "<?php echo $resultado[0]["apellido"] ?>" disabled><br>

         <label for = "edad">Edad</label>
         <input class= "entrada" type="text" name = "edad" id="edad " value = "<?php echo $resultado[0]["edad"] ?>" disabled><br>

         <label for = "correo">Correo</label>
         <input class= "entrada" type="text" name = "correo" id="correo" value = "<?php echo $resultado[0]["correo"] ?>" disabled><br>

         <input class="boton-peligro boton2" type="submit" name="elimina" value="Eliminar">
     </form>

    <?php
    }elseif(isset($_POST["elimina"])){
        $id = $_POST["id"];
        $elimina = new Acciones();
        $resultado =  $elimina -> Eliminar($id);
        if($resultado > 0) header("location: http://localhost/principal.php");
        else echo "Erro al eliminar el registro";
    }else{
        header("location: http://localhost/principal.php");
    }
    ?>
    
</body>
</html>

















<!-- <?php
 require_once("autoload.php");
 $elimina = new Acciones();
 $resultado = $elimina -> eliminar(2);
 if($resultado) echo "Se elimino correctamente el registro";
 else echo "Erro al eliminar el registro";
?> -->