<?php

// Verifica a sessão
session_start();

if($_SESSION["email"]) {

// Inclui a conexão do banco para a paginação
require 'model/connect.php';
require 'model/paginacao.php';

// Número de artigos por página
$users_page = 4;

// Página atual onde vamos começar a mostrar os valores
$pagina_atual = ! empty( $_GET['pagina'] ) ? (int) $_GET['pagina'] : 0;
$pagina_atual = $pagina_atual * $users_page;

// Cria a consulta para o MySQL e executa
$stmt = $conexao->prepare("SELECT * FROM user ORDER BY id DESC  LIMIT $pagina_atual,$users_page");
$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<!--Estilização da página-->
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>

<div class="container">
	
	<!-- Título da Página -->
	<h2 class="text-center m-3"> Lista de Usuários <i class="fa fa-users"></i></h2>
	<h5 class="text-right">
		<a href="view/page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus" title="NOVO USUÁRIO"></i>
		</a>
		<a href="model/logout.php" class="btn btn-danger btn-xs"
		 onclick="return confirm('Tem certeza que deseja sair ?');" >
			<i class="fa fa-sign-out-alt" title="SAIR"></i>
		</a>
		
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover table-condensed">
			<thead class="thead">
				<tr>
					<th>DATA DE EMISSÃO</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th></th>
					<th colspan="4">AÇÕES</th>
				</tr>
			</thead>
			
         <?php
         // Mostra os valores
         while( $f = $stmt->fetch() ) {
         ?>

		<tbody>
			<tr>
				<td><?php echo $f['emitted_date']; ?></td>
				<td><?php echo $f['name']; ?></td>
				<td><?php echo $f['email']; ?></td>
				<td></td>
				<td>
					<form method="POST" action="view/page_update.php">

						<input type="hidden" name="id" value="<?=$f['id']?>">

						<button class="btn btn-warning btn-xs">
							<i class="fa fa-user-edit" title="ALTERAR"></i>
						</button>
					</form>
				</td>
				<td>
					<form method="POST" action="controller/delete_user.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
						
						<input type="hidden" name="id" value="<?=$f['id']?>">

						<button class="btn btn-danger btn-xs">
							<i class="fa fa-trash" title="EXCLUIR"></i>
						</button>
					</form>
				</td>
				<td>
					<form method="POST" action="view/page_consult.php">
						
						<input type="hidden" name="id" value="<?=$f['id']?>">

						<button class="btn btn-warning btn-xs">
							<i class="fa fa-search" title="CONSULTAR"></i>
						</button>
					</form>
				</td>
			</tr>
		</tbody>
		<?php } ?>

	</table>

      <?php

      // Pegamos o valor total de artigos em uma consulta sem limite
      $total_users = $conexao->prepare("SELECT COUNT(*) AS total FROM user");
      $total_users->execute();
      $total_users = $total_users->fetch();
      $total_users = $total_users['total'];

      // Exibimos a paginação
      echo paginacao( $total_users, $users_page, 5 );?>

	</div>

	<!-- Fim da Tabela -->

</div>

<?php
}else {
	header('location:view/page_login.php');
}
?>
</body>
</html>