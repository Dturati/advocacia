CREATE DATABASE advocacia;
USE advocacia;
CREATE TABLE cliente(
	id_cliente 			INTEGER UNIQUE AUTO_INCREMENT,
    nome_completo 		VARCHAR(200),
    cpf_cnpj			VARCHAR(200),
	RG					VARCHAR(200),
    data_hora_cadastro	DATETIME,
    PRIMARY KEY(id_cliente)
);
DROP TABLE cadastro;
SELECT * FROM cadastro;
INSERT INTO cadastro(nome) VALUES('David');