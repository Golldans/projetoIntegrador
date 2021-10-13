CREATE DATABASE projetoIntegrador;
USE projetoIntegrador;

CREATE TABLE users(
	user_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    password varchar(100) NOT NULL
);

INSERT INTO users VALUES(default, 'golldan', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');
INSERT INTO users VALUES(default, 'haruamai', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');
INSERT INTO users VALUES(default, 'whipe', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');

SELECT * FROM users;
SELECT user_id, username FROM users WHERE 1 = 1 AND user_id = 1 AND username = 'golldan';

DROP TABLE users;