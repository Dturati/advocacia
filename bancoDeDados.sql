CREATE DATABASE advocacia;
USE advocacia;
CREATE TABLE cliente(
	id					INTEGER UNIQUE AUTO_INCREMENT,
    nomecompleto 		VARCHAR(200),
    cpfcnpj				VARCHAR(200),
	RG					VARCHAR(200),
    datahoracadastro	DATETIME,
    tipo				VARCHAR(200),
    PRIMARY KEY(id)
);