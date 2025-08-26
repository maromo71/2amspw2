<?php
    session_start();
    //Criando uma variável de sessão
    //para representar o usuário logado
    $_SESSION['usuario'] = "Maromo";
    $_SESSION['id_pedido'] = 11;
    $_SESSION['data_pedido'] = "2023-10-01";
    $_SESSION['carrinho'] = ["produto1", "produto2", "produto3"];
    