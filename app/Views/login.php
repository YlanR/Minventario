<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url()?>/css/icono.png" sizes="32x32">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/css/estilos.css">
    <script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
<script src="<?=base_url()?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<link rel="stylesheet" href="<?=base_url()?>/assets/lips/dist/sweetalert2.min.css">
<!-- JS Bootstrap5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <meta name = "viewport" content = "width= device-width, initial-scale = 1.0">
</head>

<body>
    <div class="cajas">
        <div class="caja1">
            <img src="<?=base_url()?>/assets/dist/img/miv.png" class="miv" alt="User Image">
            <header id="inicio">
            <h2>Iniciar Sesión</h2>
            </header>
    
            <nav>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </nav>

            <?php if(isset($error)){?>

              <div class="alert alert-warning text-center">
                <p><?php echo $error;?></p>
              </div>

            <?php }?>

            <?php if(isset($vacio)){?>

              <div class="alert alert-danger text-center">
                <p><?php echo $vacio;?></p>
              </div>

            <?php }?>

            <form action="<?php echo base_url('/login')?>" method="POST">
            <section class="formulariolog">
                <input type="text" name="usuario" id="usuario" class="correo" placeholder="Usuario" required>
                <br><br>
                <input type="password" name="password" id="password" class="correo" placeholder="Contraseña" required>
                <br>
            </section>
            
                <button id="enviar">INGRESAR</button>
                </form>

        </div>
        <div class="caja2">
            <header id="registro">
                <h2>Únete</h2>
            </header>

            <p>El mejor servicio de inventario de internet.</p> 
                <form action="<?=base_url()?>/registrate"">
           <button id="registrar">REGISTRARSE</button>
            </form>
        </div> 
       
    </div> 
    <footer>
        Pagina realizada por el TEAM N.Y(Nolan - Ylan) 
    </footer>

    
    <script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?=base_url()?>/assets/lips/dist/sweetalert2.min.js"></script>

<script >
  (function(){
    let mensaje = <?=$mensaje?>;
  
  if(mensaje == '1'){
  Swal.fire(
    'Buen Trabajo!',
    'El Producto se ha registrado EXITOSAMENTE!',
    'success'
  )
  } 
  
  else if(mensaje == '0'){
  Swal.fire({
    icon: 'error',
    title: 'Ha habido un problema..',
    text: 'Revisa los datos ingresador!',
  })
  } 
  
  else if(mensaje == '2'){
    Swal.fire(
        'Excelente!',
        'Haz eliminado correctamente el registro!',
        'success'
    )
  }

  else if(mensaje == '3'){
    const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          title: 'Ingresaste con EXITOO.!!'
        })
  

} 

  else if(mensaje == '4'){
    Swal.fire(
      'Buen Trabajo!',
      'Te haz registrado EXITOSAMENTE!',
      'success'
    )
  }
  else if(mensaje == '5'){
      const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })

          Toast.fire({
            icon: 'success',
            title: 'Saliste del sistema.!'
          })
    }

    
    })();
</script>
</body>
</html>