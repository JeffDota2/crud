<?php
function cargarProducto(){
    if(isset($_GET['id'])){
        $consulta = new DataBase();
        $id = $_GET['id'];
        $filas = $consulta->recuperarProductos($id);
        foreach($filas as $fila){
            echo'
            <form action="Controlador/modificarProducto.php" method="post">
                <table>
                    <tr>
                        <td> NOMBRE </td>
                        <td> <input type="text" name="nombre" value = "'.$fila['nombre'].'"> </td>
                    </tr>
                    
                    <tr>
                        <td> DESCRIPCION </td>
                        <td> <input type="textarea" name="descripcion" value = "'.$fila['descripcion'].'"> </td>
                    </tr>
            
                    <tr>
                        <td> CATEGORIA </td>
                        <td> <input type="text" name="categoria" value = "'.$fila['categoria'].'"> </td>
                    </tr>
            
                    <tr>
                        <td> PRECIO </td>
                        <td> <input type="text" name="precio" value = "'.$fila['precio'].'"> </td>
                    </td>

                    <tr>
                        <td> &nbsp; </td>
                        <td> <input type="hidden" name="id" value="'.$id.'"> </td>
                    </tr>
            
                    <tr>
                        <td> <input type="submit" value="Modificar"> </td>
                    </tr>
                </table>
            </form>';
        }
    }
}
?>
