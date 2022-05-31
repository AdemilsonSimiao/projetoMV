CREATE DATABASE `dadosmv` COLLATE utf8_unicode_ci;

CREATE TABLE `comentarios` (
  `idcomentario` int NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `idatualizacao` int NOT NULL,
  `idusuario` int NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `idatualizacao` (`idatualizacao`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB;

CREATE TABLE `atualizacao` (
  `idatualizacao` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `descricao` text NOT NULL,
  `arquivoext` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idusuario` int NOT NULL,
  `atualizacaodados` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idatualizacao`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23;

INSERT INTO `atualizacao` VALUES (16,'Abobrinha','Abobrinha','png',4,'2021-11-25 23:45:35'),(17,'teste','Abacate','png',4,'2021-11-25 23:45:52'),(18,'teste','Beringela','png',4,'2021-11-25 23:46:03'),(19,'teste','Banana','png',4,'2021-11-25 23:46:21'),(20,'teste','Melancia','png',4,'2021-11-25 23:46:46'),(21,'teste','Melão','png',4,'2021-11-25 23:47:00'),(22,'teste','Rabanete','png',4,'2021-11-25 23:47:15');

CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7;

INSERT INTO `usuarios` VALUES (1,'teste','teste1@teste.com','teste');