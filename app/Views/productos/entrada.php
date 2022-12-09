<?php
$idProducto = $datos[0]['id'];
$categoria    = $datos[0]['idcategoria'];
$codigo   = $datos[0]['codigo'];
$descripcion   = $datos[0]['descripcion'];
$stock  = $datos[0]['stock'];
$compra  = $datos[0]['compra'];

?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agregar Stock</h1>
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

        <form action="<?php echo base_url()?>/actualizarentrada" method="POST">


                  <div class="input-group ">
                        <input type="hidden" class="form-control" name="idProductoEntrada" placeholder="id" value="<?=$idProducto?>">      
                </div>

                <div class="input-group ">
                        <input type="hidden" class="form-control" name="codigoEntrada" placeholder="Codigo" value="<?=$codigo?>">      
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="descripcionEntrada" placeholder="Codigo" value="<?=$descripcion?>" >      
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="categoriaEntrada" placeholder="Categoria" value="<?=$categoria?>" >      
                </div>

                <h5><span class="text-primary">Codigo:</span> <?=$codigo?></h5>
                <h5><span class="text-primary">Producto:</span> <?=$descripcion?></h5>
                <h5><span class="text-primary">Stock:</span> <?=$stock?> Und(s)</h5>

                <label for="stock">Agregar Stock <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                    </div>
                        <input type="number" class="form-control" name="entradastock" placeholder="Stock" required>
                        
                </div>

                <label for="compra">Valor de Entrada<span class="text-danger small font-weight-bold"> C/U</span> <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-ios-cart"></i></span>
                    </div>
                        <input  step="any" type="number" class="form-control" name="compraEntrada" value="<?=$compra?>">
                        
                </div>

                <div class="input-group ">
                <input type="hidden" class="form-control" name="stockentrada" placeholder="Stock" value="<?=$stock?>" >      
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