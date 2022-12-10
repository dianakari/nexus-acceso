  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Ver Usuario</title>
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

    <?php
    include ('conexion.php');
    $correo=$_REQUEST['correo'];
    $sql="call consulta ('$correo', @res)";

    $resultado=$conexion->query($sql);
    if ($resultado->num_rows>0){
      $fila=$resultado->fetch_assoc();
      ?>

      <div class="container">
        <br><br><br><br><br>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6">
              <h3>Información del Usuario</h3>
              <br>
              <h4>Datos de Acceso</h4>
              <p>Email: <?php echo$fila['email']; ?></p>
              <br><br></div>
              <div class="col-md-6">
                <?php

                echo "<img src='usuarios/".$fila['fotoUsuario']."' width=40%'>";
                ?>
              </div>
            </div>
          </div>
          <br><br>


          <h4>Datos Personales</h4>
          <div class="container">
            <div class="row">
              Nombre: 
              <?php 
              echo$fila['nombre'];
              echo" ";
              echo$fila['aPaterno'];
              echo" ";
              echo$fila['aMaterno'];
              ?>
            </div>
            <div class="row">
              Municipio:
              <?php
              echo$fila['municipio'];
              ?>
            </div>
            <div class="row">
              <div class="col-md-6">
                Teléfono:
                <?php
                echo$fila['tel'];
                ?>
              </div>
              <div class="col-md-6">
                Celular:
                <?php
                echo$fila['cel'];
                ?>
              </div>
            </div>
            <div class="row">
              Correo:
              <?php
              echo$fila['email'];
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              Sector:
              <?php
              echo$fila['sector'];
              ?>
            </div>
            <div class="col-md-6">
              Actividad:
              <?php
              echo$fila['actividad'];
              ?>
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-md-2 text-right">
                Interés:
              </div>
              <div class="col-md-5 text-center">
                Vender
                <input type="checkbox" name="vender">
              </div>
              <div class="col-md-5 text-left">
                Comprar
                <input type="checkbox" name="comprar">
              </div>
            </div>
          </div>
          <?php
        }
        ?>
        <br>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
              <button class="btn btn-info mr-2" onclick="location.href='admonUsuario.php'">Guardar</button>
              <button class="btn btn-danger ml-2" onclick="location.href='admonUsuario.php'">Cerrar</button>
            </div>
            <div class="col-md-3">
            </div>
          </div>
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