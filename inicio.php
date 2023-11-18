<!DOCTYPE html>
<html>
<head>
    <title>Hotel Miras Del Mar</title>
</head>
<body>
    <h1>Consulta de Precios de Habitaciones</h1>
    <form action="ver_por_precio.php" method="post">
        <label for="precio">Selecciona un precio:</label>
        <select name="precio" id="precio">
            <option value="" disabled selected>Selecciona un precio</option>
        <?php
            require_once("./funciones/CargarPrecios.php"); 

            $precios = cargarPrecios();

            foreach ($precios as $precio) {
                echo "<option value='$precio'>$precio</option>";
            }
        ?>
        </select>
        <input type="submit" value="Consultar">
    </form>
    <a href="ver_todas.php">Buscar Todas las habitaciones</a>
</body>
</html>