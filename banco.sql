CREATE SCHEMA `livraria` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `livraria`.`cadastro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `rg` INT UNSIGNED NOT NULL,
  `cpf` INT UNSIGNED NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `numero_cartao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `livraria`.`compras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cadastro_id` INT NOT NULL,
  `data` DATE NOT NULL ,
  `valor` DECIMAL(3,2) NOT NULL,
	FOREIGN KEY (cadastro_id) REFERENCES cadastro(id),
	PRIMARY KEY (`id`)
);

CREATE TABLE livraria.livros (
	id INT NOT NULL AUTO_INCREMENT,
	titulo varchar(255) NOT NULL UNIQUE,
	ISBN varchar(255) NOT NULL UNIQUE,
	preco DECIMAL(3,2) NOT NULL,
	PRIMARY KEY (id)
)


ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci ;


