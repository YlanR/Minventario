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
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
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
                        <form action="<?=base_url()?>/buscarusuario" method="post">
                          <div style="width: 30%;" class="form-floating mx-1">
                          <input type="text" name="buscarusuario" id="buscarProducto" class="form-control" placeholder="Buscar">
                          <label for="buscar">Buscar</label>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="box-header">
            
            <a href="<?=base_url()?>/agregar-usuarios"><button class="btn btn-success">Agregar Usuario</button> </a>

            </div>

       
      <div class="row ">
        <div class="col-lg-12 ">
         <!-- <div class="card card-info"> -->
          <table  class="table table-striped w-100 shadow" >
            <thead class="card-info">
              <tr style="background: #17a2b8; color: #ffff" class="text-center">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Correo</th>
                  <th>Perfil</th>
                  <th>Registrado</th>
                  <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
           
            <?php foreach($usuarios as $usuario => $valor): ?>

              <?php if($valor->type == 'Administrador' OR $valor->type == 'Despacho'){ ?>

                    <tr class="text-center">
     
                        <td> <?=($usuario+1)?></td>
                        <td> <?=$valor->nombre?></td>
                        <td> <?=$valor->usuario?></td>
                        <td> <?=$valor->email?></td>
                        <td> <?=$valor->type?></td>
                        <td> <?=$valor->fecha?></td>
                        <td class="text-center">

                        <a href="<?=base_url()?>/obtenerusuario/<?=$valor->id_usuario?>"><button class="btn text-primary px-1" ><i class="fas fa-pencil-alt fs-5"></i></button></a>
                        <a href="<?=base_url()?>/eliminarUsuario/<?=$valor->id_usuario?>" onclick="return eliminar()"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button>
                       
                        
                      </td>
                    </tr>
                    <?php } else if(session('type') == 'Tecnico') {?>
                      <tr class="text-center">
     
                            <td> <?=($usuario+1)?></td>
                            <td> <?=$valor->nombre?></td>
                            <td> <?=$valor->usuario?></td>
                            <td> <?=$valor->email?></td>
                            <td> <?=$valor->type?></td>
                            <td> <?=$valor->fecha?></td>
                            <td class="text-center">

                            <a href="<?=base_url()?>/obtenerusuario/<?=$valor->id_usuario?>"><button class="btn text-primary px-1" ><i class="fas fa-pencil-alt fs-5"></i></button></a>
                            <a href="<?=base_url()?>/eliminarUsuario/<?=$valor->id_usuario?>" onclick="return eliminar()"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button>
                            
                            
                          </td>
                        </tr>
                    <?php } ?>

                <?php endforeach; ?>
           
            </tbody>
            <tfoot class="text-center">
            <th>#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Correo</th>
                  <th>Perfil</th>
                  <th>Registrado</th>
                  <th>Opciones</th>
                    </tr>
                    </tfoot>
          </table>
          </div>
        
      </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>