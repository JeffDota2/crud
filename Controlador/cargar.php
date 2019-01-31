<?php
    function cargar(){
        $consulta = new DataBase();
        $filas = $consulta->consultarProductos();
        echo "<table border = 1  bordercolor=blue >
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>CATEGORIA</th>
                <th>PRECIO</th>";

        foreach($filas as $fila){
                echo"<tr>";
                echo"<td>".$fila['id']."</td>";
                echo"<td>".$fila['nombre']."</td>";
                echo"<td>".$fila['descripcion']."</td>";
                echo"<td>".$fila['categoria']."</td>";
                echo"<td>".$fila['precio']."</td>";
                echo"<td><a href='Controlador/eliminar.php?id=".$fila['id']."'>Eliminar</td>";
                echo"<td><a href='modificar.php?id=".$fila['id']."'>Modificar</td>";
                echo"</tr>";
        }
        echo "</table>";
}

        function buscar($nombre){
                $buscar = new DataBase();
                $filas = $buscar->buscarProducto($nombre);
                echo "<table border = 1  bordercolor=blue >
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>CATEGORIA</th>
                        <th>PRECIO</th>";
                
                if(isset($filas)){    
                foreach($filas as $fila){
                        echo"<tr>";
                        echo"<td>".$fila['id']."</td>";
                        echo"<td>".$fila['nombre']."</td>";
                        echo"<td>".$fila['descripcion']."</td>";
                        echo"<td>".$fila['categoria']."</td>";
                        echo"<td>".$fila['precio']."</td>";                        
                        echo"<td><a  href = 'Controlador/eliminar.php?id=".$fila['id']."'>Eliminar</td>";
                        echo"<td><a  href = 'modificar.php?id=".$fila['id']."'>Modificar</td>";
                        echo"</tr>";
                }
                echo "</table>";
        }
}
?>