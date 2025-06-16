<?php
    require('../conexao.php');

    $id = $_GET['id'] ?? null;

    $stmt = $conn->prepare("DELETE FROM pratos WHERE id = $id");
    $stmt->execute();

    header("Location: ../administrar-pratos.php");
