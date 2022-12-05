<?php

$totalproductos = count($productos);

$totalentradas= false;
foreach ($entradas as $key => $valor){
  $totalentradas += $valor->compra;
}

$totalsalidas= false;
foreach ($salidas as $key => $valor){
  $totalsalidas += $valor->ventat;
}

$totalganacia = $totalsalidas - $totalentradas;

// $masproductos = false;
// foreach ($salidas as $salidas => $valor){
//   $masproductos += $valor->ventas;
// }

?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Tablero Principal</li>
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

          <div class="col-lg-3">
            <div class="small-box bg-info">
                <div class="inner">
                  <h4 id="totalProductos"><?=$totalproductos?></h4>

                  <p>Productos registrados</p>
                </div>
                <div class="icon">
                <i class="ion ion-clipboard"></i>
                </div>
                <a href="<?=base_url()?>/inventario" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="small-box bg-success">
                <div class="inner">
                  <h4 id="totalCompras"><?=$totalentradas?>$</h4>

                  <p>Total Compras</p>
                </div>
                <div class="icon">
                <i class="ion ion-cash"></i>
                </div>
                <a href="<?=base_url()?>/inventario" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="small-box bg-warning">
                <div class="inner">
                  <h4 id="totalVentas"><?=$totalsalidas?>$</h4>

                  <p>Total Ventas</p>
                </div>
                <div class="icon">
                <i class="ion ion-ios-cart"></i>
                </div>
                <a href="<?=base_url()?>/inventario" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="small-box bg-danger">
                <div class="inner">
                  <h4 id="totalGanancias"><?=$totalganacia?>$</h4>

                  <p>Total Ganancias/Perdidas</p>
                </div>
                <div class="icon">
                <i class="ion ion-ios-pie"></i>
                </div>
                <a href="<?=base_url()?>/inventario" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        
        <div class="row">
          <div class="col-12">
              <!-- AREA CHART -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Grafica de Estadisticas</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    
                  </div>
                </div>
                <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height:300px; max-height: 350px; width: 100%;">
                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                  <script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
                  <script>
                        const ctx = $('#barChart');

                        new Chart(ctx, {
                          type: 'bar',
                          data: {
                            labels: ['Ganacias / Perdidas'],
                            datasets: [{
                              label: 'Total',
                              data: [<?=$totalganacia?>, 50, -50],
                             
                              borderWidth: 2
                            }],
                            
                            
                          } 
                          ,
                          options: {
                            scales: {
                              y: {
                                beginAtZero: true
                              }
                            }
                          }
                        });
                      </script>
                  </canvas>
                </div>
                </div>
                <!-- /.card-body -->


          </div><!-- /.container-fluid -->
      </div>  

        <div class="row">

          <div class="col-lg-6">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">10 Productos mas vendidos</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      
                    </div> <!-- ./ end card-tools -->
                  </div> <!-- ./ end card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr class="text-center">
                              <th>Cod. Producto</th>
                              <th>Producto</th>
                              <th>Cantidad</th>
                              <th>Ventas</th>
                            </tr>  
                        </thead>
                        <tbody>
                            <?php foreach($salidas as $salida=> $valor) {?>
                              
                                  <tr class="text-center">
                                    <td><?=$valor->codigo?></td>
                                    <td><?=$valor->descripcion?></td>
                                    <td><?=$valor->salida?> Und(s)</td>
                                    <td><?=$valor->ventat?>$</td>
                                  </tr>
                           
                            <?php }?>     
                        </tbody>
                      </table>
                    </div>
                </div> <!-- ./ end card-body -->
              </div>
          </div>

          <div class="col-lg-6">

          <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Productos con Poco Stock</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      
                    </div> <!-- ./ end card-tools -->
                  </div> <!-- ./ end card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr class="text-center">
                              <th>Cod. Producto</th>
                              <th>Producto</th>
                              <th>Stock Actual</th>
                            
                            </tr>  
                        </thead>
                        <tbody>
                          <?php foreach($productos as $producto=> $valor) {?>
                            <?php if($valor->stock <= 5) {?>
                              <tr class="text-center">
                                <td><?=$valor->codigo?></td>
                                <td><?=$valor->descripcion?></td>
                                <td><?=$valor->stock?> Und(s)</td>
                              
                              </tr>
                            <?php }?> 
                          <?php }?>  
                        </tbody>
                      </table>
                    </div>
                </div> <!-- ./ end card-body -->
              </div>

          </div>

        </div>

     </div>        
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

    $.ajax({
      url: "../ajax/dashboard.ajax.php",
        method: "POST",
        dataType: "json",
        success:function(respuesta){
          console.log("respuesta",respuesta);
          $("#totalProductos").html(respuesta[0](['totalProductos']))
        }
    });
  })
</script>

    