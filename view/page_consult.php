<?php 
    
    // Validando sessão
    session_start();

    if($_SESSION["email"]) {

    // Includes de páginas de estilização e conexão com o banco
    include_once 'dependencias.php'; 
    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $id = $_POST['id'];

?>
    
    <!-- Formulário de consulta -->
    <?php foreach($manager->getInfo("user", $id) as $user_info): ?>
    <h2 class="text-center m-4">
    Detalhes de <strong><?=$user_info['name']?></strong> <i class="fa fa-user-edit"></i>
    </h2><hr>

    <form action="../controller/update_user.php" method="post">
    <div class="container">
    <div class="form-row">

        <div  class="col-md-6">
        Nome: <i class="fa fa-user"></i>
        <input class="form-control" type="text" name="name" readonly="readonly"
        value="<?=$user_info['name']?>"><br><br>
        </div>
        <div class="col-md-6">
        E-mail: <i class="fa fa-envelope"></i>
        <input class="form-control" type="text" name="email" readonly="readonly"
        value="<?=$user_info['email']?>" ><br><br>
        </div>
        <div class="col-md-4">
        Data de Nascimento: <i class="fa fa-calendar"></i>
        <input class="form-control" type="date" name="birth" 
        value="<?=$user_info['birth']?>" readonly="readonly"><br>
        </div>
        <div class="col-md-4">
        Data de Emissão: <i class="fa fa-calendar"></i>
        <input class="form-control" type="date" name="emitted_date"
        value="<?=$user_info['emitted_date']?>" readonly="readonly"><br>
        </div>
        <div class="col-md-4">
        Hora de Emissão: <i class="fa fa-calendar"></i>
        <input class="form-control" type="time" name="emitted_hour" 
        value="<?=$user_info['emitted_hour']?>"  readonly="readonly"><br>
        </div>

        <div class="col-md-3">
        

        <?php endforeach; ?>

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