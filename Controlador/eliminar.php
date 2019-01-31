<?php 
require_once('../Modelo/Conexion.php');
require_once('../Modelo/DataBase.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consultas = new DataBase();
    $mensaje = $consultas->eliminarProducto($id);

    echo $mensaje;
    echo"<div><br><a href= '../ver.php'>Regresar</a></div>";
}
?>