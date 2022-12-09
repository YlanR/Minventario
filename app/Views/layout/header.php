<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=base_url()?>/css/icono.png" sizes="32x32">
  <title>Mi Inventario</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/sweetalert2-theme-bootstrap-4.min.css/css/all.min.css">

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/css/estilos2.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">


  <!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>

<script src="<?=base_url()?>/assets/plugins/chart.js/Chart.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?=base_url()?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<link rel="stylesheet" href="<?=base_url()?>/assets/lips/dist/sweetalert2.min.css">
<!-- JS Bootstrap5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>




    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/inicio" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/inventario" class="nav-link">Inventario</a>
      </li>
      <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/usuarios" class="nav-link">Usuarios</a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/categorias" class="nav-link">Categorias</a>
      </li>
      <?php } ?>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/carga_masiva" class="nav-link">Carga de Productos</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/compras" class="nav-link">Compras</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/ventas" class="nav-link">Ventas</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url()?>/merma" class="nav-link">Merma de Productos</a>
      </li>


    </ul>

   
  </nav>
  <!-- /.navbar -->