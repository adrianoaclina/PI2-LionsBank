create database BankAccount;
drop database bankaccount;
use BankAccount;

-- -----------------------------------------------------
-- Table `Banco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco` (
  `idBanco` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45)
  );
insert into Banco(nome) values ("Bank Account");
-- -----------------------------------------------------
-- Table `Conta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Conta` (
  `idConta` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `saldo` DOUBLE NOT NULL,
  `token` VARCHAR(32) NOT NULL
  );
select * from Conta;
-- -----------------------------------------------------
-- Table `Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `idUsuario` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `token` VARCHAR(32) NOT NULL);
  
select * from Usuarios;

-- -----------------------------------------------------
-- Table `Transferencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Transferencia` (
  `idTransferencia` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `remetente` VARCHAR(45) NOT NULL,
  `destinatario` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `data` DATETIME NOT NULL);

SET SQL_MODE=0;
SET FOREIGN_KEY_CHECKS=OLD_FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS = 0;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;