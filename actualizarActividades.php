<?php
include('conexion.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Actualizar Actividades</title>
  </head>
  <body>

    <div class="container">
      <br>
      <h1 class="text-center">Actualizar Actividades</h1>
      <br><br>
      <div class="form-horizontal">

        <div class="row">
          <div class="col-md-3 text-right col-form-label">
            <label for="actividad">Actividad</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="actividad">
          </div>
          <div class="col-md-3">
             <button class="btn btn-info" onclick="location.href=''">Actualizar</button>
          </div>
        </div>

          <br>
            <div class="row">
          <div class="col-md-3 text-right col-form-label">
            <label for="sector">Sector</label>
          </div>
          <div class="col-md-6">
            <select id="sector" class="form-control">
              <option>Sector...</option>
              <option>Comercio</option>
              <option>Servicios</option>
              <option>Agricultura</option>
              <option>Ganadería</option>
              <option>Pesca</option>
              <option>Minería</option>
              <option>Manufactura</option>
              <option>Artesanía</option>
              <option>Industria</option>
              <option>Energía</option>
              <option>Transporte</option>
            </select>
          </div>
          <div class="col-md-3">
             <button class="btn btn-danger" onclick="location.href=''">Cancelar</button>
          </div>
        </div>  

    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js./bootstrap.min.js"></script>
  </body>
</html>