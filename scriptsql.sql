#Banco de dados Escritório Leandro
CREATE DATABASE advogacia_turati;
USE advogacia_turati;

DELETE FROM cliente WHERE  id_cliente <> 0;
TRUNCATE TABLE local_acao;
TRUNCATE TABLE endereco;
TRUNCATE TABLE contatos;
TRUNCATE TABLE processo;
TRUNCATE TABLE local_acao;
TRUNCATE TABLE entrevista;
SELECT * FROM cliente  JOIN endereco JOIN contatos WHERE id_cliente = id_endereco AND id_contatos=id_cliente;

CREATE TABLE administrador(
	id_administrador INTEGER NOT NULL AUTO_INCREMENT,
	login_administrador VARCHAR(200) NOT NULL,
	senha_administrador INTEGER NOT NULL,
        PRIMARY KEY(id_administrador)
);
SELECT * FROM administrador;
INSERT INTO administrador(login_administrador, senha_administrador) VALUES('david','123');

CREATE TABLE cliente(
	id_cliente INTEGER NOT NULL AUTO_INCREMENT,
	primeiro_nome_cliente VARCHAR(200) NOT NULL,
	sobrenome_nome_cliente VARCHAR(200) NOT NULL,	
	cpf_cnpj_cliente VARCHAR(200) NOT NULL,
	RG_cliente VARCHAR(200) NOT NULL,
        hora_entrada_cliente TIME NOT NULL,
        data_entrada_cliente DATE NOT NULL,
        tipo_cliente VARCHAR(20) NOT NULL,
	PRIMARY KEY(id_cliente)
);
TRUNCATE TABLE cliente;
INSERT INTO cliente(primeiro_nome_cliente, sobrenome_nome_cliente , cpf_cnpj_cliente, RG_cliente, hora_entrada_cliente, data_entrada_cliente, tipo_cliente) VALUES('pirua','ranca','123','1234',CURTIME(), CURDATE(),'reu');
SELECT *FROM cliente;
DROP TABLE cliente;
DELETE FROM cliente WHERE  id_cliente <> 0;
SELECT * FROM cliente  WHERE primeiro_nome_cliente REGEXP  "da" or  sobrenome_nome_cliente regexp "da";
SELECT  * FROM cliente  WHERE primeiro_nome_cliente REGEXP "da";
SELECT concat( 		 	  	) FROM cliente;
DELETE FROM cliente WHERE id_cliente =3 ;

CREATE TABLE endereco(
	id_endereco INTEGER NOT NULL,
	endereco_endereco VARCHAR(200) NOT NULL,
	cidade_endereco VARCHAR(200) NOT NULL,
	estado_endereco VARCHAR(200) NOT NULL,
	bairro_endereco VARCHAR(200) NOT NULL,
	cep_endereco VARCHAR(200) NOT NULL,
	numero_endereco VARCHAR(200) NOT NULL,
	complemento_endereco VARCHAR(200) NOT NULL,
	referecia_endereco VARCHAR(400),
	FOREIGN KEY (id_endereco) REFERENCES cliente(id_cliente)
);
SELECT * FROM endereco;
DROP TABLE endereco;
DELETE FROM endereco WHERE id_endereco = 3;
SELECT * FROM cliente UNION SELECT * FROM endereco;
TRUNCATE TABLE endereco;

CREATE TABLE contatos(
	id_contatos INTEGER NOT NULL,
	telefone_celular_contatos INTEGER,
	telefone_residencial_contatos INTEGER,
	email_contatos VARCHAR(200),
	caixa_postal_contatos VARCHAR(200),
	FOREIGN KEY (id_contatos) REFERENCES cliente(id_cliente)
);
SELECT * FROM contatos;
DELETE FROM contatos WHERE id_contatos = 5;
TRUNCATE TABLE contatos;

CREATE TABLE entrevista(
	id_entrevista INTEGER NOT NULL,
    entrevista_entrevista TEXT,
    FOREIGN KEY (id_entrevista) REFERENCES cliente(id_cliente)
);
SELECT * FROM entrevista;
TRUNCATE TABLE entrevista;

CREATE TABLE processo(
	id_processo INTEGER NOT NULL,
	id_numero_processo VARCHAR(200),
	FOREIGN KEY (id_processo) REFERENCES cliente(id_cliente)
);
SELECT * FROM processo;
TRUNCATE TABLE processo;

CREATE TABLE acesso_usuario(
	id_acesso_usuario INTEGER NOT NULL,
	login_acesso_usuario VARCHAR(200) NOT NULL,
	senha_acesso_usuario INTEGER NOT NULL,
	acesso_externo BOOLEAN NOT NULL,
	FOREIGN KEY (id_acesso_usuario) REFERENCES cliente(id_cliente)
);
  
CREATE TABLE local_acao(
	id_local_acao INTEGER NOT NULL,
	local_acao VARCHAR(200) NOT NULL,
	endereco_local_acao VARCHAR(200),
	bairro_local_acao VARCHAR(200),
	cep_local_acao VARCHAR(200),
	numero_local_acao VARCHAR(200),
	complemento_local_acao VARCHAR(200),
	referecia_local_acao VARCHAR(200),
	FOREIGN KEY (id_local_acao) REFERENCES cliente(id_cliente)
);

CREATE TABLE anexo(
    id_anexo_cliente INTEGER,
    nome_anexo VARCHAR(200),
    arquivo_anexo VARCHAR(200)
);
SELECT * FROM anexo;

