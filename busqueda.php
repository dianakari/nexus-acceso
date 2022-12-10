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

    <title>Búsqueda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <a href="#" class="navbar-brand">NEXUS</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        
        <div class="navbar-nav ml-auto">
          <a href="#" class="nav-item nav-link"><i class="fas fa-cog"></i>Configuración</a>
          <a href="#" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
      </div>
    </nav>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <br><br><br><br>
            <h2 class="text-center" >Búsqueda</h2>
            <br>
            <?php
            $sql="select * from login, usuario where login.email=usuario.login_email";
            $resultado=$conexion->query($sql);
            if ($resultado->num_rows>0){
              echo "<center>";
              echo "<table class='table table-bordered text-center'>";
              echo "<th> No </th> <th> Nombre </th> <th>Municipio </th> <th> Estado </th>";
              echo "<th> Contactar </th>";
              while($fila=$resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$fila['email']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>Municipio</td>";
                echo "<td>Estado</td>";
                echo "<td><a href='verUsuario.php?correo=". $fila['email']."'><i class='fas fa-phone-square'></i> </a></td>";
              }
            }
            echo "</center>";
            ?>
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