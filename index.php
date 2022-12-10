<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Login</title>
  </head>
  <body>
    <div class="container text-center">
      <br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <img src="imagenes/usuario.png" width="60%">
        </div>
        <div class="col-md-4"></div>
      </div>

      <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
        <br>
         <form name="login" action="" method="post">

          <div class="form-group row"> 
           <label for="correo" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Email" required="">
            </div>
          </div>

          <div class="form-group row"> 
           <label for="clave" class="col-sm-3 col-form-label">Contraseña</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required maxlength="12" minlength="8" pattern="[A-Za-z0-9]+">
            </div>
          </div>

          <input class="btn btn-info" type="submit" name="enviar" value="Enviar">

         </form>
          <br>
         <p>¿Eres usuario nuevo? <a href="">Regístrate</a></p>
         <a href="">¿Olvidaste tu contraseña?</a>

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