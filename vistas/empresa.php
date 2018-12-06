<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.php");
}
else
{
require 'header.php';

if ($_SESSION['usuario']==1)
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
                          <h1 class="box-title">Empresa <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Tipo de documento</th>
                            <th>Número</th>
                            <th>Regimen</th>
                            <th>Iva</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                          <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Tipo de documento</th>
                            <th>Número</th>
                            <th>Regimen</th>
                            <th>Iva</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" name="idempresa" id="idempresa">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre de la empresa" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo Documento:</label>
                            <select class="form-control select-picker" name="tipo_documento" id="tipo_documento" required>
                              <option value="DNI">DNI</option>
                              <option value="RUC">RUC</option>
                              <option value="CEDULA">CEDULA</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Número Documento:</label>
                            <input type="text" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Documento">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Regimen:</label>
                            <input type="text" class="form-control" name="regimen" id="regimen" maxlength="20" placeholder="Regimen">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Iva:</label>
                            <input type="decimal" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Iva">
                          </div>

                           <div class="form-group col-log-6 col-md-6 col-sm-6  col-xs-12">
                            <label>Dirección :</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" maxleght="70"
                            placeholder ="direccion">
                          </div>

                           <div class="form-group col-log-6 col-md-6 col-sm-6  col-xs-12">
                            <label>Telefono :</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxleght="20"
                            placeholder ="telefono">
                          </div>

                           <div class="form-group col-log-6 col-md-6 col-sm-6  col-xs-12">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="email" id="email" maxleght="100"
                            placeholder ="email">
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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

<script type="text/javascript" src="scripts/empresa.js"></script>
<?php 
}
ob_end_flush();
?>