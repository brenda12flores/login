<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>

    <nav  class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo session('nombre') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>
    
     <div class="container">
      <h1 class="text-primary">CRUD con Codeigniter</h1>
      <div class="row">
        <div class="col-sm-12" >
          <form method="POST" action="<?php echo base_url().'/crear' ?>">

            <label for="concepto" class="font-weight-bold">Concepto de gasto:</label>
            <input type="text" name="concepto" id="concepto" class="form-control">

            <label for="monto" class="font-weight-bold">Monto de pago</label>
            <input type="text" name="monto" id="monto" class="form-control">

            <label for="fecha" class="font-weight-bold">Fecha</label>
            <input type="DATE" name="fecha" id="fecha" class="form-control">
            <br>
            <button class="btn btn-warning">Guardar</button>
          </form>
        </div>
      </div>
      <hr>
      <h2 class="text-primary">Listado de Gastos diarios</h2>
      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
            <table class="col">
              <tr>
                <th>Concepto de Gasto </th>
                <th>Monto de gasto</th>
                <th>Fecha</th>
              </tr>
              <?php foreach($datos as $key): ?>
              <tr>
                            <td><?php echo $key->concepto ?></td>
                            <td><?php echo $key->monto ?></td>
                            <td><?php echo $key->fecha ?></td>
                        </tr>
                        <?php endforeach; ?>
            </table>
          </div>
          
        </div>
      </div>
  
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
  </body>
</html>