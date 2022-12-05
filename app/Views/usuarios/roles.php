
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sistema de roles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Roles</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        
      <div class="container-fluid">

      <div class="row ">
        <div class="col-lg-12 ">
         <!-- <div class="card card-info"> -->
          <table  class="table table-striped w-100 shadow" >
            <thead class="card-info">
              <tr style="background: #17a2b8; color: #ffff" class="text-center">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
           
            <?php foreach($usuarios as $usuario => $valor): ?>
                    <tr class="text-center">
     
                        <td> <?=($usuario+1)?></td>
                        <td> <?=$valor->nombre?></td>
                        <td> <?=$valor->usuario?></td>
                        <td> <?=$valor->type?></td>
                        <td class="text-center">

                        <a href="<?=base_url()?>/obtenerrol/<?=$valor->id_usuario?>"><button class="btn text-primary px-1" ><i class="fas fa-pencil-alt fs-5"></i></button></a>
                       
                        
                      </td>
                    </tr>
                

                <?php endforeach; ?>
           
            </tbody>
            <tfoot class="text-center">
            <th>#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
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