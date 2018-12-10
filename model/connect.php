<?php
// Conexão utilizada na paginação
try {
    // Cria o objeto da conexão PDO
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=painel", 'root', '');    
} catch(PDOException $e) {
    // Se não conectar, mostra o erro
    echo $e->getMessage();
    exit;
}

?>