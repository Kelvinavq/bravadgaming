<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restablecer</title>

    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/restablecer.css" />
    <link rel="stylesheet" href="../css/cursor.css" />
    <link rel="stylesheet" href="../css/preloader.css" />
  </head>
  <body>
    <?php
  include("templates/cursor.php");

  ?>

    <main>
      <div class="contenedor_login">
        <div class="logo_login">
          <img src="../assets/img/logo.png" alt="" />
        </div>

        <form action="../backend/restablecer.php" method="POST">
          <div class="grupo_input">
          <i class="fa-solid fa-envelope"></i>
            <input name="correo" id="correo" type="email" placeholder="Ingresa tu email" required/>

            <div id="mensaje1" class="errores">Campo vacio</div>
          </div>


          <div class="grupo_input">
            <input id="restablecer" type="submit" value="Siguiente" />
          </div>
        </form>
      </div>
    </main>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/cursor.js"></script>
    <script src="../js/validacion_restablecer.js"></script>

    <script
      src="https://kit.fontawesome.com/4085e1bd7e.js"
      crossorigin="anonymous"
    ></script>

    
  </body>
</html>