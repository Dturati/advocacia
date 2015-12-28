CREATE DATABASE advocacia;
USE advocacia;
CREATE TABLE cliente(
	id					INTEGER UNIQUE AUTO_INCREMENT,
    nomecompleto 		VARCHAR(200),
    cpfcnpj				VARCHAR(200),
	RG					VARCHAR(200),
    datahoracadastro	DATETIME,
    PRIMARY KEY(idcliente)
);
DROP TABLE cliente;
SELECT * FROM cliente;
INSERT INTO cliente(nomecompleto) 
VALUES('Pedro Silva');
TRUNCATE cliente;