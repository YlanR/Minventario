<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
<script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
        
    </script>

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inventario / Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Productos / Inventario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- Row para criterios de busqueda -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">
              <div class="card-header" style="background: #17a2b8; color: #ffff">
                <h3 class="card-title">CRITERIOS DE BUSQUEDA</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                      <div class="col-lg-12">
                        <form action="<?=base_url()?>/buscar" method="post">
                          <div style="width: 30%;" class="form-floating mx-1">
                          <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar">
                          <label for="buscar">Buscar por Descripcion o Codigo</label>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
              
                <!-- /.card-header -->
                
                  <table id="example1" class="table table-striped w-100 shadow">

                  <?php if (isset($_POST['buscar'])) {?>

                    <thead style="background: #17a2b8; color: #ffff">
                    <tr class="text-center">
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Fecha</th>
                    </tr>
                    </thead>
                  
                  <?php } else { ?>
                    
                    <thead style="background: #17a2b8; color: #ffff">
                    <tr class="text-center">
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Categorias</th>
                    <th>Stock</th>
                    <th>Fecha</th>
                    <?php if(session('type') == 'Tecnico'){ ?><th>Opciones</th><?php } ?>
                    </tr>
                    </thead>

                    <?php } ?>
                    <tbody>

                  
                    <?php if (isset($_POST['buscar'])) {?>

                      <?php foreach($busqueda as $llave => $valore): ?>
                        <td> <?=($llave+1)?></td>
                        <td> <?=$valore->codigo?></td>
                        <td> <?=$valore->descripcion?></td>
                        <td> <?=$valore->stock?> Und(s)</td>
                        <td> <?=$valore->fecha?></td>
                        <?php if(session('type') == 'Tecnico'){ ?><td> <a href="<?=base_url()?>/eliminarproducto/<?=$valore->id?>" data-id="<?=$valore->id?>" onclick="return eliminar()" id="delete"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button></td><?php } ?>
                        <?php endforeach; ?>

                    <?php } else  {?>

                      <?php foreach($inventario as $key => $valor): ?>
                    <tr class="text-center">
                    <?php if ($valor->stock > 0) :?>
                        <td> <?=($key+1)?></td>
                        <td> <?=$valor->codigo?></td>
                        <td> <?=$valor->descripcion?></td>
                        <td> <?=$valor->categorias?></td>
                        <td> <?=$valor->stock?> Und(s)</td>
                        <td> <?=$valor->fecha?></td>
                        <?php if(session('type') == 'Tecnico'){ ?><td> <a href="<?=base_url()?>/eliminarproducto/<?=$valor->id?>" data-id="<?=$valor->id?>" onclick="return eliminar()" id="delete"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button></td><?php } ?>

                        
                      <?php endif; ?>    
                    </tr>

                <?php endforeach; ?>


                    <?php } ?>


                    </tbody>
                    <tfoot class="text-center">
                    
                    </tfoot>
                  </table>

                  
             
       
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
 
    <!-- /.content -->
  </div>
    
 