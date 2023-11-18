<?php
function cargarPrecios() {
    $xml = simplexml_load_file('precios.xml');
    $arrElementos = array();
    foreach ($xml->precio as $precio) {
        $arrElementos[] = $precio;
    }

    return $arrElementos;
}
?>