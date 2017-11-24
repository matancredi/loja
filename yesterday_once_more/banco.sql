CREATE SCHEMA `livraria` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `livraria`.`cadastro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `rg` VARCHAR(15) NOT NULL,
  `cpf` VARCHAR(15) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `forma_pagto` VARCHAR(20) NOT NULL,
  
  PRIMARY KEY (`id`));
  



CREATE TABLE livraria.livros (
	id INT NOT NULL AUTO_INCREMENT,
	titulo varchar(255) NOT NULL UNIQUE,
	autor varchar(255) NOT NULL ,
	ISBN varchar(255) NOT NULL UNIQUE,
	descricao varchar(255),
	editora varchar(30),
	preco DECIMAL(3,2) NOT NULL,
	PRIMARY KEY (id)
)

ALTER TABLE `livros` CHANGE `preco` `preco` FLOAT NOT NULL;

ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci ;


