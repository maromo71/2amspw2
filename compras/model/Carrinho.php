<?php
    //Carrinho.php -> Será um arquivo para o carrinho de compras.
    require_once 'Produto.php';
    class Carrinho {
        //Array para armazenar os produtos no carrinho.
        private array $produtos = [];
    
        //Método para adicionar um produto ao carrinho.
        public function adicionarProduto(Produto $produto): void {
            $this->produtos[] = $produto;
        }

        //Método para retornar os produtos do carrinho. (no carrinho)
        public function getProdutos(): array {
            return $this->produtos;
        }
        //Método para retornar o valor total do carrinho.
        public function getTotal(): float {
            $total = 0.0;
            foreach ($this->produtos as $produto) {
                $total += $produto->getPreco();
            }
            return $total;
        }
    }