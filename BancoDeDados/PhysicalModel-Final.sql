--psql -U postgres -h localhost

CREATE DATABASE integrador;

--\c integrador

CREATE TABLE Proprietario (
    nome_prop VARCHAR(50) NOT NULL,
    cpf_prop INTEGER PRIMARY KEY NOT NULL,
    email_prop VARCHAR(50) NOT NULL,
    senha_prop VARCHAR(50) NOT NULL,
    cidade_prop VARCHAR(50) NOT NULL
);

CREATE TABLE Lote (
    id_lote SERIAL PRIMARY KEY NOT NULL,
    tam_lote INTEGER NOT NULL,
    data_cheg_lote DATE NOT NULL,
    data_venda_lote DATE NOT NULL,
    vendido_lote BOOLEAN NOT NULL
);

CREATE TABLE Vacina (
    tipo_vac VARCHAR(50) NOT NULL,
    data_vac DATE NOT NULL,
    aplic_vac BOOLEAN NOT NULL,
    id_lote INTEGER NOT NULL
);

CREATE TABLE Venda (
    venda_valor INTEGER NOT NULL,
    venda_data DATE NOT NULL,
    venda_categ VARCHAR(50) NOT NULL
);

CREATE TABLE Compra (
    compra_valor INTEGER NOT NULL,
    compra_data DATE NOT NULL,
    compra_categ VARCHAR(50) NOT NULL
);

CREATE TABLE Racao (
    cod_racao SERIAL PRIMARY KEY NOT NULL,
    qtd_estoq INTEGER NOT NULL,
    tipo_racao VARCHAR(50) NOT NULL
);
 
ALTER TABLE Vacina ADD CONSTRAINT FK_Vacina_1
    FOREIGN KEY (id_lote)
    REFERENCES lote (id_lote);