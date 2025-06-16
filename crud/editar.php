<?php

    require('../conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_GET['id'] ?? null;
        $nome = $_POST['nome'] ?? null;
        $descricao = $_POST['descricao'] ?? null;
        $preco = $_POST['preco'] ?? null;
        $categoria = $_POST['categoria'] ?? null;

        if (!$id || !$nome || !$descricao || !$preco || !$categoria) {
            echo "Todos os campos são obrigatórios!";
            exit;
        }

        // Prevenir SQL Injection usando prepared statement
        $stmt = $conn->prepare("UPDATE pratos SET nome=?, descricao=?, preco=?, categoria=? WHERE id=?");

        if ($stmt) {
            $stmt->bind_param("ssdsi", $nome, $descricao, $preco, $categoria, $id);
            $stmt->execute();

            // Verificar se a atualização foi realizada
            if ($stmt->affected_rows > 0) {
                // Redireciona para a página de administração
                header('Location: ../administrar-pratos.php');
                exit; // Garantir que o código não continue executando após o redirecionamento
            } else {
                echo "Erro na atualização ou nenhum dado foi alterado." . "<br>";
                echo "<a href='../index.php'>Início</a>";
            }
        } else {
            echo "Erro ao preparar a consulta.";
        }
    }

?>
