<?php

    function cargarPedidos(){

        $objetoConsultas = new consultasAdmin();
        $arreglo = $objetoConsultas->mostrarPedidos();

        if (!isset($arreglo)) {
            echo '<h2>NO HAY PEDIDOS REGISTRADOS EN EL SISTEMA</h2>';
        }else{

            echo '
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre del Cliente</th>
              <th>Apellido del Cliente</th>
              <th>Nombre del Producto</th>
              <th>Presentación</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th>Ver/Editar</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            
            ';

            foreach ($arreglo as $f) {
                echo '
                
                <tr>
                    <td> '.$f["codigo"].' </td>
                    <td> '.$f["nombreCliente"].'</td>
                    <td> '.$f["apellidoCliente"].'</td>
                    <td> '.$f["nombreProducto"].'</td>
                    <td> '.$f["presentacion"].'</td>
                    <td> '.$f["cantidad"].'</td>
                    <td> '.$f["total"].'</td>
                    <td> <a href="" class="btn btn-dark">Ver/Editar</a> </td>
                    <td> <a href="../../controller/eliminarPedidoAdmin.php?id_pedido='.$f["codigo"].'" class="btn btn-danger">Eliminar</a></td>
                </tr>
                
                
                ';
            }


            echo '
            
                </tbody>
                    <tfoot>
                    <tr>
                    <th>Codigo</th>
                    <th>Nombre del Cliente</th>
                    <th>Apellido del Cliente</th>
                    <th>Nombre del Producto</th>
                    <th>Presentación</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Ver/Editar</th>
                    <th>Eliminar</th>
                    </tr>
                    </tfoot>
                </table>
            
            
            ';

        }
    }


?>