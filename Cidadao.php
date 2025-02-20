<?php
class Cidadao {
    public $nome;
    public $cpf;

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
}
?>