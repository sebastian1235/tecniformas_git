<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['produccion']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Sedes de Clientes <button id="btnagregar" class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                   <div class="panel-body table-responsive" id="listadoregistros">
                      <table id="tbllistado" class="table table-striped table-responsive ttable-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Cliente</th>
                            <th>Sede</th>
                            <th>Contacto</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Ciudad</th>
                            <th>Localidad</th>
                            <th>Barrio</th>
                            <th>Estado</th>
                            <th>Principal</th>
                          </thead>
                          <tbody>    

                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Cliente</th>
                            <th>Sede</th>
                            <th>Contacto</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Ciudad</th>
                            <th>Localidad</th>
                            <th>Barrio</th>
                            <th>Estado</th>
                            <th>Principal</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <label>Nombre</label> 
                           <input type="hidden" name="idsucursal" id="idsucursal">
                           <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Oficina, casa, sede1" required="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Cliente:</label>
                            <select id="idcliente" name="idcliente" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <label>Contacto</label> 
                           <input type="text" class="form-control" name="contacto" id="contacto" maxlength="100" placeholder="Nombre de contacto">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <label>Correo</label> 
                           <input type="email" class="form-control" name="correo" id="correo" maxlength="150" placeholder="correo@dominio.com" required="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <label>Telefono</label> 
                           <input type="text" class="form-control" name="telefono" id="telefono" maxlength="30" placeholder="# telefono" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <label>Direccion</label> 
                           <input type="text" class="form-control" name="direccion" id="direccion" maxlength="100" placeholder="direccion" required="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ciudad:</label>
                            <select id="idciudad" name="idciudad" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Localidad:</label>
                            <select id="idlocalidad" name="idlocalidad" class="form-control selectpicker" data-live-search="true"></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <label>Barrio</label> 
                           <input type="text" class="form-control" name="barrio" id="barrio" maxlength="50" placeholder="barrio" >
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" id="btnGuardar"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div> 
                        

                      </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
  
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>

<script type="text/javascript" src="scripts/sucursal.js"></script>
<?php 
}
ob_end_flush();
?>