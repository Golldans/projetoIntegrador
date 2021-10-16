CREATE DATABASE projetoIntegrador;
USE projetoIntegrador;

CREATE TABLE users(
	user_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    password varchar(100) NOT NULL,
    email varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS post(
	post_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    texto VARCHAR(100) NOT NULL,
    link VARCHAR(100) NOT NULL
);

INSERT INTO users VALUES(default, 'golldan', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');
INSERT INTO users VALUES(default, 'haruamai', '$2y$10$U5faV3S7lBdye8Rh1BI1FeR77Q/NPskGZIuZ0maJfrLpE6sVgQHMG');
INSERT INTO users VALUES(default, 'whipe', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');

INSERT INTO post VALUES(default, 'Esse é o primeiro titulo', 'Esse é o primeiro post', 'www.abc.com');
INSERT INTO post VALUES(default, 'Esse é o segundo titulo', 'Esse é o segundo post', 'www.def.com');


SELECT * FROM post;
SELECT * FROM users;
SELECT user_id, username FROM users WHERE 1 = 1 AND user_id = 1 AND username = 'golldan';

DROP TABLE post;
DROP TABLE users;