<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Recuperar</title>
  </head>
  <body>

    <div class="container text-center">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <br>
          <h1>¿Olvidaste tu Contraseña?</h1>
          <br>
          <h3>Escribe el email que registraste</h3>
          <br>
          <form name="recuperar" method="post" action=""> 
            <div class="form-group row">
                <label for="correo" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Email">
              </div>
            </div>

            <input class="btn btn-info" type="submit" name="enviar" value="Enviar">
            <button class="btn btn-danger">Cancelar</button>

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