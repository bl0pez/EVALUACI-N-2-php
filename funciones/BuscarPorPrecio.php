<?php
require_once("./clases/conexion.php");
require_once("./clases/Habitacion.php");

function buscarPorPrecio($precio) {
    $conexion = new Conexion();
    $pdo = $conexion->getConexion();

    $query = "SELECT codigo, nombre, precio FROM habitacion WHERE precio = :precio";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':precio', $precio);
    $stmt->execute();

    $habitaciones = $stmt->fetchAll(PDO::FETCH_CLASS, 'Habitacion');

    return $habitaciones;
}
?>