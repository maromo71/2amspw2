<?php
// model/Pedido.php
require_once "Cliente.php";
require_once "Carrinho.php";

class Pedido implements JsonSerializable {
    private Cliente $cliente;
    private Carrinho $carrinho;
    private string $data;

    public function __construct(Cliente $cliente, Carrinho $carrinho){
        $this->cliente = $cliente;
        $this->carrinho = $carrinho;
        $this->data = date("Y-m-d H:i:s");
    }

    public function getCliente(): Cliente {
        return $this->cliente;
    }

    public function getCarrinho(): Carrinho {
        return $this->carrinho;
    }

    public function getData(): string {
        return $this->data;
    }

    /**
     * Especifica quais dados devem ser serializados para JSON.
     */
    public function jsonSerialize(): array {
        return [
            'cliente' => $this->cliente,
            'carrinho' => $this->carrinho,
            'data' => $this->data
        ];
    }
}