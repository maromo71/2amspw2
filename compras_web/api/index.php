<?php
// api/index.php


// Inclui as classes do modelo.
require_once 'model/Produto.php';
require_once 'model/Carrinho.php';

// ESSENCIAL: Inicia ou resume a sessão do usuário.
// Isso permite que o carrinho persista entre as requisições.
session_start();

// Define que a resposta será sempre em formato JSON.
header('Content-Type: application/json');



// --- Simulação do nosso banco de dados de produtos ---
$produtosDisponiveis = [
    11 => new Produto(11, "Mouse Logitech", 89.99, "./api/images/produto11.png"),
    22 => new Produto(22, "Teclado Microsoft", 104.88, "./api/images/produto22.png"),
    33 => new Produto(33, "Monitor LG", 899.90, "./api/images/produto33.png"),
    44 => new Produto(44, "Headset Razer", 299.99, "./api/images/produto44.png"),
    55 => new Produto(55, "Webcam Intelbras", 199.99, "./api/images/produto55.png"),
    66 => new Produto(66, "Cadeira Gamer", 1299.90, "./api/images/produto66.png"),
    77 => new Produto(77, "Mesa Gamer", 499.90, "./api/images/produto77.png"),
    88 => new Produto(88, "Notebook Lenovo", 2499.90, "./api/images/produto88.png")

];

// --- Garante que o carrinho exista na sessão ---
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = new Carrinho();
}

// --- Roteador de Ações da API ---
// O JavaScript vai nos dizer o que fazer através do parâmetro 'action'.
$action = $_GET['action'] ?? null;

switch ($action) {
    case 'get_products':
        // Apenas envia a lista de produtos em formato JSON.
        echo json_encode(array_values($produtosDisponiveis));
        break;

    case 'add_to_cart':
        // Pega o ID do produto enviado pelo JavaScript.
        $productId = $_POST['id'] ?? null;
        if ($productId && isset($produtosDisponiveis[$productId])) {
            $produto = $produtosDisponiveis[$productId];
            $_SESSION['carrinho']->adicionarProduto($produto);
            echo json_encode(['success' => true, 'message' => 'Produto adicionado!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Produto não encontrado.']);
        }
        break;

    case 'get_cart':
        // Envia os produtos e o total do carrinho atual.
        $carrinho = $_SESSION['carrinho'];
        $response = [
            'produtos' => $carrinho->getProdutos(),
            'total' => $carrinho->getTotal()
        ];
        echo json_encode($response);
        break;

    default:
        // Ação desconhecida.
        echo json_encode(['success' => false, 'message' => 'Ação inválida.']);
        break;
}