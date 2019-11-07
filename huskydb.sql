CREATE DATABASE huskydb;
USE huskydb;

CREATE TABLE pedido(
	id int NOT NULL AUTO_INCREMENT,
	nome_cliente varchar(50) NOT NULL,
	end_origem varchar(50) NOT NULL,
	end_destino varchar(50) NOT NULL,
	PRIMARY KEY (id)
);
