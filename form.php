<?php 
    require('conexao.php');

    $id = $_GET['id'] ?? null;

    if (!$id) {
        echo "ID inválido ou não fornecido.";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM pratos WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $prato = $result->fetch_assoc();
    } else {
        echo "Prato não encontrado.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Edição</title>
    <link rel="stylesheet" href="assets/css/form.css">
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

        <h2>Atualize o prato</h2>
        <form action="crud/editar.php?id=<?= $prato['id'] ?>" method="post">
            <div class="campo">
                <label for="nome">Nome do Prato: </label>
                <input type="text" name="nome" id="nome" value="<?= $prato['nome'] ?>" required>
            </div>
            <div class="campo">
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao" value="<?= $prato['descricao'] ?>" required>
            </div>
            <div class="campo">
                <label for="preco">Preço: </label>
                <input type="number" name="preco" step="0.01" min="0" id="preco" value="<?= $prato['preco'] ?>" required>
            </div>
            <div class="campo">
                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" id="categoria" value="<?= $prato['categoria'] ?>" required>
                <input type="hidden" name="id" value="<?= $prato['id'] ?>">
            </div>
            <div class="campo">
                <input type="submit" value="Atualizar">
                <a href="administrar-pratos.php" id="cancelar-btn">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
