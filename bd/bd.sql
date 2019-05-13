drop database if exists gremio; create database gremio default character set utf8 default collate utf8_general_ci;

use gremio;

create table usuarios  (
  nome varchar(40) not null,
  sobrenome varchar(45) not null,
  cidade varchar(45) not null,
  email varchar(50) not null unique,
  senha varchar(255) not null
) default charset=utf8; 

CREATE TABLE `events` (
  `id` int(11) not null PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL
);
INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Palestra', '#DF7401', '2019-04-24 10:00:00', '2019-04-24 14:00:00'),
(3, 'Jogos', '#7401DF', '2019-04-29 12:00:00', '2019-04-29 17:00:00'),
(4, 'Evento', '#DF0101', '2019-04-26 12:00:00', '2019-04-26 13:24:00');

CREATE TABLE noticias (
id_not int NOT NULL auto_increment PRIMARY KEY,
data_not date NOT NULL,
titulo_not varchar(100) NOT NULL,
sbtl_not varchar(200),
desc_not text NOT NULL,
img_not varchar(60) NOT NULL
);
 