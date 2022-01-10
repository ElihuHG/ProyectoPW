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

    <title>Pagina principal</title>
</head>
<body>
    <header class="index">Registros</header>
    <table >
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Edad</td>
                <td>Correo</td>
                <td colspan = 2>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
             $todos = new Acciones();
             $resultado = $todos -> ConsultaTodos();
             foreach($resultado as $campo=>$valor){
                 echo "<tr> ";
                 echo "<td>".$valor["id"]."</td>";
                 echo"<td>".$valor["nombre"]."</td>";
                 echo "<td>".$valor["apellido"]."</td>";
                 echo "<td>".$valor["edad"]."</td>";
                 echo "<td>".$valor["correo"]."</td>";
                 echo "<td> <form action = 'Actualiza.php' method = 'post'><input type='hidden' name='id' value ='".$valor["id"]."'><input type='submit' class='button-index2 boton-index2' name ='Actualiza'  value='Editar'></form> </td>";
                 echo "<td> <form action = 'Elimina.php' method = 'post'><input type='hidden' name='id' value ='".$valor["id"]."'><input type='submit' class='button-index3 boton-index3'  name ='Elimina' value='Eliminar'></form> </td>";
                 echo " </tr>";
             }
            ?>
            <tr><td colspan = 7><form action = 'Insertar.php' method ='post'> <input type='submit' class="button-index boton-index1" name ='Inserta' value='Nuevo registro' > </form></td></tr>
        </tbody>

    </table>
</body>
</html>