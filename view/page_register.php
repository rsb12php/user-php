<!-- Estilização da página -->
<?php include_once 'dependencias.php'; 

// Necessário para definir o horário
date_default_timezone_set('America/Sao_Paulo');

// Verifica a sessão
session_start();

if($_SESSION["email"]) {

?>

<!-- Título da página -->
<h2 class="text-center m-3">
    Cadastro de Usuário <i class="fa fa-user-plus"></i>
</h2><hr>

<!-- Formulário de cadastro -->
<form action="../controller/insert_user.php" method="post">
    <div class="container">
        <div class="form-row">

            <div  class="col-md-6">
            Nome: <i class="fa fa-user"></i>*
            <input class="form-control" type="text" name="name" required autofocus><br><br>
            </div>
            <div class="col-md-6">
            E-mail: <i class="fa fa-envelope"></i>*
            <input class="form-control" type="email" name="email" required><br><br>
            </div>
            <div class="col-md-4">
            Senha: <i class="fa fa-key"></i>*
            <input class="form-control" type="password" name="password" required><br><br>
            </div>
            <div class="col-md-3">
            Data de Nascimento: <i class="fa fa-calendar"></i>
            <input class="form-control" type="date" name="birth" ><br>
            </div>
            <div class="col-md-3">
            Data de Emissão: <i class="fa fa-calendar"></i>
            <!-- Data automática -->
            <?php
            $emitted_date = date ("Y-m-d");
            echo"<input type='date' class='form-control' value='$emitted_date' readonly='readonly' name='emitted_date'><br>
            ";
            ?> 
            </div>
            <div class="col-md-2">
            Hora de Emissão: <i class="fa fa-calendar"></i>
            <!-- Horário automático -->
            <?php
            $emitted_hour = date ("H:i");
            echo"<input type='time' class='form-control' value='$emitted_hour' readonly='readonly' name='emitted_hour'><br>
            ";
            ?> 
            </div>
        
            <div class="col-md-3">
                <button class="btn btn-primary btn-lg">
                    Cadastrar Usuário <i class="fa fa-user-plus"></i>
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
