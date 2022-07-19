<?php

include("../backend/validacion_sesion.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="icon" href="../assets/img/logo.png" />
  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/administracion.css" />
  <link rel="stylesheet" href="../css/cursor.css" />
  <link rel="stylesheet" href="../css/menu.css" />
  <link rel="stylesheet" href="../css/preloader.css" />
</head>

<body>
  <?php
  include("templates/menu.php");
  include("templates/cursor.php");

  ?>

  <a href="../backend/cerrar_sesion.php">Cerrar</a>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/scripts.js"></script>
  <script src="../js/preloader.js"></script>
  <script src="../js/cursor.js"></script>
  <script src="https://kit.fontawesome.com/4085e1bd7e.js" crossorigin="anonymous"></script>

</body>

</html>