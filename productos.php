<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abarrotes Ruben</title>
</head>
<body bgcolor="#7F9183">
    <h1>Tres tristes tigres tragaban trigo en un trigal</h1>
    <?php
        /* PARA MOSTRAR ERRORES EN MAC */
        ini_set('display_errors', 1);       
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        /* ESTABLECEMOS LA CONEXIÓN*/
        $conexion = new mysqli("localhost", "root", "", "pos") or die("Por alguna razón, no se pudo conectar al servidor.");
        echo("Algo bien pal DJ<br>");  
        /* ESTABLECEMOS LAS VARIABLES DE COMANDO*/
        $queryselect = "SELECT * FROM productos";
        $comando= mysqli_query($conexion, $queryselect);
        /* UNA TABLA A FORMA DE GRID*/
        if($comando->num_rows>0)
        {
            echo("Productos totales: ".$comando->num_rows);
            echo "<table border='1' bgcolor='#B8B8AA'><tr><th colspan='5'>INVENTARIO DE ABARROTES RUBÉN</th><tr><th>Código</th><th>Producto</th></th><th>Precio</th><th>Eliminar</th><th>Modificar</th></tr>";
            while($registro=$comando->fetch_assoc())
            {
                echo("\n\t<tr bgcolor='#B8B8AA'><td>".$registro["codigo"]."</td>\n\t<td>".$registro["nombre"]."</td>\n\t<td>". $registro["precio"]."</td> <td><img src='./img/icon_delete.png'>
                </td> <td><img src='./img/icon_update.png'></td> </tr>\n");
            }
            echo "</table>";
        }
        else{
            echo("No se encontraron registros en la DB.");
        }
  
    ?>
    <form action="insert.php" method="post">
        <fieldset style="width: 0px">
            <legend>Agregar nuevo producto</legend>
                Codigo del producto: <input name="codigo" type="text" value='012'><br>
                Nombre del producto: <input name="nombre" type="text" value='Caguama Miller'><br>
                Precio del producto: <input name="precio" type="text" value='25.00'><br>
            <input type="submit" value='Agregar producto'>       
        </fieldset>
    </form>
</body>
</html>