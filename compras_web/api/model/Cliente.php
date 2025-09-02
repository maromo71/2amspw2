<?php
// model/Cliente.php

class Cliente implements JsonSerializable {
    private int $id;
    private string $nome;

    public function __construct(int $id, string $nome){
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    /**
     * Especifica quais dados devem ser serializados para JSON.
     */
    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'nome' => $this->nome
        ];
    }
}