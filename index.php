<?php
    require('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Prato Fino - Início</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

    <div class="wrapper">
        <header>
            <nav>
                <a href="index.php">Home</a>
                <a href="cardapio.php">Cardápio</a>
                <a href="administrar-pratos.php">Administrar Pratos</a>
            </nav>
        </header>
        <main>
            <h1>Prato Fino</h1>
            <p>O melhor restaurante do Alto Tietê!</p>
            <div class="caixa-opcoes">
                <a href="cardapio.php">Cardápio</a>
                <a href="administrar-pratos.php">Administrar Pratos</a>
            </div>
        </main>
    </div>
    
</body>
</html>
<?php
    $conn->close();
?>