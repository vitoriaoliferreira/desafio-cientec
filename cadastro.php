<?php

require_once 'Processamento.php';
require_once 'ValidaCPF.php';

$nome = trim($_POST['nome']);
//removendo os caracteres especiais
$cpf = preg_replace('/\D/','',$_POST['cpf']);

//chama a funcao de validar o cpf
if(validaCPF::validar($cpf)==false){
    die ("O CPF inserido é inválido! Tente novamente.");
}

$processamento = new Processamento();
$cidadao = new Cidadao($nome, $cpf);

if($processamento->cadastrar($cidadao)){
    echo "Cidadão cadastrado com sucesso!"; }
else {
    echo "CPF já cadastrado!";
}
?>