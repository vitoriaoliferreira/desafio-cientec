<?php
require_once 'ValidaCPF.php';

$nome = trim($_POST['nome']);
//removendo os caracteres especiais
$cpf = preg_replace('/\D/','',$_POST['cpf']);

//chama a funcao de validar o cpf
if(validaCPF($cpf)==false){
    die ("O CPF inserido é inválido! Tente novamente.");
}

//conexão com o 'banco de dados'
//escolhi salvar os dados em um arquivo json para simplificar,
//mas o correto seria conectar com um banco de dados mysql

//lendo os dados do json
$dados = json_decode(file_get_contents("dados.json"), true) ?: [];

//verificando se o cpf ja esta cadastrado
function cadastrado($dados, $cpf) {
    foreach ($dados as $registro) {
        if ($registro["cpf"] === $cpf) {
            return true;
        }
    }
    return false;
}
if (cadastrado($dados, $cpf)) {
    die("Esse CPF já está cadastrado!");
}


//adicionando o novo registro
$dados[] = ["nome" => $nome, "cpf" => $cpf];

//salvando os dados no json

file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT));
echo "Cidadão cadastrado com sucesso!";

?>