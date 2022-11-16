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
              <th>Ver</th>
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
                    <td> <a href="" class="btn btn-dark">Ver</a> </td>
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
                    <th>Ver</th>
                    </tr>
                    </tfoot>
                </table>
            
            
            ';

        }
    }


?>