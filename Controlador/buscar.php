<?php
    require_once('../Modelo/Conexion.php');
    require_once('../Modelo/DataBase.php');

    if(isset($_GET['nombre'])){
        $id = $_GET['nombre'];
        $buscar = new DataBase();
        $mensaje = $buscar->buscarProducto($nombre);
    
        echo $mensaje;
        echo"<div><br><a href= '../ver.php'>Regresar</a></div>";
    }
?>