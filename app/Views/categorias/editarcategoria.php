<?php
$idCategoria = $datos[0]['id'];
$nombre    = $datos[0]['nombre'];
?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Categoria</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Categoria</li>
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
                <h3 class="card-title">Inserte nuevos datos de la Categoria</h3>
              </div>
        <div class="card-body">

            <form action="<?php echo base_url()?>/actualizarcategoria" method="POST">

            <div class="input-group">
                <input type="hidden" class="form-control input-lg" name="idCategoria" placeholder="id" value="<?=$idCategoria?>" >
                </div>

                <label for="nombre">Nombre de la Categoria</label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-th"></i></span>
                    </div>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre Categoria" value="<?=$nombre?>" required>
                        
                </div>

               

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Guardar</button>
                  <a href="<?=base_url()?>/categorias" class="btn btn-default float-right">Cancelar</a>
                </div>

            </form>
        </div> 
    </div>        
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>