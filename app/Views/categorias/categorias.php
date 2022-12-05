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
            <h1 class="m-0">Gestion de Categorias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Gestion de Categorias</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
      <div class="box-header">
            
            <a href="<?=base_url()?>/agregar-categoria"><button class="btn btn-success">Agregar Categoria</button> </a>

            </div>

       
      <div class="row ">
        <div class="col-lg-12 ">
         <!-- <div class="card card-info"> -->
          <table  class="table table-striped w-100 shadow" >
            <thead class="card-info">
              <tr style="background: #17a2b8; color: #ffff" class="text-center">
                  <th>#</th>
                  <th>Nombre</th>
                  <th class="text-center">Fecha</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <tbody>
           
            <?php foreach($categorias as $categoria => $valor): ?>
                    <tr class="text-center">
                        <td> <?=($categoria+1)?></td>
                        <td> <?=$valor->nombre?></td>
                        <td class="text-center"> <?=$valor->fecha?></td>
                        <td class="text-center">

                        <a href="<?=base_url()?>/obtenercategoria/<?=$valor->id?>"><button class="btn text-primary px-1" ><i class="fas fa-pencil-alt fs-5"></i></button></a>
                        <a href="<?=base_url()?>/eliminarCategoria/<?=$valor->id?>" onclick="return eliminar()"><button class="btn text-danger px-1"><i class="fas fa-trash fs-5"></i></button>
                       
                        
                      </td>
                    </tr>
                

                <?php endforeach; ?>
           
            </tbody>
            <tfoot class="text-center">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Fecha</th>
                <th class="text-center">Opciones</th>
                    </tr>
                    </tfoot>
          </table>
          </div>
        
      </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>