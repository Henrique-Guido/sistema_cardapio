<?php
    require('conexao.php');

    if ($conn) {
        $result = $conn->query("SELECT * FROM pratos");
        $result->fetch_assoc();
    }