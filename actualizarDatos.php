<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Actualización de Datos</title>
  </head>
  <body>

    <div class="container">
      <br>
      <h1 class="text-center">Actualización de Datos</h1>
      <br>
      <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">

          <h3>Datos de Usuario</h3>
          <form name="registro" action="metodosUsuario.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="opcion" value="1">
          
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
            <input type="text" class="form-control" id="municipio" name="municipio" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required pattern="[0-9]+">
              </div>
              <div class="col-md-6">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" required pattern="[0-9]+">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="sector">Sector</label>
                <select class="form-control">
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
              <div class="col-md-6">
                <label for="actividad">Actividad</label>
                <select class="form-control">
                  <option>Actividad...</option>
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
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-4">Interés</div>
            <div class="col-md-4">
              <input type="checkbox" name="">
              Vender
            </div>
            <div class="col-md-4">
              <input type="checkbox" name="">
              Comprar
            </div>
          </div>
          <br>

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
      <div class="col-md-4"></div>
    </div>
  </div>
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