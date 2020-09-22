<?php 
session_start();
unset($_SESSION['numerodedocumento']);
session_destroy();
header("location: validacionusuario.php");
 ?>