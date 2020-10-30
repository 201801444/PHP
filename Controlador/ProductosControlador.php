<?php
    require_once("Model/ProductosModelo.php");

    $productos = new Productos_modelo();

    $matrizProductos = $productos->getProductos();  //obtenemos todos los registros de la BBDD

    require_once("Vista/ProductosVista.php");
?>