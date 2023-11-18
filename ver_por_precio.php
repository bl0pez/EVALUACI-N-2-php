<!DOCTYPE html>
<html>
<head>
    <title>Hotel Miras Del Mar - Habitaciones por Precio</title>
</head>
<body>
    <h1>Habitaciones por Precio</h1>
    <?php
    if (isset($_POST['precio'])) {
        $precioSeleccionado = $_POST['precio'];
        
        require_once("funciones/BuscarPorPrecio.php");
        $habitaciones = buscarPorPrecio($precioSeleccionado);
        
        if (count($habitaciones) > 0) { 
            foreach ($habitaciones as $habitacion) {
                echo "Código: {$habitacion->codigo}<br>";
                echo "Nombre: {$habitacion->nombre}<br>";
                echo "Precio: {$habitacion->precio}<br>";
            }

            echo "<br><a href='inicio.php'>Volver</a>";

        } else {
            echo "No se encontraron habitaciones con el precio seleccionado ($precioSeleccionado).";
        }
    } else {
        echo "No se ha seleccionado un precio válido.";
    }
    ?>
</body>
</html>