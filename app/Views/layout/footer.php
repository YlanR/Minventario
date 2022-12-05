

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Dayana te queremos
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2022 <a href="<?=base_url()?>/inicio">Programacion 3</a>.</strong> Todos los derechos
    reservados.
  </footer>
</div>

<script src="<?=base_url()?>/assets/js/alertas.js"></script>
<!-- ./wrapper -->
<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>/assets/dist/js/demo.js"></script>  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?=base_url()?>/assets/lips/dist/sweetalert2.min.js"></script>

<script>
  (function(){
    let mensaje = <?=$mensaje?>;
  
  if(mensaje == '1'){
  Swal.fire(
    'Buen Trabajo!',
    'El registro se ha agregado EXITOSAMENTE!',
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

  }  else if(mensaje == '5'){
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

  else if(mensaje == '6'){
    Swal.fire(
        'Excelente!',
        'El registro se ha modificado EXITOSAMENTE!!',
        'success'
    )
  }

  else if(mensaje == '7'){
  Swal.fire(
    'Buen Trabajo!',
    'El usuario se ha registrado EXITOSAMENTE!',
    'success'
  )
  } 

  

  
  })();
</script>

</body>
</html>
