CREATE TABLE users(
	id_users SERIAL PRIMARY KEY,
	nome VARCHAR(45),
    email VARCHAR(45),
    senha VARCHAR(45),
    tipo VARCHAR(45)
);

CREATE TABLE events(
	id_events SERIAL PRIMARY KEY,
	titulo VARCHAR(45),
    descricao VARCHAR(255),
    data date,
    hora time,
    local VARCHAR(45),
    categoria VARCHAR(45),
    preco DOUBLE,
    imagens VARCHAR(45)
);

CREATE TABLE registrations(
	id_registrations SERIAL PRIMARY KEY,
	users_id INT NOT NULL,
	events_id INT NOT NULL,
    status_pagamento BOOL
);

CREATE TABLE reviews(
	id_reviews SERIAL PRIMARY KEY,
	users_id INT NOT NULL,
	events_id INT NOT NULL,
    pontuacao DOUBLE,
	comentario VARCHAR(255)
);


/*
CREATE TABLE categories(
	id_categories SERIAL PRIMARY KEY,
	festas 
);
*/
-- reviews: Armazena informações sobre avaliações e comentários de eventos, incluindo o usuário, o evento, a pontuação e o texto do comentário.
-- categories: Armazena informações sobre as categorias de eventos, como festas, bares, shows, música ao vivo, teatros, cursos, feiras, etc.