<?php
$idUsuario = $datos[0]['id_usuario'];
$type      = $datos[0]['type'];

?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Perfil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Perfil</li>
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
                <!-- <h3 class="card-title">Inserte nuevos datos de la Categoria</h3> -->
              </div>
        <div class="card-body">

            <form action="<?php echo base_url()?>/actualizarrol" method="POST">

            <div class="input-group">
                <input type="hidden" class="form-control input-lg" name="idUsuario" placeholder="Nombre" value="<?=$idUsuario?>" >
                </div>

                <h5><span class="text-primary">Perfil Actual:  </span>  <?=$type?></h5>

            <label for="precio">Perfil <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-cash"></i></span>
                    </div>
                    <select name="type" class="form-control input-lg" placeholder="Selecciona un Perfil" required>
                    <option value="">Seleccione un nuevo Perfil</option>
                    <option value="Despacho">Despacho</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Tecnico">Tecnico</option>
                    
                  </select>
                        
                </div>

               

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Guardar</button>
                  <a href="<?=base_url()?>/roles" class="btn btn-default float-right">Cancelar</a>
                </div>

            </form>
            <p><span class="text-success">NOTA:</span> (<span class="text-danger">*</span>) Campos obligatorios</p>
        </div> 
    </div>        
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>