<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url()?>/css/icono.png" sizes="32x32">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registrate</title>
    <link rel="stylesheet" href="<?=base_url()?>/css/estilos.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/estilos2.css">
    <script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
<script src="<?=base_url()?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<link rel="stylesheet" href="<?=base_url()?>/assets/lips/dist/sweetalert2.min.css">
<!-- JS Bootstrap5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    
    <div class="cajas">
        <div class="caja1">
           
            <header id="registro">
                <h2 id="sesion">¿Ya estas registrado?</h2>
            </header>

            <a href="<?=base_url()?>/"><button id="registrar">Inicia Sesion</button></a>

        </div>
        <div class="caja2">
            <header id="registrate">
                <h3>Registrate</h3>
                <div class="regis"></div>
            </header>
            
                <nav>
                   
                </nav>

                      
            
                <form action="<?php echo base_url('/register')?>" method="POST">
                 <section class="formulariores">
                    
                    
                    <input type="text" name="nombre" id="password" class="correo" placeholder="Nombre y Apellido" required>

                    <input type="text" name="usuario" id="password" class="correo" placeholder="Usuario" required>

                    <input type="email" name="email" id="password" class="correo" placeholder="Correo Electronico" rquired>
                    
                    <input type="password" name="password" id="password" class="correo" placeholder="Contraseña" required>


                    <br>

                </section>
                
                    <button id="registro">GUARDAR</button>

            </form> 
        </div>
    </div>


    <footer>
    Pagina realizada por el TEAM N.Y(Nolan - Ylan) | 2022
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
    Swal.fire({
    icon: 'warning',
    title: 'Ha habido un problema..',
    text: 'El Usuario ya existe!',
  })
  }

  if(mensaje == '4'){
  Swal.fire(
    'Buen Trabajo!',
    'Te haz registrado EXITOSAMENTE!',
    'success'
  )
  } 


  
  })();
</script>
    
</body>
</html>

