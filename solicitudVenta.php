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

    <title>Solicitudes</title>
  </head>
  <body>
    <br><br>
    <div class="container">
      <div class="text-center">
        <h1>Solicitudes</h1>
      </div><br>
      <h3>Ventas</h3>
      <div class="row">
        <table class="table table-bordered text-center">
          <thead>
            <th>No.</th>
            <th>Nombre</th>
            <th>Municipio</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Estado</th>
            <th>Ver</th>
            <th>Finiquitar</th>
            <th>Cancelar</th>
          </thead>
          <tr>
            <td>1</td>
            <td>Juan Pérez</td>
            <td>Acatzingo</td>
            <td>juan@gmail.com</td>
            <td>12345</td>
            <td>Proceso</td>
            <td><i class="fas fa-eye"></i></td>
            <td><i class="fas fa-money-bill-wave"></i></td>
            <td><i class="fas fa-ban"></i></td>
          </tr>
        </table>
      </div><br><br>
      <div class="row">
        <div class="col-md-3"></div>
      </div>
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js./bootstrap.min.js"></script>
    </body>
    </html>