<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agregar Producto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Producto</li>
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

            <form action="<?php echo base_url()?>/insertarproducto" method="POST">

            <label for="categoria">Categoria <span class="text-danger">*</span></label>
                  <div class="input-group mb-3">
                  <span class="input-group-text"><i class="fas fa-th"></i></span>
                  <select name="categoria" class="form-control input-lg">
                    <option value="">Selecciona una Categoria</option>

                    <?php 

                    foreach($categorias as $categoria =>$valor){
                        echo "<option value='".$valor->id."'>".$valor->nombre."</option>";
                    }

                    ?>
                    
                  </select>
                  </div>

                <label for="codigo">Codigo <span class="text-danger small font-weight-bold"> [5 Digitos Obligatorios]</span><span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                    </div>
                    <?php if (session('mensaje') == '0') { ?>
                      <input type="text" class="form-control is-invalid" name="codigo" id="validationServerUsername" placeholder="Codigo" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
  
                     <?php } else  {?>
                     
                     <input type="number" class="form-control" name="codigo" placeholder="Codigo">
                     <?php } ?>
                </div>

                <label for="descripcion">Descripcion <span class="text-danger">*</span> </label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                    </div>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
                        
                </div>

                
                <label for="compra">Valor de Entrada<span class="text-danger small font-weight-bold"> C/U</span> <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-ios-cart"></i></span>
                    </div>
                        <input type="number" class="form-control" name="compra" placeholder="Valor">
                        
                </div>

                <label for="stock">Stock <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                    </div>
                        <input type="number" class="form-control" name="stock" placeholder="Stock">
                        
                </div>

                <label for="precio">Precio <span class="text-danger">*</span></label>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="ion ion-cash"></i></span>
                    </div>
                        <input type="number" class="form-control" name="precio" placeholder="Precio">
                        
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info" id="guardado">Guardar</button>
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