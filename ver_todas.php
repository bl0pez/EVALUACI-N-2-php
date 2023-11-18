<!DOCTYPE html>
<html>
<head>
    <title>Hotel Miras Del Mar - Todas las Habitaciones</title>
</head>
<body>
    <h1>Todas las Habitaciones</h1>
    <?php
    require_once("funciones/BuscarTodas.php");
    $habitaciones = buscarTodas();
    
    if (count($habitaciones) > 0) {
        foreach ($habitaciones as $habitacion) {
            echo "Código: {$habitacion->codigo}<br>";
            echo "Nombre: {$habitacion->nombre}<br>";
            echo "Precio: {$habitacion->precio}<br>";
            echo "<br>";
        }
        
        echo "<a href='inicio.php'>Volver</a>";
    } else {
        echo "No se encontraron habitaciones.";
    }
    ?>
</body>
</html>