CREATE DATABASE projetoIntegrador;
USE projetoIntegrador;

CREATE TABLE users(
	user_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    password varchar(30) NOT NULL
);

INSERT INTO users VALUES(?, 'golldan', 'tesk');
INSERT INTO users VALUES(?, 'haruamai', 'tusk');