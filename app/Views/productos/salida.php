<?php
$idProducto = $datos[0]['id'];
$categoria    = $datos[0]['idcategoria'];
$codigo   = $datos[0]['codigo'];
$descripcion   = $datos[0]['descripcion'];
$stock  = $datos[0]['stock'];
$precio = $datos[0]['precio'];

?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Disminuir Stock</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Stock</li>
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
                <!-- <h3 class="card-title">Aumente el Stock</h3> -->
              </div>
        <div class="card-body">

        <form action="<?php echo base_url()?>/actualizarsalida" method="POST">


                  <div class="input-group ">
                        <input type="hidden" class="form-control" name="idProductoSalida" placeholder="id" value="<?=$idProducto?>">      
                </div>

                <div class="input-group ">
                        <input type="hidden" class="form-control" name="codigoSalida" placeholder="Codigo" value="<?=$codigo?>">      
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="descripcionSalida" placeholder="Codigo" value="<?=$descripcion?>" >      
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="categoriaSalida" placeholder="Categoria" value="<?=$categoria?>" >      
                </div>

                <h5><span class="text-primary">Codigo:</span> <?=$codigo?></h5>
                <h5><span class="text-primary">Producto:</span> <?=$descripcion?></h5>
                <h5><span class="text-primary">Stock:</span> <?=$stock?> Und(s)</h5>
                <h5><span class="text-danger">Precio:</span> <?=$precio?>$</h5>

                <label for="stock">Disminuir Stock <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                    </div>
                        <input type="number" class="form-control" name="salidastock" placeholder="Stock">
                        
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="preciosalida" placeholder="precio" value="<?=$precio?>" >      
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="stocksalida" placeholder="Stock" value="<?=$stock?>" >      
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Guardar</button>
                  <a href="<?=base_url()?>/carga_masiva" class="btn btn-default float-right">Cancelar</a>
                </div>

            </form>
            <p><span class="text-success">NOTA:</span> (<span class="text-danger">*</span>) Campos obligatorios</p>
        </div> 
    </div>        
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>