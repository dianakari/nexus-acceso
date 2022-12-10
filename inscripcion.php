<?php
include ('conexion.php');
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <title>Inscripción</title>
</head>
<body>

  <div class="container">
    <br>
    <h1 class="text-center">Inscripción</h1><br>
    <div class="row">

      <div class="col-md-3"></div>
      <div class="col-md-6">

        <h3>Datos de Usuario</h3>
        <form name="registro" action="metodosUsuario.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="opcion" value="2">

          <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" class="form-control" id="nom" name="nom" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
          </div>

          <div class="form-group">
            <label for="app">Apellido Paterno</label>
            <input type="text" class="form-control" id="app" name="app" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
          </div>

          <div class="form-group">
            <label for="apm">Apellido Materno</label>
            <input type="text" class="form-control" id="apm" name="apm" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
          </div>

          <div class="form-group">
            <label for="municipio">Municipio</label>

            <?php
            $sql="select * from municipio";
            $resultado=$conexion->query($sql);
            if ($resultado){
            ?>
            <select name="municipio" class="form-control">
              <?php
              while ($fila=$resultado->fetch_assoc()){
              echo "<option value='". $fila['idmunicipio']."'>". $fila['municipio']."</option>";
              }
            echo "</select>";
            }
            ?>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="tel">Teléfono</label>
                <input type="text" class="form-control" id="tel" name="tel" required pattern="[0-9]+">
              </div>
              <div class="col-md-6">
                <label for="cel">Celular</label>
                <input type="text" class="form-control" id="cel" name="cel" required pattern="[0-9]+">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <label for="Actividad">Actividad</label>
                <?php
                $sql2="select * from actividad";
                $resultado2=$conexion->query($sql2);
                if ($resultado2){
                  ?>
                  <select name="actividad" class="form-control">
                    <?php
                    while ($fila2=$resultado2->fetch_assoc()){
                      echo "<option value='". $fila2['idactividad']."'>". $fila2['actividad']."-".$fila2['sector']."</option>";
                    }
                    echo "</select>";
                  }
                  ?>            
                </div>
              </div>
            </div>
            <br><br>

            <div class="row">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="si" name="interesVen" id="interesVen">Interés Venta
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="si" name="interesCom" id="interesCom">Interés Compra
                </label>
              </div>
            </div>
          <br><br>

          <div class="form-group">
            <label for="email">Usuario</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
          </div>

          <div class="form-group">
            <label for="clave">Contraseña</label>
            <input type="password" class="form-control" id="clave" name="clave" placeholder="Escribe tu contraseña" required minlength="8" maxlength="12">
          </div>

          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
          </div>
          <br>

          <div class="text-center">
            <input class="btn btn-info" type="submit" name="enviar" value="Enviar">
            <button class="btn btn-danger">Cancelar</button>
          </div>
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js./bootstrap.min.js"></script>
</body>
</html>