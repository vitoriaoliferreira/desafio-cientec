<link rel="stylesheet" type="text/css" href="style.css">
<?php


require_once 'Processamento.php';

$termo = $_GET['termo'];
$processamento = new Processamento();
$resultados = $processamento->buscar($termo);


//se houver resultados (ou seja, se o array nao estiver vazio)

if (count($resultados) > 0) {
    foreach ($resultados as $cidadao) {
        echo "Nome: " . $cidadao["nome"] . " | CPF: " . $cidadao["cpf"] . "<br>";
    }
} else {
    //nao ha resultados
    echo "Cidadão não encontrado.";
}

?>

<div class="form-buttons">
    <form action="index.php" method="GET">
        <button type="submit">Nova Busca</button>
    </form>

</div>