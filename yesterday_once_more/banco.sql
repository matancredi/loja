CREATE SCHEMA `loja` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `loja`.`cadastro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `rg` VARCHAR(15) NOT NULL,
  `cpf` VARCHAR(15) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `forma_pagto` VARCHAR(20) NOT NULL,
  
  PRIMARY KEY (`id`));
  

CREATE TABLE loja.discos (
	id INT NOT NULL AUTO_INCREMENT,
	titulo varchar(255) NOT NULL UNIQUE,
	artista varchar(255) NOT NULL ,
	descricao varchar(1000),
	ano int,
	gravadora varchar(30),
	categoria varchar(30),
	preco FLOAT NOT NULL,
	PRIMARY KEY (id)
);


CREATE TABLE loja.compra(
id INT NOT NULL AUTO_INCREMENT,
cpf varchar(15),
id_disco int,
primary key (id)
);

INSERT into COMPRA (cpf, id_disco) VALUES ('42003546833',2);
INSERT into COMPRA (cpf, id_disco) VALUES ('42003546833',4);

INSERT INTO cadastro (nome, data_nasc, rg, cpf, endereco, telefone, forma_pagto) values ("Mariana Fernandes", "28/07/96", "537266678","42003546833","Rua Jabuticaba, 80","46935555","boleto");

INSERT INTO loja.discos (id, titulo, artista, descricao, ano, gravadora, categoria, preco) VALUES (1, 'Saúde', 'Rita Lee', 'Saúde é um álbum lançado pela cantora de brasileira Rita Lee 
em 1981. Neste disco, vê-se grande influência da New Wave, em relação aos álbuns anteriores de Rita Lee, 
que tinham uma maior influência da música pop. Algumas canções deste álbum ficaram eternizadas, sendo bem lembradas 
até os dias de hoje. Entre eles estão: "Mutante", que foi sucesso absoluto de Rita e também, em 2002, na voz de Daniela Mercury; 
"Saúde", um dos maiores hits do ano, com uma levada mais rock; e "Banho de Espuma", também outro estouro em 1981, contendo uma batida mais pop. 
Também são bem lembradas: "Atlântida", que, na época, entrou na trilha sonora da novela Sétimo Sentido da Rede Globo; e "Tititi (Galinhagem)
famosa pela regravação de 1985 pela banda Metrô, um grande sucesso nesse ano.', 1981, 'Som Livre', 'pop brasileiro', 30.99);

INSERT INTO loja.discos (id, titulo, artista, descricao, ano, gravadora, categoria, preco) VALUES (2, 'Elis e Tom', 'Elis Regina e Tom Jobim', 'O disco é o encontro de dois dos 
maiores nomes da música popular brasileira e conta com arranjos de César Camargo Mariano, pianista e então marido de Elis, que inovou utilizando instrumentos elétricos na bossa nova. 
Em uma forma contida e suave, ela interpreta diversos clássicos do gênero, como "Águas de Março" (que se tornou o maior sucesso do disco), "Corcovado", "Inútil Paisagem", 
às vezes em dueto com Jobim, que em outros momentos apenas a acompanha no violão ou piano. "Modinha" foi a única canção do disco a ser totalmente arranjada por Jobim.
Elis & Tom foi um sucesso de vendas e de crítica, e continua sendo aclamado até os dias de hoje por músicos e críticos no mundo inteiro. No seu aniversário de 30 anos, em 2004, 
contou com um relançamento especial e, até 2013, foi um dos discos destacados nas paradas de vendas do iTunes no Brasil. Além disso, Elis & Tom tem sido lembrado nos principais livros, 
compêndios e enciclopédias brasileiras e internacionais de música e, em 2007, foi escolhido por jornalistas e críticos musicais como o 11º melhor disco da música brasileira 
pela Rolling Stone.', 1974, 'Phonogram', 'bossa-nova', 55.00);

INSERT INTO loja.discos (id, titulo, artista, descricao, ano, gravadora, categoria, preco) VALUES (3, 'Made in America', 'The Carpenters', 'Made in America (A&M SP 3723) 
é o nono álbum de estúdio e o último editado pelos Carpenters antes da morte da vocalista Karen, em 16 de junho de 1981. 
Lançado em junho de 1981, este álbum alcançou a 12ª posição nas paradas britânicas e a 52ª posição nas paradas americanas.', 1981, 'A&M Records', 'soft rock', 64.99);

INSERT INTO loja.discos (id, titulo, artista, descricao, ano, gravadora, categoria, preco) VALUES (4, 'A Hard Days Night', 'The Beatles', 'A Hard Days Night é o terceiro álbum 
da banda britânica The Beatles. Lançado em 1964, na Inglaterra, acompanhando o lançamento do filme homônimo.
O álbum foi o primeiro a trazer só composições de Lennon/McCartney. Trouxe também músicas de sucesso como "A Hard Days Night", "I Should Have Known Better", "If I Fell", 
"Cant Buy Me Love" e a primeira balada popular escrita por Paul McCartney, "And I Love Her".', 1964, 'Parlophone', 'classic rock', 43.99);




