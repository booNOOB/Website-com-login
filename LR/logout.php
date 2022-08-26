<?php
SESSION_START();

unset($_SESSION["id_usuario"]);
/* unset($_SESSION["senha_user"]);
unset($_SESSION["entrar"]); */
header("location: login.php");
?>