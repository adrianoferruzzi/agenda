-- Procedimento de criação da base de dados
CREATE DATABASE IF NOT EXISTS agendadb;

-- Criar usuario do database "agenda"
CREATE USER 'agenda'@'localhost' IDENTIFIED BY '12345678';
GRANT ALL PRIVILEGES on agendadb.* to 'agenda'@'localhost';
flush privileges;

USE agendadb;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
);

CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    data DATE NOT NULL,
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
