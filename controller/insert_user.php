<?php
    // Verifica a sessão
    session_start();

    if($_SESSION["email"]) {
    
    // Inclui a conexão com o banco
    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $data = $_POST;

    // Realiza o cadastro
    if(isset($data) && !empty($data)){
        $manager->insertUser("user", $data);
        header("Location: ../index.php?user_add_sucess");
    }
    }
    
    else {
	header('location:../view/page_login.php');
    }

?>