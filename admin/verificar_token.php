<?php
include("../config/connection.php");

$correo = $_POST['correo'];
$token = $_POST['token'];
$codigo = $_POST['codigo'];

$sql = $connection->prepare("SELECT * FROM bg_passwords WHERE bg_correo = '$correo' AND bg_token = '$token' AND bg_codigo = '$codigo'");

$sql->execute();

$correcto = false;

if ($sql->rowCount() > 0) {

    $correcto = true;
} else {

    $correcto = false;

    echo '
        <script>
        alert("El codigo de verificación introducido es incorrecto, intenta nuevamente.");
    
        window.location= "../admin/restablecer.php";
    </script>
        ';
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cambiar Contraseña</title>

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

            <?php if ($correcto) { ?>

                <form action="../backend/cambiar_password.php" method="POST">

                    <div class="grupo_input">

                        <i class="fa-solid fa-lock"></i>
                        <input name="password" id="password" type="password" placeholder="Contraseña nueva" />

                        <div id="mensaje1" class="errores">Campo vacio</div>
                    </div>
                    <div class="grupo_input">

                        <i class="fa-solid fa-lock"></i>
                        <input name="password2" id="password2" type="password" placeholder="Confirmar contraseña" />

                        <div id="mensaje2" class="errores">Campo vacio</div>
                    </div>


                        <input name="correo" type="hidden" value="<?php echo $correo ?>" />


                    <div class="grupo_input">
                        <input id="verificar_passwords" type="submit" value="Actualizar" />
                    </div>

                    <div id="mensaje3" class="errores">Las contraseñas no coinciden</div>

                </form>
            <?php } else {  ?>

                <span>Codigo incorrecto</span>

            <?php  }  ?>
        </div>
    </main>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/cursor.js"></script>
    <script src="../js/validacion_password.js"></script>


    <script src="https://kit.fontawesome.com/4085e1bd7e.js" crossorigin="anonymous"></script>


</body>

</html>