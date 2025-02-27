<link rel="stylesheet" type="text/css" href="style.css">
<?php
require_once "Cidadao.php";

class Processamento{
    private $file = 'dados.json';



    
//conexão com o 'banco de dados'
//escolhi salvar os dados em um arquivo json para simplificar,
//mas o correto seria conectar com um banco de dados mysql

//lendo os dados do json

private function lerDados() {
    if (!file_exists($this->file)) {
        return [];
    }
    $json = file_get_contents($this->file);
    return json_decode($json, true) ?: [];
}

//salvando os dados
 private function salvarDados($dados) {
    file_put_contents($this->file, json_encode($dados, JSON_PRETTY_PRINT));
}

//cadastrando um novo cidadao
public function cadastrar(Cidadao $cidadao) {
    $dados = $this->lerDados();

//verificando se o cpf ja esta cadastrado

foreach ($dados as $registro) {
    if ($registro["cpf"] === $cidadao->cpf) {
        return false; // CPF já cadastrado
    }
}

//adicionando um novo cidadao

$dados[] = ["nome" => $cidadao->nome, "cpf" => $cidadao->cpf];
$this->salvarDados($dados);
return true;

}

//buscando pelo nome ou cpf

public function buscar($termo) {
    $dados = $this->lerDados();
    $resultado = [];
    $termo = trim($termo);
    if (empty($termo)) {
        return $resultado;
    }

    foreach ($dados as $registro) {
        if (stripos($registro["nome"], $termo) !== false || $registro["cpf"] === $termo) {
            $resultado[] = $registro;
        }
    }

    return $resultado;
    }
}

?>