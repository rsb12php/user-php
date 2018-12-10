<?php

// Verificando sessão
session_start();

// Conexão do banco e validação de formulário
if(count($_POST)>0) {

$con = mysqli_connect('127.0.0.1','root','','painel') or die('Conexão não permitida');

$result = mysqli_query($con,"SELECT * FROM user WHERE email='" . $_POST["email"] . "' 
and password = '". $_POST["password"]."'");

$row = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["email"] = $row[email];
} 

}

// Redirecionamento para a página inicial (Usuário Logado)
if(isset($_SESSION["id"])) {
header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Estilização da página -->
	<?php include_once 'dependencias.php'; ?>
  <style>
    body{
      background-color:#eee;
    }
  </style>
</head>

<body>
<!-- Formulário de Login -->
<div class="wrapper">
  <form method="post" class="form-signin">
    <h2 class="form-signin-heading text-center">Login</h2>
    <div class="form-group">
      <input type="email" class="form-control" id="email"
      placeholder="user@gmail.com" name="email" required="" autofocus="">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="*********" name="password">
      <input type="hidden" value="<?=$_POST['name']?>">
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block">Acessar</button>
  </form>
</div>


