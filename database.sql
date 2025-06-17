CREATE DATABASE	sistema_cardapio;

USE sistema_cardapio;

CREATE TABLE pratos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL,
    descricao VARCHAR(80) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(25) NOT NULL
);