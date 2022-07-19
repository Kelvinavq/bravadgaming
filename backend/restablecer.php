<?php

include("../config/connection.php");

$correo = $_POST["correo"];
$bytes = random_bytes(5);
$token = bin2hex($bytes);

include("../backend/mail_reset.php");


    if ($enviado) {
    
        $sql = $connection->prepare("INSERT INTO bg_passwords(bg_correo, bg_token, bg_codigo) VALUES('$correo', '$token', '$codigo')");
        
        $sql->execute();
    
        echo '
        <script>
        alert("Se ha enviado un enlace de recuperación a tu correo electrónico");
    
        window.location= "../index.php";
    </script>
        ';
        
    }
    
