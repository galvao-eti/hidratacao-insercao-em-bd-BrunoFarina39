CREATE TABLE usuario (
  id SERIAL NOT NULL PRIMARY KEY,
  email VARCHAR(255)UNIQUE NOT NULL,
  senha VARCHAR(60) NOT NULL);


CREATE TABLE produto (
  idproduto SERIAL NOT NULL PRIMARY KEY,
  nome VARCHAR(45) UNIQUE NOT NULL,
  valor DECIMAL(11,2) NOT NULL);
