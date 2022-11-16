<?php

    //enlazamos con las dependencias

    require_once("../model/conexion.php");
    require_once("../model/consultasAdmin.php");
    

    if (isset($_GET['id_pedido'])) {
        $id_pedido= $_GET['id_pedido'];
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->eliminarPedido($id_pedido);
        
    }



?>