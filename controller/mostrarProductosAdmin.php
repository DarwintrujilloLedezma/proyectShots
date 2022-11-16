<?php

    function cargarProductos(){

        $objetoConsultas = new consultasAdmin();
        $arreglo = $objetoConsultas->mostrarProductos();

        if (!isset($arreglo)) {
            echo '<h2>NO HAY PRODUCTOS REGISTRADOS EN EL SISTEMA</h2>';
        }else{

            echo '
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre del producto</th>
              <th>Presentación</th>
              <th>Cantidad</th>
              <th>Ubicación</th>
              <th>Precio Unitario</th>
              <th>Total</th>
              <th>Proveedor</th>
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
                    <td> '.$f["presentacion"].'</td>
                    <td> '.$f["cantidad"].'</td>
                    <td> '.$f["ubicacion"].'</td>
                    <td> '.$f["precioUnitario"].'</td>
                    <td> '.$f["total"].'</td>
                    <td> '.$f["proveedor"].'</td>
                    <td> <a href="" class="btn btn-dark">Ver/Editar</a> </td>
                    <td> <a href="../../controller/eliminarProductoAdmin.php?id_producto='.$f["codigo"].'" class="btn btn-danger">Eliminar</a></td>
                </tr>
                
                
                ';
            }


            echo '
            
                </tbody>
                    <tfoot>
                    <tr>
                    <th>Codigo</th>
                    <th>Nombre del producto</th>
                    <th>Presentación</th>
                    <th>Cantidad</th>
                    <th>Ubicación</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Proveedor</th>
                    <th>Ver/Editar</th>
                    <th>Eliminar</th>
                    </tr>
                    </tfoot>
                </table>
            
            
            ';

        }
    }


?>