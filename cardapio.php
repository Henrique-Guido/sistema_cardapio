<?php
    require('conexao.php');
    require('crud/leitura.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Prato Fino - Cardápio</title>
    <link rel="stylesheet" href="assets/css/cardapio.css">
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
        <h2>Nosso Cardápio</h2>
        <div class="cardapio">
            <?php while($prato = $result->fetch_assoc()): ?>
            <div class="prato">
                <h4><?= $prato['nome'] ?></h4>
                <p><?= $prato['descricao'] ?></p>
                <p><?= $prato['preco'] ?></p>
                <p><?= $prato['categoria'] ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
<?php
    $conn->close();
?>