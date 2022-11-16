<?php

    function cargarVentas(){

        $objetoConsultas = new consultasAdmin();
        $arreglo = $objetoConsultas->mostrarVentas();

        if (!isset($arreglo)) {
            echo '<h2>NO HAY VENTAS REGISTRADAS EN EL SISTEMA</h2>';
        }else{

            echo '
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre del Producto</th>
              <th>Cantidad</th>
              <th>Valor Unitario</th>
              <th>Ubicacion</th>
              <th>Valor Total</th>
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
                    <td> '.$f["nombreProducto"].'</td>
                    <td> '.$f["cantidad"].'</td>
                    <td> '.$f["valorUnitario"].'</td>
                    <td> '.$f["ubicacion"].'</td>
                    <td> '.$f["valorTotal"].'</td>
                    <td> <a href="" class="btn btn-dark">Ver/Editar</a> </td>
                    <td> <a href="../../controller/eliminarVentaAdmin.php?id_venta='.$f["codigo"].'" class="btn btn-danger">Eliminar</a></td>
                </tr>
                
                
                ';
            }


            echo '
            
                </tbody>
                    <tfoot>
                    <tr>
                    <th>Codigo</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Valor Unitario</th>
                    <th>Ubicacion</th>
                    <th>Valor Total</th>
                    <th>Ver/Editar</th>
                    <th>Eliminar</th>x
                    </tr>
                    </tfoot>
                </table>
            
            
            ';

        }
    }


?>