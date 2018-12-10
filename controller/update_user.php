<?php
    // Verifica a sessão
    session_start();

    if($_SESSION["email"]) {
    
    // Inclui a conexão com o banco
    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $update_user = $_POST;
    $id = $_POST['id'];
    
    // Realiza a atualização
    if(isset($update_user) && !empty($update_user)){
        $manager->updateUser("user", $update_user,$id);
        header("Location: ../index.php?user_updated");
    }
    }
    
    else {
	header('location:../view/page_login.php');
    }

?>