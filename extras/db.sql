CREATE DATABASE projetoIntegrador;
USE projetoIntegrador;

# Lembrar de confirmar cnpj
CREATE TABLE users(
	user_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    password varchar(100) NOT NULL,
    email varchar(255) NOT NULL
);

# Lembrar de colocar foreign key com assoc ao user_id
CREATE TABLE IF NOT EXISTS post(
	post_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    texto VARCHAR(500) NOT NULL,
    link VARCHAR(100) NOT NULL,
    curtidas INT DEFAULT 0,
    autor INT
);

CREATE TABLE IF NOT EXISTS likes(
	like_id INT PRIMARY KEY AUTO_INCREMENT,
    post INT NOT NULL,
    user INT NOT NULL,
    liked BOOL DEFAULT false,
    FOREIGN KEY (post) REFERENCES post(post_id),
    FOREIGN KEY (user) REFERENCES users(user_id)
);

SHOW TABLES;

INSERT INTO users VALUES(default, 'golldan', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');
INSERT INTO users VALUES(default, 'haruamai', '$2y$10$U5faV3S7lBdye8Rh1BI1FeR77Q/NPskGZIuZ0maJfrLpE6sVgQHMG');
INSERT INTO users VALUES(default, 'whipe', '$2y$10$rHWqDgxp7nwOQrj1FabO.u5KGY1UZitJbme9Nd2gR50lvO7FJX3IO');
INSERT INTO users ( username, password, email) VALUES ('asdf', 'asdf', 'asdf');

INSERT INTO post VALUES(default, 'Example', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consectetur neque sit amet nibh consectetur, a finibus turpis lobortis. Cras sit amet lacus quis eros fermentum ultricies in in augue. Nunc vestibulum placerat dui, non luctus diam convallis et. Nullam.', 'www.abc.com', 0, 1);
INSERT INTO post VALUES(default, 'Esse é o segundo titulo', 'Esse é o segundo post', 'www.def.com', 1);

INSERT INTO likes VALUES(default, 1, 7, false);
INSERT INTO likes (post, user) VALUES(1,1);
INSERT INTO likes (post, user, liked) VALUES (2, 7, 0);


