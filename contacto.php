<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>

    <link rel="icon" href="assets/img/logo.png" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/contacto.css" />
    <link rel="stylesheet" href="css/cursor.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/preloader.css" />


  </head>
  <body>

 <?php
  include("templates/cursor.php");
  include("templates/menu.php");
  include("templates/preloader.php");

  ?> 


  <div class="contenedor_contacto">
    <main>
        <div class="contacto">
            <div class="left_contacto">
                <div class="texts_left">
                    <h2>¿Tienes alguna duda?</h2>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptatum quas facere esse tempore voluptatem omnis accusamus eligendi officiis sint?</span>
                </div>

                <form action="">
                    <div class="grupo_input">
                        <label for="">Nombre</label>
                        <input type="text"  id="" placeholder="Ingresa tu nombre">
                    </div>

                    <div class="grupo_input">
                        <label for="">Apellido</label>
                        <input type="text" id="" placeholder="Ingresa tu apellido">
                    </div>

                    <div class="grupo_input">
                        <label for="">Correo electrónico</label>
                        <input type="email" id="" placeholder="Ingresa tu email">
                    </div>

                    <div class="grupo_input">
                        <label for="">Mensaje</label>
                        <textarea cols="30" id="" rows="10" placeholder="Déjanos tu mensaje"></textarea>
                    </div>

                    <div class="grupo_input">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>

            <div class="right_contacto">
                <div class="fondo"></div>
            </div>
        </div>
    </main>
  </div>

 
    

    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/cursor.js"></script>


    <script
      src="https://kit.fontawesome.com/4085e1bd7e.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
