<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cidadãos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Cadastro de Cidadãos Brasileiros</h2>
    </div>
    <form method="post" action="cadastro.php" class="input_form">
        <div class="input-group">
            <label>Nome Completo</label>
            <input type="text" name="nome" required placeholder="Digite o nome completo">
        </div>
        <div class="input-group">
            <label>CPF</label>
            <input type="text" name="cpf" required placeholder="Digite o CPF">
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="save" >Salvar</button>
        </div>
    </form>

    <h2>Buscar Cidadão</h2>
    <form action="" method="get">
        <label for="termo">Nome ou CPF:</label>
        <input type="text" id="termo" name="termo" required placeholder="Digite o nome ou CPF">
        <button type="submit">Buscar</button>
    </form>