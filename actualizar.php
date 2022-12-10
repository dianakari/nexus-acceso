<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Actualizar Usuario</title>
  </head>
  <body>

    <div class="container">
      <br>
      <h1 class="text-center">Actualizar Usuario</h1>
      <br>
      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">

          <h3>Datos de Acceso</h3>
          <form name="registro" action="" method="post">

            <div class="form-group">
              <label for="clave">Contraseña</label>
              <input type="password" class="form-control" id="clave" name="clave" placeholder="Escribe tu contraseña" required minlength="8" maxlength="12">
            </div>

            <h3>Datos Personales</h3>

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
              <label class="form-check-label"><input type="checkbox" name="cambiar" value="si"> Actualizar Foto</label>
            </div>

            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto" required>
            </div>

            <input class="btn btn-info" type="submit" name="enviar" value="Enviar">
            <button class="btn btn-danger">Cancelar</button>
          
          </form>
          <br>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js./bootstrap.min.js"></script>
  </body>
</html>