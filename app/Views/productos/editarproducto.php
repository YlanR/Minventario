<?php
$idProducto = $datos[0]['id'];
$categoria    = $datos[0]['idcategoria'];
$codigo   = $datos[0]['codigo'];
$descripcion   = $datos[0]['descripcion'];
$compra     = $datos[0]['compra'];
$stock  = $datos[0]['stock'];
$precio      = $datos[0]['precio'];

?>

<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Producto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Editar Producto</li>
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
                <h3 class="card-title">Inserte datos del producto</h3>
              </div>
        <div class="card-body">

            <form action="<?php echo base_url()?>/actualizarproducto" method="POST">

            <div class="input-group">
                <input type="hidden" class="form-control input-lg" name="idProducto" placeholder="id" value="<?=$idProducto?>" >
                </div>

            <label for="categoria">Categoria <span class="text-danger">*</span></label>
                  <div class="input-group mb-3">
                  <span class="input-group-text"><i class="fas fa-th"></i></span>
                  <select name="categoria" class="form-control input-lg" required>
                    <option value="">Seleccione una categoria</option>

                    <?php 

                    foreach($categorias as $categoria =>$valor){
                        echo "<option value='".$valor->id."'>".$valor->nombre."</option>";
                    }

                    ?>
                    
                  </select>
                  </div>

                <label for="codigo">Codigo <span class="text-danger">*</span><span class="text-danger small font-weight-bold"> [5 Digitos Obligatorios]</span><span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                    </div>
                        <input type="number" class="form-control" name="codigo" placeholder="Codigo" value="<?=$codigo?>">
                        
                </div>

                <label for="descripcion">Descripcion <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                    </div>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="<?=$descripcion?>">
                        
                </div>

                <label for="compra">Valor de Entrada<span class="text-danger small font-weight-bold"> C/U</span> <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-ios-cart"></i></span>
                    </div>
                        <input step="any" type="number" class="form-control" name="compra" value="<?=$compra?>">
                        
                </div>

                <label for="stock">Stock <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                    </div>
                        <input type="number" class="form-control" name="stock" placeholder="Stock" value="<?=$stock?>" >
                        
                </div>

                <label for="precio">Precio <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-cash"></i></span>
                    </div>
                        <input step="any" type="number" class="form-control" name="precio" placeholder="Precio" value="<?=$precio?>">
                        
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