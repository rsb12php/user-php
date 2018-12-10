<?php
    // Verifica a sessão
    session_start();

    if($_SESSION["email"]) {
    
    // Inclui a conexão com o banco
    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $id = $_POST['id'];

    // Realiza a exclusão
    if(isset($id) && !empty($id)){
        $manager->deleteUser("user",$id);
        header("Location: ../index.php?user_deleted");
    }   

    }
    
    else {
	header('location:../view/page_login.php');
    }

?>