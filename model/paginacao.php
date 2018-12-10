<?php
function paginacao( 
    $total_users = 0, 
    $users_pages = 10, 
    $offset = 5
) {    
    // Obtém o número total de página
    $numero_de_paginas = floor( $total_users / $users_pages );
    
    // Obtém a página atual
    $pagina_atual = 1;
    
    // Atualiza a página atual se tiver o parâmetro pagina/valor
    if ( ! empty( $_GET['pagina'] ) ) {
        $pagina_atual = (int) $_GET['pagina'];
    }
    
    // Vamos preencher essa variável com a paginação
    $paginas = null;
    
    // Primeira página
    $paginas .= " <a class='btn btn-primary btn-xs' href='?pagina=0'>HOME</a> ";
    
    // Faz o loop da paginação
    // $pagina_atual - 1 da a possibilidade do usuário voltar
    for ( $i = ( $pagina_atual - 1 ); $i < ( $pagina_atual - 1 ) + $offset; $i++ ) {
        
        // Eliminamos a primeira página (que seria a home do site)
        if ( $i < $numero_de_paginas && $i > 0 ) {
            // A página atual
            $página = $i;
            
            // O estilo da página atual
            $estilo = null;
            
            // Verifica qual dos números é a página atual
            // E cria um estilo extremamente simples para diferenciar
            if ( $i == @$parametros[1] ) {
                $estilo = ' style="color:red;" ';
            }
            
            // Inclui os links na variável $paginas
            $paginas .= " <a class='btn btn-secondary btn-xs' $estilo href='?pagina=$página'>$página</a> ";
        }
        
    } // for

    $paginas .= " <a class='btn btn-primary btn-xs' href='?pagina=$numero_de_paginas'>Última</a> ";
    
    // Retorna o que foi criado
    return $paginas;
    
}
