<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bravad Gaming</title>

    <link rel="icon" href="assets/img/logo.png" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/cursor.css" />
    <link rel="stylesheet" href="css/preloader.css" />


  </head>
  <body>

  <?php
  include("templates/cursor.php");
  include("templates/preloader.php");


  ?>

    <main>
      <header class="header_desk">
        <nav class="nav_left">
          <a href="somos.php">Somos</a>
          <a href="equipos.php">Equipos</a>
          <a href="calendario.php">Calendario</a>
        </nav>

        <a href="index.html" class="nav_center">
          <img src="assets/img/logo.png" alt="logo bravad gaming" />
        </a>

        <nav class="nav_right">
          <a href="">Miembros</a>
          <a href="calendario.php">Torneos</a>
          <a href="contacto.php">Contacto</a>
        </nav>
      </header>

      <header class="header_mobile">
        <a href="index.html" class="logo_mobile">
          <img src="assets/img/logo.png" alt="logo bravad gaming" />
        </a>
      </header>

      <div class="title">
        <h1>BRAVAD GAMING</h1>
      </div>

      <div class="contenedor">
        <div class="btn-1" id="btn-1">
          <div>VAMOS A JUGAR!</div>
          <div>VAMOS A JUGAR!</div>
        </div>
      </div>

      <div class="socials">
        <div class="social">
          <a href="">
            <i class="fa-brands fa-instagram sombra-1"></i>
            <i class="fa-brands fa-instagram sombra-2"></i>
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>

        <div class="social">
          <a href="">
            <i class="fa-brands fa-twitch sombra-1"></i>
            <i class="fa-brands fa-twitch sombra-2"></i>
            <i class="fa-brands fa-twitch"></i>
          </a>
        </div>

        <div class="social">
          <a href="">
            <i class="fa-brands fa-facebook sombra-1"></i>
            <i class="fa-brands fa-facebook sombra-2"></i>
            <i class="fa-brands fa-facebook"></i>
          </a>
        </div>

        <div class="social">
          <a href="">
            <i class="fa-brands fa-twitter sombra-1"></i>
            <i class="fa-brands fa-twitter sombra-2"></i>
            <i class="fa-brands fa-twitter"></i>
          </a>
        </div>

        <div class="social">
          <a href="">
            <i class="fa-brands fa-youtube sombra-1"></i>
            <i class="fa-brands fa-youtube sombra-2"></i>
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>

        <div class="social">
          <a href="">
            <i class="fa-brands fa-discord sombra-1"></i>
            <i class="fa-brands fa-discord sombra-2"></i>
            <i class="fa-brands fa-discord"></i>
          </a>
        </div>
      </div>
    </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/cursor.js"></script>


    <script
      src="https://kit.fontawesome.com/4085e1bd7e.js"
      crossorigin="anonymous"
    ></script>

    <script>
      // boton index

      const btn = document.getElementById("btn-1");

      btn.addEventListener("click", (e) => {
        window.location = "equipos.php";
      });
    </script>
  </body>
</html>
