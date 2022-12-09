<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agregar Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Usuario</li>
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
                <h3 class="card-title">Inserte datos del Usuario</h3>
              </div>
        <div class="card-body">

            <form action="<?php echo base_url()?>/insertarusuario" method="POST">


                <label for="nombre">Nombre y Apellido <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido" required>
                        
                </div>

                <label for="usuario">Usuario <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                        
                </div>

                <label for="email">Correo Electronico <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                        <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required>
                        
                </div>

                <label for="contraseña">Contraseña <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required>
                        
                </div>

                <?php if(session('type') == 'Tecnico'){ ?>
                <label for="precio">Perfil <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-cash"></i></span>
                    </div>
                    <select name="type" class="custom-select rounded-0" placeholder="Selecciona un Perfil" required>
                      <option>Selecciona un Perfil</option>
                    <option value="Despacho">Despacho</option>
                    <option value="Administrador">Administrador</option>
                    
                  </select>
                        
                </div>
                <?php } else {?>

                  <div class="input-group ">
                <input type="hidden" class="form-control" name="type" placeholder="precio" value="Despacho" >      
                </div>


                <?php }?>

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