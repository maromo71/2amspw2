<?php 
    require_once "config.php";
    echo "Arquivo exemplo02.php\n";
    echo "olá " . $_SESSION['usuario'] . "\n";
    echo "Apresentando o id da sessão: " . session_id() . "\n";