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
            <h1 class="m-0">Carga Masiva de Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Carga Masiva de Productos</li>
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
          <div class="card card-primary" >
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
                        <form action="<?=base_url()?>/buscarcar" method="post">
                          <div style="width: 30%;" class="form-floating mx-1">
                          <input type="text" name="buscarcar" id="buscar" class="form-control" placeholder="Buscar">
                          <label for="buscarcar">Buscar por Descripcion o Codigo</label>
                        </form>
                      </div>

                </div>

              </div>
            </div>
        </div>
      </div>

      <div class="box-header">
            
            <a href="<?=base_url()?>/agregar-productos"><button class="btn btn-success">Agregar Productos</button> </a>

            </div>

       
      <div class="row ">
        <div class="col-lg-12 ">
         <!-- <div class="card card-info"> -->
          <table id="tbl_productos" class="table table-striped w-100 shadow" >

          <?php if (isset($_POST['buscarcar'])) {?>

            <thead class="card-info text-center"  style="background: #17a2b8; color: #ffff">
              <tr class="text-center">
              <th>#</th>
                  <th>Codigo</th>
                  <th>Descripcion</th>
                  <th>Compra c/u</th>
                  <th>Stock</th>
                  <th>Precio</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>

            <?php } else { ?>
            <thead class="card-info text-center"  style="background: #17a2b8; color: #ffff">
              <tr >
              <th>#</th>
                  <th>Categoria</th>
                  <th>Codigo</th>
                  <th>Descripcion</th>
                  <th>Compra c/u</th>
                  <th>Stock</th>
                  <th>Precio</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <?php } ?>
            <tbody >

                <?php if (isset($_POST['buscarcar'])) {?>
                  
                      <?php foreach($busqueda as $llave => $valore): ?>
                        <tr class="text-right">  
                        <td> <?=($llave+1)?></td>
                        <td> <?=$valore->codigo?></td>
                        <td> <?=$valore->descripcion?></td>
                        <td> <?=$valore->compra?></td>
                        <td> <?=$valore->stock?> Und(s)</td>
                        <td> <?=$valore->precio?></td>
                        <td class="text-center">
                        <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?> <a href="<?=base_url()?>/obtenerproducto/<?=$valore->id?>"><button class="btn text-primary px-1" ><i class="fas fa-pencil-alt fs-5"></i></button></a><?php } ?>
                       <a href="<?=base_url()?>/entrada/<?=$valore->id?>"><button class="btn text-success px-1" ><i class="fas fa-plus-circle"></i></button></a>
                       <?php if($valore->stock > 0){ ?> <a href="<?=base_url()?>/salida/<?=$valore->id?>"><button class="btn text-warning px-1" ><i class="fas fa-minus-circle"></i></button></a><?php } else { ?><button class="btn text-muted px-1" ><i class="fas fa-minus-circle"></i></button><?php } ?>
                       <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?><a href="<?=base_url()?>/eliminarproducto/<?=$valore->id?>" data-id="<?=$valore->id?>" onclick="return eliminar()" id="delete"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button><?php } ?>

                      </td>
                    </tr>
                        <?php endforeach; ?>

                      <?php } else  {?>

                      <?php foreach($productos as $producto => $valor): ?>
                         <tr class="text-center">
                      
                        <td> <?=($producto+1)?></td>
                        <td><?=$valor->categorias?></td>
                        <td> <?=$valor->codigo?></td>
                        <td> <?=$valor->descripcion?></td>
                        <td> <?=$valor->compra?>$</td>
                        <td> <?=$valor->stock?> Und(s)</td>
                        <td> <?=$valor->precio?>$</td>
                        <td class="text-center">
                        <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?> <a href="<?=base_url()?>/obtenerproducto/<?=$valor->id?>"><button class="btn text-primary px-1" ><i class="fas fa-pencil-alt fs-5"></i></button></a><?php } ?>
                       <a href="<?=base_url()?>/entrada/<?=$valor->id?>"><button class="btn text-success px-1" ><i class="fas fa-plus-circle"></i></button></a>
                       <?php if($valor->stock > 0){ ?> <a href="<?=base_url()?>/salida/<?=$valor->id?>"><button class="btn text-warning px-1" ><i class="fas fa-minus-circle"></i></button></a><?php } else { ?><button class="btn text-muted px-1" ><i class="fas fa-minus-circle"></i></button><?php } ?>
                       <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?><a href="<?=base_url()?>/eliminarproducto/<?=$valor->id?>" data-id="<?=$valor->id?>" onclick="return eliminar()" id="delete"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button><?php } ?>

                      </td>
                      
                    </tr>
                

                <?php endforeach; ?>

                <?php } ?>

            </tbody>
          </table>
          </div>
        
      </div>
      </div>
      
       
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>