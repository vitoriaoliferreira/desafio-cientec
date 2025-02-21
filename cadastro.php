<link rel="stylesheet" type="text/css" href="style.css">
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

<div class="form-buttons">
<form action="index.php" method="GET">
        <button type="submit">Novo Cadastro</button>
    </form>
</div>