<?php
$idUsuario = $datos[0]['id_usuario'];
$nombre    = $datos[0]['nombre'];
$usuario   = $datos[0]['usuario'];
$email     = $datos[0]['email'];
$password  = $datos[0]['password'];
$type      = $datos[0]['type'];

?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        
      <div class="container-fluid">

      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Inserte nuevos datos del Usuario</h3>
              </div>
        <div class="card-body">

            <form action="<?php echo base_url()?>/actualizarusuario" method="POST">

                <div class="input-group">
                <input type="hidden" class="form-control input-lg" name="idUsuario" placeholder="Nombre" value="<?=$idUsuario?>" >
                </div>

                <label for="nombre">Nombre y Apellido <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido" value="<?=$nombre?>">
                        
                </div>

                <label for="usuario">Usuario <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value=" <?=$usuario?>">
                        
                </div>

                <label for="email">Correo Electronico <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                        <input type="email" class="form-control" name="email" placeholder="Correo Electronico" value=" <?=$email?>" required>
                        
                </div>

               
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Guardar</button>
                  <a href="<?=base_url()?>/usuarios" class="btn btn-default float-right">Cancelar</a>
                </div>

            </form>
            <p><span class="text-success">NOTA:</span> (<span class="text-danger">*</span>) Campos obligatorios</p>
        </div> 
    </div>        
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>