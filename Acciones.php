<?php

require_once("autoload.php");

class Acciones extends Conexion{
    private $conexion;
    
    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this-> conexion ->AbrirConexion();
    }

    public function Insertar(String $nombre, String $apellido, int $edad, String $correo){

        $sql = "insert into datos(nombre, apellido, edad, correo) values (:nombre, :apellido, :edad, :correo)";
        $consulta = $this->conexion->prepare($sql);
        $consulta->BindValue(":nombre",$nombre);
        $consulta->BindValue(":apellido",$apellido);
        $consulta->BindValue(":edad",$edad);
        $consulta->BindValue(":correo",$correo);
        $resultado = $consulta->execute();
        return $resultado;
    }

    public function Actualizar(int $id,String $nombre, String $apellido, int $edad, String $correo){

        $sql = "update datos set nombre = :nombre,apellido = :apellido , edad = :edad, correo = :correo where id = :id";
        $consulta = $this->conexion->prepare($sql);
        $consulta->BindValue(":nombre",$nombre);
        $consulta->BindValue(":apellido",$apellido);
        $consulta->BindValue(":edad",$edad);
        $consulta->BindValue(":correo",$correo);
        $consulta->BindValue(":id",$id);
        $consulta->execute();
        $resultado = $consulta-> rowCount();
        return $resultado;
    }

    public function Eliminar(int $id){

        $sql = "delete from datos where id = :id";
        $consulta = $this->conexion->prepare($sql);
        $consulta->BindValue(":id",$id);
        $consulta->execute();
        $resultado = $consulta-> rowCount();
        return $resultado;
    }

    public function ConsultaTodos(){

        $sql = "select * from datos";
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta-> fetchAll(PDO::FETCH_ASSOC);
        return $resultado;

    }

    public function ConsultaId(int $id){
        $sql = "select * from datos where id = :id";
        $consulta = $this->conexion->prepare($sql);
        $consulta->BindValue(":id",$id);
        $consulta->execute();
        $resultado = $consulta->  fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }


}


?>