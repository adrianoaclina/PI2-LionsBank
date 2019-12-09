create database Lionsbank;
drop database Lionsbank;
use Lionsbank;

-- -----------------------------------------------------
-- Table `Conta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Lionsbank.`Conta` (
  `idConta` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `saldo` DECIMAL(10,2) NOT NULL,
  `token` VARCHAR(32) NOT NULL
  );
select * from Lionsbank.conta;
-- -----------------------------------------------------
-- Table `Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Lionsbank.`Usuarios` (
  `idUsuario` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `token` VARCHAR(32) NOT NULL);
select * from Lionsbank.Usuarios;

select * from lionsbank.usuarios where idUsuario = 15;
SELECT 
    CASE WHEN lionsbank.usuarios IS NULL THEN 1 ELSE lionsbank.usuarios END
FRO
-- -----------------------------------------------------
-- Table `Transferencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Lionsbank.`Transferencia` (
  `idTransferencia` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `depositante` VARCHAR(45) NOT NULL,
  `recebedor` VARCHAR(45) NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `dataT` DATETIME NOT NULL);
  select * from Lionsbank.Transferencia;

CREATE TABLE IF NOT EXISTS Lionsbank.`Feedbacks` (
  `idFeedbacks` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(255) NOT NULL);
select * from Lionsbank.Feedbacks;

SET SQL_MODE=0;
SET FOREIGN_KEY_CHECKS=OLD_FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS = 0;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;