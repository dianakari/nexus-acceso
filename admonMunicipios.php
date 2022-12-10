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
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

      <title>Municipios</title>
    </head>
    <body>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <br><br><br><br>
          <h2 class="text-center">Municipios</h2>
          <br>
          <div class="text-right">
          <i class="fas fa-plus-square fa-3x"></i>
          </div><br>
          <center>
            <table class="table table-bordered text-center">
              <thead>
              <th>No.</th>
              <th>Municipio</th>
              <th>Estado</th>
              <th>Actualizar</th>
              <th>Eliminar</th>
              </thead>
              <tr>
                <td>No</td>
                <td>Municipio</td>
                <td>Estado</td>
                <td><i class='fas fa-redo'></i></td>
                <td><i class='fas fa-trash-alt'></i></td>
              </tr>
            </table>
          </center>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js./bootstrap.min.js"></script>
  </body>
</html>