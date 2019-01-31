<?php 
require_once('../Modelo/Conexion.php');
require_once('../Modelo/DataBase.php');

$mensaje = null;
$consulta = new DataBase();

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$id = $_POST['id'];

if(strlen($nombre)>0 && strlen($descripcion)>0 && strlen($categoria)>0 && strlen($precio)>0 )
{
    $mensaje = $consulta -> modificarProducto("nombre", $nombre, $id);
    $mensaje = $consulta -> modificarProducto("descripcion", $descripcion, $id);
    $mensaje = $consulta -> modificarProducto("categoria", $categoria, $id);
    $mensaje = $consulta -> modificarProducto("precio", $precio, $id);
    echo $mensaje;
    echo "<div><a href= '../ver.php'> Ver Productos </a></div>";
}else{
    echo "Porfavor ingrese los datos";
}

?>