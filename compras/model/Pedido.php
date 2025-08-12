<?php
 require_once "Cliente.php";
 require_once "Carrinho.php";
 date_default_timezone_set('America/Sao_Paulo');
 class Pedido {
    private Cliente $cliente;
    private Carrinho $carrinho;
    private string $data;
    //colocar dois sublinhados para não dar erro de sintaxe
    public function __construct(Cliente $cliente, Carrinho $carrinho){
        $this->cliente = $cliente;
        $this->carrinho = $carrinho;
        $this->data = date("d/m/Y H:i:s");
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
    public function exibirDetalhes(): void {
        echo "Detalho do Pedido \n";
        echo "------------------\n";
        echo "Cliente: " . $this->cliente->getNome() .  "\n";
        echo "Data do Pedido: " .   $this->data . "\n";
        echo "------------------ \n";
        echo "Itens do Carrinho:\n";
        echo "------------------\n";
        // para exibir os itens do carrinho usamos o for each
        foreach ($this->carrinho->getProdutos() as $item) {
            echo $item->exibirDetalhes() . "\n";
        }
        echo "-------------------\n";
        echo "Total da compra: R$ " .
         number_format($this->carrinho->getTotal(), 2, ',', '.') . "\n";
        echo "-------------------\n";
        echo "Obrigado pela compra!\n";
    }
 }