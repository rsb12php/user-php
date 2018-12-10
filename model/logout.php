<?php
// Cancela sessão
session_start();
unset($_SESSION["id"]);
unset($_SESSION["email"]);
header("Location:../view/page_login.php");
?>