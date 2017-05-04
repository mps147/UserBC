CREATE DATABASE generate_passBC;

USE generate_passBC;

DROP TABLE `users`;

CREATE TABLE users(
	cod 			int not null auto_increment,
    name			varchar(50) not null default '',
    phonePrimary 	varchar(15) not null default '',
    phoneSecundy 	varchar(15) default '',
    email 			varchar(50) not null default '',
    rg 				varchar(12) not null default '',
    cpf				varchar(14) not null default '',
    primary key(cod)
);

INSERT INTO `users` (name, phonePrimary, phoneSecundy, email, rg, cpf) VALUES ('Marcelo Pereira dos Santos', '12996034859', '1236622842', 'teste@gmail.com', '55.460.222-6', '444.877.888/88');

INSERT INTO `users` (name, phonePrimary, phoneSecundy, email, rg, cpf) VALUES ('Jamil', '11996878055', '1236644785', 'jamil@gmail.com', '55.510.333-7', '55.988.999/99');

SELECT * FROM `users`;

ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

DELETE FROM users WHERE cod = 11;

SELECT rg FROM users WHERE rg = '42.861.623-9'

