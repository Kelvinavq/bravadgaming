<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo '

<script>
alert("Debes iniciar sesión");
</script>
  
  ';

  header("location: index.php");
  session_destroy();
  die();
}

?>