<?php
// model/Produto.php

class Produto implements JsonSerializable {
    private int $id;
    private string $nome;
    private float $preco;
    private string $caminho;

    public function __construct(int $id, string $nome, float $preco, string $caminho) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->caminho = $caminho;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }
    
    public function getCaminho(): string {
        return $this->caminho;
    }


    /**
     * Especifica quais dados devem ser serializados para JSON.
     * Isso é chamado automaticamente pela função json_encode().
     */
    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'preco' => $this->preco,
            'caminho' => $this->caminho
        ];
    }
}