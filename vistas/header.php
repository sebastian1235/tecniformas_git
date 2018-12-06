<?php
if (strlen(session_id()) < 1) 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tecniformas | www.tecniformasplasticas.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">


    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-red-light sidebar-collapse sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>TNF</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tecniformas</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
          
          


 <?php  
            if ($_SESSION['almacen']==1) {
              # code...
            
            echo ' <li class="treeview">
              <a href="#">
                <i class="fa fa-inbox"></i><span>Almacen</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="lineas.php"><i class="fa fa-circle-o"></i>Lineas</a></li>                              
                <li><a href="articulo.php"><i class="fa fa-circle-o"></i>Articulos</a></li>
                             
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-industry"></i><span>Producción</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
            <li><a href="ciudad.php"><i class="fa fa-circle-o"></i>Ciudad</a></li> 
            <li><a href="localidad.php"><i class="fa fa-circle-o"></i>Localidad</a></li>     
          <li><a href="clientes.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
          <li><a href="orden_produccion.php"><i class="fa fa-circle-o"></i>Orden de producción</a></li> 
          <li><a href="pedido.php"><i class="fa fa-circle-o"></i>Ver ordenes</a></li> 
        <li><a href="detalle_produccion.php"><i class="fa fa-circle-o"></i>Fabricación</a></li> 
              </ul>
            </li>';
          }
            ?> 
            <?php 
            if ($_SESSION['usuarios']==1) {
              # code...
            echo '
            <li class="treeview">
              <a href="#">
                <i class="fa fa-group"></i><span>Usuarios</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                        
              </ul>
            </li>';
          }
            ?>
            <?php 
            if ($_SESSION['fabricacion']==1) {
              # code...
            echo '<li>
              <a href="fabricacion.php">
                <i class="  fa fa-cogs"></i> <span>Fabricación</span>
              </a>
            </li>';
          }
            ?>

     
        </section>
        <!-- /.sidebar -->
      </aside>
