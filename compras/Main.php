<?php
    //Main.php -> Será um arquivo para teste.
    //Incluir as quatro classes necessárias.
    require_once 'model/Cliente.php';
    require_once 'model/Produto.php';
    require_once 'model/Carrinho.php';
    require_once 'model/Pedido.php';

    //Simular a criação de dois clientes e exibis seus dados.
    $cliente1 = new Cliente(1, "João Silva");
    
   
    //Simular a criação de dez produtos.
    $produto1 = new Produto(101, "Notebook", 3500.00);
    $produto2 = new Produto(102, "Smartphone", 1500.00);
    $produto3 = new Produto(103, "Teclado", 200.00);
    $produto4 = new Produto(104, "Mouse", 100.00);
    $produto5 = new Produto(105, "Monitor", 500.00);
    $produto6 = new Produto(106, "Impressora", 800.00);
    $produto7 = new Produto(107, "Cadeira Gamer", 1200.00);
    $produto8 = new Produto(108, "Mesa para Escritório", 600.00);
    $produto9 = new Produto(109, "Webcam", 300.00);
    $produto10 = new Produto(110, "Headset", 400.00);

    //Simular a criação de um carrinho de compras e adicionar produtos a ele.
    $carrinhoDoJoao = new Carrinho();
    $carrinhoDoJoao->adicionarProduto($produto2);
    $carrinhoDoJoao->adicionarProduto($produto4);
    $carrinhoDoJoao->adicionarProduto($produto7);

    //Simular a criação de um pedido para o cliente 1 com o carrinho criado.
    $pedidoDoJoao = new Pedido($cliente1, $carrinhoDoJoao);

    //Exibir os detalhes do pedido.
    $pedidoDoJoao->exibirDetalhes();
