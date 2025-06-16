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
    <link rel="stylesheet" href="assets/css/administrar-pratos.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="cardapio.php">Cardápio</a>
            <a href="administrar-pratos.php">Administrar Pratos</a>
        </nav>
    </header>

    <h2>Cadastre, edite ou remova um prato</h2>

    <form action="crud/inserir.php" method="post">
        <div class="campo">
            <label for="nome">Nome do Prato: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="campo">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao">
        </div>
        <div class="campo">
            <label for="preco">Preço: </label>
            <input type="number" name="preco" id="preco">
        </div>
        <div class="campo">
            <label for="categoria">Categoria: </label>
            <input type="text" name="categoria" id="categoria">
            <input type="hidden" name="id">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
    
    <div class="cardapio">
        <?php while($prato = $result->fetch_assoc()): ?>
        <div class="prato">
            <h4><?= $prato['nome'] ?></h4>
            <p><?= $prato['descricao'] ?></p>
            <p><?= $prato['preco'] ?></p>
            <p><?= $prato['categoria'] ?></p>
            <p style="display: none;"><?= $prato['id'] ?></p>
            <a href="form.php?id=<?= $prato['id'] ?>" id="editar-btn">Editar</a>
            <a href="crud/deletar.php?id=<?= $prato['id'] ?>" id="deletar-btn">Deletar</a>
        </div>
        <?php endwhile; ?>
    </div>
    
</body>
</html>
<?php
    $conn->close();
?>