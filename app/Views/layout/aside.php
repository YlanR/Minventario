  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>/inicio" class="brand-link">
      <img src="<?=base_url()?>/assets/dist/img/miv.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="">
      <span class="brand-text font-weight-light">Mi Inventario</span>
    </a>

    <script>
        function ver(){
          Swal.fire({
          title: '<?=session('type');?>',
          text: '<?=session('nombre');?> | <?=session('email');?>',
          imageUrl: '<?=base_url()?>/assets/dist/img/miv.png',
          imageWidth: 400,
          imageHeight: 200,
          imageAlt: 'Custom image',
          })
        }
    </script>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?=base_url()?>/assets/dist/img/perfil.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info ">
              <a href="#" onclick="return ver()" class="text-center d-block"><?=session('nombre');?>|<?=session('type');?></a>   
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2 my-auto">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url()?>/inicio" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Inicio
                        </p>    
                    </a>
                </li>

                <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?>

                  <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Usuarios
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=base_url()?>/usuarios" class="nav-link" >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Usuarios Activos</p>
                    </a>
                  </li>
                  
                  <?php if(session('type') == 'Tecnico'){ ?>
                  <li class="nav-item">
                    <a href="<?=base_url()?>/roles" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Perfiles</p>
                    </a>
                  </li>
                  <?php } ?>

                </ul>
              </li>

                <?php } ?>
            
              <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Productos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=base_url()?>/inventario" class="nav-link" >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inventario</p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="<?=base_url()?>/carga_masiva" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Carga de Productos</p>
                    </a>
                  </li>

                  <?php if(session('type') == 'Administrador' OR session('type') == 'Tecnico'){ ?>
                  <li class="nav-item">
                    <a href="<?=base_url()?>/categorias" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Categorias</p>
                    </a>
                  </li>
                  <?php } ?>
 
                

                </ul>
              </li>

              <li class="nav-item">
                    <a href="<?=base_url()?>/merma" class="nav-link">
                      <i class="ion ion-android-remove-circle nav-icon"></i>
                      <p>
                        Merma de Productos
                      </p>
                    </a>
                  </li>

              <li class="nav-item">
                    <a href="<?=base_url()?>/compras" class="nav-link">
                    <i class="nav-icon ion ion-cash"></i>
                        <p>
                            Compras
                        </p>    
                    </a>
                </li>
              
              <li class="nav-item">
                    <a href="<?=base_url()?>/ventas" class="nav-link">
                    <i class="nav-icon ion ion-ios-cart"></i>
                        <p>
                            Ventas
                        </p>    
                    </a>
                </li>
                
               
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <li class="nav-item">
          <div class="sidebar-custom mx-auto">
            
            <a href="<?=base_url()?>/salir"  class="btn btn-danger mx-3 my-3 ">Salir</a>
          </div>
        </li>
    <!-- /.sidebar -->
  </aside>

  

  