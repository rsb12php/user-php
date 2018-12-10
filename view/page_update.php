<?php 
   
   // Verficando sessão
   session_start();

    if($_SESSION["email"]) {

    // Includes de páginas de estilização e conexão com o banco
    include_once 'dependencias.php'; 
    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $id = $_POST['id'];

?>

<!-- Título da Página -->
<h2 class="text-center m-3">
    Atualização de Usuário <i class="fa fa-user-edit"></i>
</h2><hr>

<!-- Formulário de atualização -->
<form action="../controller/update_user.php" method="post">
    <div class="container">
        <div class="form-row">

            <?php foreach($manager->getInfo("user", $id) as $user_info): ?>

            <div  class="col-md-6">
            Nome: <i class="fa fa-user"></i>
            <input class="form-control" type="text" name="name" required autofocus 
            value="<?=$user_info['name']?>"><br><br>
            </div>
            <div class="col-md-6">
            E-mail: <i class="fa fa-envelope"></i>
            <input class="form-control" type="email" name="email" required 
            value="<?=$user_info['email']?>" ><br><br>
            </div>
            <div class="col-md-6">
            Senha: <i class="fa fa-key"></i>
            <input class="form-control" type="password" name="password" 
            value="<?=$user_info['password']?>" required><br><br>
            </div>
            <div class="col-md-6">
            Data de Nascimento: <i class="fa fa-calendar"></i>
            <input class="form-control" type="date" name="birth" 
            value="<?=$user_info['birth']?>"><br>
            </div>
        
            <div class="col-md-3">
            
            <input type="hidden" name="id" value="<?=$user_info['id']?>">

            <?php endforeach; ?>

                <button class="btn btn-warning btn-lg">
                    Atualizar Usuário <i class="fa fa-user-edit"></i>
                </button><br><br>

                <a href="../index.php">
                    Voltar
                </a>

            </div>

        </div>
    </div>
</form>

<?php

}else {
	header('location:page_login.php');
}

?>