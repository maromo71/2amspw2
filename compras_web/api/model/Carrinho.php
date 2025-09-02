<?php
// model/Carrinho.php
require_once 'Produto.php';

class Carrinho implements JsonSerializable {
    private array $produtos = [];

    public function adicionarProduto(Produto $produto): void {
        $this->produtos[] = $produto;
    }

    public function getProdutos(): array {
        return $this->produtos;
    }

    public function getTotal(): float {
        $total = 0.0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }

    /**
     * Especifica quais dados devem ser serializados para JSON.
     * Note que os objetos Produto dentro do array $this->produtos
     * também serão serializados usando seus próprios métodos jsonSerialize().
     */
    public function jsonSerialize(): array {
        return [
            'produtos' => $this->getProdutos(),
            'total' => $this->getTotal()
        ];
    }
}