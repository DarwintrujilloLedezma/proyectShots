<?php

    function cargarUsers(){

        $objetoConsultas = new consultasAdmin();
        $arreglo = $objetoConsultas->mostrarUsers();

        if (!isset($arreglo)) {
            echo '<h2>NO HAY USUARIOS REGISTRADOS EN EL SISTEMA</h2>';
        }else{

            echo '
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Identificacion</th>
              <th>Tipo Documento</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Teléfono</th>
              <th>Fecha Nacimiento</th>
              <th>Correo</th>
              <th>Rol</th>
              <th>Estado</th>
              <th>Ver/Editar</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            
            ';

            foreach ($arreglo as $f) {
                echo '
                
                <tr>
                    <td> '.$f["identificacion"].' </td>
                    <td> '.$f["tipoDoc"].'</td>
                    <td> '.$f["nombres"].'</td>
                    <td> '.$f["apellidos"].'</td>
                    <td> '.$f["telefono"].'</td>
                    <td> '.$f["fechaNacimiento"].'</td>
                    <td> '.$f["correo"].'</td>
                    <td> '.$f["rol"].'</td>
                    <td> '.$f["estado"].'</td>
                    <td> <a href="verInfoUser.php?id_user='.$f["identificacion"].'" class="btn btn-dark">Ver/Editar</a> </td>
                    <td> <a href="../../controller/elimarUserAdmin.php?id_user='.$f["identificacion"].'" class="btn btn-danger">Eliminar</a></td>
                </tr>
                
                
                ';
            }


            echo '
            
                </tbody>
                    <tfoot>
                    <tr>
                        <th>Identificacion</th>
                        <th>Tipo Documento</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Fecha Nacimiento</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Ver/Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </tfoot>
                </table>
            
            
            ';

        }
    }

    function cargarInfoUser(){

        $objetoConsultas = new consultasAdmin();
        $id_user = $_GET['id_user'];
        $result = $objetoConsultas->buscarUser($id_user);

        foreach ($result as $f) {
            echo'
            <form action="../../controller/ModificarUserAdmin.php" method="POST"> 
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Identificación</label>
                  <input type="number" name="identificacion" readonly="readonly" value="'.$f["identificacion"].'" class="form-control" id="exampleInputEmail1" placeholder="Ej: 123456789">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Tipo de Documento</label>
                  <select class="form-control select2" name="tipoDoc" style="width: 100%;">
                      <option value="'.$f["tipoDoc"].'">'.$f["tipoDoc"].'</option>
                      <option value="cedula">Cedula</option>
                      <option value="pasaporte">Pasaporte</option>
                      <option value="cedulaExtranjera">Cedula Extranjera</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombres</label>
                  <input type="text" class="form-control" name="nombres" value="'.$f["nombres"].'" id="exampleInputEmail1" placeholder="Junior">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" value="'.$f["apellidos"].'" id="exampleInputEmail1" placeholder="Ej: Martinez">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Telefono</label>
                  <input type="text" name="telefono" value="'.$f["telefono"].'" class="form-control" id="exampleInputEmail1" placeholder="Ej: 1234567890">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" name="fechaNacimiento" value="'.$f["fechaNacimiento"].'" id="exampleInputEmail1" placeholder="Ej: 01/01/2001">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" name="correo" value="'.$f["correo"].'" class="form-control" id="exampleInputEmail1" placeholder="Ej: Junior@gmail.com">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Rol</label>
                  <select class="form-control select2" name="rol" style="width: 100%;">
                    <option selected value="'.$f["rol"].'">'.$f["rol"].'</option>
                      <option value="administrador">Administrador</option>
                      <option value="empleado">Empleado</option>
                      <option value="cliente">Cliente</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Estado</label>
                  <select class="form-control select2" name="estado" style="width: 100%;">
                        <option selected value="'.$f["estado"].'">'.$f["estado"].'</option>
                      <option value="activo">Activo</option>
                      <option value="inactivo">Inactivo</option>
                      <option value="pendiente">Pendiente</option>
                  </select>
                </div>
                
              </div>
              
              
             
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Modificar Usuario</button>
            </div>
          </form>
            
            ';
        }

    }


?>