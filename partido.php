<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/partido.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cursor.css">
    <link rel="stylesheet" href="css/preloader.css">



</head>
<body>

<?php
  include("templates/menu.php");
  include("templates/cursor.php");
  include("templates/preloader.php");

  ?>

    <div class="contenedor_partido">
        <main>
            <div class="title_partido">
                <h2>SOUTH AMERICA</h2>
                <span>FIFA 21 GLOBAL SERIES</span>
                <img width="50px" src="assets/img/logo.png" alt="">
            </div>


            <div class="vs_equipos">
                <div class="vs_left">
                    <img width="50px" src="assets/img/logo.png" alt="">
                    <span>Bravad Gaming</span>
                    <span>Argentina</span>
                </div>

                <div class="vs_center">
                    <span>VS</span>
                </div>

                <div class="vs_right">
                    <img width="50px" src="assets/img/logo.png" alt="">
                    <span>Bravad Gaming</span>
                    <span>Argentina</span>
                </div>
            </div>

            <div class="info_partido">
                <div class="fecha_partido">
                    <span>fecha</span>
                    <span>00/00/0000</span>
                </div>

                <div class="hora_partido">
                    <span>hora</span>
                    <span>00:00</span>
                </div>
            </div>
        </main>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/cursor.js"></script>
    <script src="js/preloader.js"></script>



    
</body>
</html>