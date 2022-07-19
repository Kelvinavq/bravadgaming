<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Equipos</title>

  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/equipos.css" />
  <link rel="stylesheet" href="css/cursor.css" />
  <link rel="stylesheet" href="css/preloader.css" />



</head>

<body>

  <?php
  include("templates/menu.php");
  include("templates/cursor.php");
  include("templates/preloader.php");

  ?>

  <div class="contenedor_equipo">
    <main>

      <div class="contenedor_teams">
        <div class="title_teams">
          <h1>Equipos</h1>
        </div>

        <div class="grid_teams">

          <div class="team">
            <div class="figure_team">
              <img width="100" src="assets/img/logo.png" alt="" />
            </div>

            <div class="name_team">
              <h2>Bravad Gaming</h2>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>
</body>

<script src="js/jquery.min.js"></script>
<script src="js/cursor.js"></script>
<script src="js/preloader.js"></script>
<script src="js/scripts.js"></script>
<script src="https://kit.fontawesome.com/70414ff70f.js" crossorigin="anonymous"></script>


</html>