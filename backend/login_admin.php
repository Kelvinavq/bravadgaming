
<?php

session_start();

include("../config/connection.php");

$usuario = $_POST["usuario"];
$pass = $_POST["password"];
$password = md5($pass);

$validar_login = $connection->prepare("SELECT * FROM bg_admin WHERE bg_usuario = '$usuario' AND bg_password = '$password'");

$validar_login->execute();

if ($validar_login->rowCount() > 0) {

    $_SESSION["usuario"] = $usuario;

    header("location: ../admin/administracion.php");
}else{
    header("location: ../admin/index.php");
}

?>