<?php
    
    require_once "config.php";
    echo "Id da sessão: " . session_id() . "\n";
    echo "Antes de destruir a sessão:\n";
    print_r($_SESSION);
    echo "\n";
    echo "Destruindo a sessão...\n";
    session_unset(); // Limpa todas as variáveis de sessão
    session_destroy(); // Destrói a sessão
    echo "Sessão destruída.\n";
    echo "Após destruir a sessão:\n";
    print_r($_SESSION);
    

    