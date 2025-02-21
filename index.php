<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cidadãos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img src="logo.png" alt="Logo" class="logo">
    <div class="container">
        <div class="form-section">
            <div class="header">
                <h1>Cadastro de Cidadãos Brasileiros</h1>
            </div>
            <form method="POST" action="cadastro.php" class="input_form">
                <div class="input-group">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" required placeholder="Digite o nome completo">
                </div>
                <div class="input-group">
                    <label>CPF</label>
                    <input type="text" name="cpf" required placeholder="Digite o CPF">
                </div>
                <div class="input-group">
                    <button class="btn" type="submit" name="save">Cadastrar</button>
                </div>
            </form>
        </div>

        <div class="form-section">
            <h1>Buscar Cidadão</h1>
            <form action="busca.php" method="GET">
                <label for="termo">Nome completo ou CPF (Apenas números):</label>
                <input type="text" id="termo" name="termo" required placeholder="Digite o nome completo ou CPF">
                <button type="submit">Buscar</button>
            </form>
        </div>
    </div>
</body>
</html>
