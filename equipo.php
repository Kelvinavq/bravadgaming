<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipo</title>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/equipo.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/cursor.css" />
    <link rel="stylesheet" href="css/preloader.css" />


  </head>
  <body>

  
  <?php
  include("templates/menu.php");
  include("templates/cursor.php");
  include("templates/preloader.php");

  ?>

    <div class="botones_equipo">
      <div id="btn_jugador" class="btn_equipo btn_equipo-1 selected" >Jugador</div>
      <div id="btn_coach" class="btn_equipo btn_equipo-2" >Coach</div>
    </div>

    <div class="contenedor_equipo active">
        
      <main>
        <div class="grid_equipo">
          <div class="info_equipo">
            <div class="nombre_equipo">
              <span>ROBERTO FRANCISCO RIVAS BUGUEÑO</span>
              <span>Mazino</span>
            </div>

            <div class="info_equipo_dos">
              <div class="edad">
                <span>edad</span>
                <span>29/6/2021</span>
              </div>

              <div class="nacionalidad">
                <span>Nacionalidad</span>
                <span>chileno</span>
              </div>

              <div class="rol">
                <span>rol</span>
                <span>Player</span>
              </div>

              <div class="equipo">
                <span>equipo</span>
                <span>Valorant</span>
              </div>

              <div class="social_equipo">
                <div class="title_social">
                  <span>Social</span>
                </div>

                <div class="redes_equipo">
                  <a href="">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-twitch"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="biografia">
              <span>bio</span>
              <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae necessitatibus repudiandae quam, dolorem corporis
                animi, ipsam voluptatum voluptate itaque esse exercitationem!
                Nobis, distinctio inventore incidunt saepe consequuntur
                praesentium accusantium perspiciatis.
              </span>
            </div>
          </div>

          <div class="foto_jugador">
            <img src="assets/img/logo.png" alt="" />
          </div>
        </div>
      </main>
    </div>

    <div class="contenedor_coach inactive">
        
        <main>
          <div class="grid_equipo">
            <div class="info_equipo">
              <div class="nombre_equipo">
                <span>MARTIN BOURRE</span>
                <span>Betony</span>
              </div>
  
              <div class="info_equipo_dos">
                <div class="edad">
                  <span>edad</span>
                  <span>14/11/1984</span>
                </div>
  
                <div class="nacionalidad">
                  <span>Nacionalidad</span>
                  <span>ARGENTINO</span>
                </div>
  
                <div class="rol">
                  <span>rol</span>
                  <span>COACH</span>
                </div>
  
                <div class="equipo">
                  <span>equipo</span>
                  <span>VALORANT</span>
                </div>
  
                <div class="social_equipo">
                  <div class="title_social">
                    <span>Social</span>
                  </div>
  
                  <div class="redes_equipo">
                    <a href="">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="">
                      <i class="fa-brands fa-twitch"></i>
                    </a>
                  </div>
                </div>
              </div>
  
              <div class="biografia">
                <span>bio</span>
                <span>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Recusandae necessitatibus repudiandae quam, dolorem corporis
                  animi, ipsam voluptatum voluptate itaque esse exercitationem!
                  Nobis, distinctio inventore incidunt saepe consequuntur
                  praesentium accusantium perspiciatis.
                </span>
              </div>
            </div>
  
            <div class="foto_jugador">
              <img src="assets/img/logo.png" alt="" />
            </div>
          </div>
        </main>
      </div>

    <script
      src="https://kit.fontawesome.com/4085e1bd7e.js"
      crossorigin="anonymous"
    ></script>

    <script src="js/jquery.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="js/cursor.js"></script>
    <script src="js/equipo.js"></script>
    <script src="js/preloader.js"></script>


  </body>
</html>
