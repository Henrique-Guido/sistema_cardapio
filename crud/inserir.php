<?php

require('../conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? null;
    $descricao = $_POST['descricao'] ?? null;
    $preco = $_POST['preco'] ?? null;
    $categoria = $_POST['categoria'] ?? null;

    $stmt = $conn->prepare("INSERT INTO pratos (nome, descricao, preco, categoria) VALUES (?,?,?,?)");
    $stmt->bind_param("ssds", $nome, $descricao, $preco, $categoria);
    $stmt->execute();

    header("Location: ../administrar-pratos.php");
}

