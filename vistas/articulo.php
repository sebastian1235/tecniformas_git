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

if ($_SESSION['almacen']==1)
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
                          <h1 class="box-title">Articulos <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">

                      <table id="tbllistado" class="table table-striped table-bordered table- condensed table-hover">
                        <thead class="thead-dark">
                          <th>Opciones</th>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Descripcion</th> 
                          <th>Lineas</th>                         
                          <th>Condicion</th>
                        </thead>
                        <tbody>
                          </tbody>
                          
                        <tfoot>
                         <th>Opciones</th>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Descripcion</th> 
                          <th>Lineas</th>                         
                          <th>Condicion</th>
                        </tfoot>
                      </table>

                    </div>

                    <div class="panel-body "  id="formularioregistros">

                         <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-log-3 col-md-3 col-sm-6 col-xs-12">
                            <label>Codigo:</label>
                             <input type="hidden" class="form-control" name="idarticulo" id="idarticulo" maxleght="256"
                            placeholder ="codigo">
                            <input type="text" class="form-control" name="codigo" id="codigo" maxleght="256"
                            placeholder ="codigo">
                          </div>

                          <div class="form-group col-log-3 col-md-3 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="decimal" class="form-control" name="nombre" id="nombre" maxleght="256"
                            placeholder ="nombre">
                          </div>
                           
                          <div class="form-group col-log-3 col-md-3 col-sm-6  col-xs-12">
                            <label>Descripcion:</label>
                            <input type="decimal" class="form-control" name="descripcion" id="descripcion" maxleght="250"
                            placeholder ="descripcion">
                          </div>

                           <div class="form-group col-log-3 col-md-3 col-sm-6 col-xs-6">
                          <label>Linea:</label>
                          <select id="lineas" name="lineas" class="form-control selectpicker" data-live-search="true"></select>
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="
                            btnGuardar"><i class=fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()"
                            type="button"><i class="fa fa-arrow-circle-left"></i>
                              Cancelar</button>

                            
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

<script type="text/javascript" src="scripts/articulo.js"></script>
<?php 
}
ob_end_flush();
?>


