<?php

$host="localhost";
$user="root"; 
$password="root";     
$dbname="sistema_cardapio";

$conn= new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error){
    echo "Erro ao conectar: " . $conn->connect_error;
}