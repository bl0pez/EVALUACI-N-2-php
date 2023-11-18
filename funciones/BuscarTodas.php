<?php
require_once("./clases/conexion.php");
require_once("./clases/Habitacion.php");

function buscarTodas() {
    $conexion = new Conexion();
    $pdo = $conexion->getConexion();

    $query = "SELECT codigo, nombre, precio FROM habitacion";
    $stmt = $pdo->query($query);

    $habitaciones = $stmt->fetchAll(PDO::FETCH_CLASS, 'Habitacion');

    return $habitaciones;
}
?>