<?php

include("../config/connection.php");

$correo = $_POST["correo"];
$pass = $_POST["password"];
$password2 = $_POST["password2"];


if ($pass == $password2) {
    
    $password = md5($password2);
    $sql = $connection->prepare("UPDATE bg_admin SET bg_password = '$password' WHERE bg_correo = '$correo'");

    $sql->execute();

    $mantenimiento = $connection->prepare("DELETE FROM bg_passwords WHERE bg_correo = '$correo'");
        $mantenimiento->execute();

    echo '
        <script>
        alert("Contraseña Actualizada");
    
        window.location= "../admin/index.php";
    </script>
        ';


        
}


?>