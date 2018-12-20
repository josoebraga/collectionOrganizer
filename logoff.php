<?php
#header( 'Content-Type: text/html; charset=ISO8859-1' );
session_start();

session_destroy();
unset($_SESSION['id']);
unset($_SESSION['login']);
unset($_SESSION['nome']);

header('location:login.php');


?>
