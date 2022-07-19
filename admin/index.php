<?php
session_start();

if (isset($_SESSION["usuario"])) {
  header("location: administracion.php");
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Administrativo</title>

    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/login.css" />
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

        <form action="../backend/login_admin.php" method="POST">
          <div class="grupo_input">
            <i class="fa-solid fa-user"></i>
            <input name="usuario" id="usuario" type="text" placeholder="Nombre de usuario" />

            <div id="mensaje1" class="errores">Campo vacio</div>
          </div>

          <div class="grupo_input">
            <i class="fa-solid fa-lock"></i>
            <input name="password" id="password" type="password" placeholder="Contraseña" />

            <div id="mensaje2" class="errores">Campo vacio</div>
          </div>

          <div class="grupo_input">
            <a href="restablecer.php">Olvidaste tu contraseña?</a>
          </div>

          <div class="grupo_input">
            <input id="login" type="submit" value="Iniciar Sesión" />
          </div>
        </form>
      </div>
    </main>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/cursor.js"></script>
    <script src="../js/validacion_login.js"></script>

    <script
      src="https://kit.fontawesome.com/4085e1bd7e.js"
      crossorigin="anonymous"
    ></script>

    
  </body>
</html>
