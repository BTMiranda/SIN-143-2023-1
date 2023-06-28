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
    descricao VARCHAR(500),
    data DATE,
    hora TIME,
    local VARCHAR(250),
    categoria VARCHAR(45),
    preco DOUBLE,
    imagens VARCHAR(500)
);

CREATE TABLE registrations(
	id_registrations SERIAL PRIMARY KEY,
	fk_users_id INTEGER REFERENCES users(id_users),
	fk_events_id INTEGER REFERENCES users(id_events) ,
    status_pagamento BOOL
);

CREATE TABLE reviews(
	id_reviews SERIAL PRIMARY KEY,
	fk_users_id INTEGER REFERENCES users(id_users),
	fk_events_id INTEGER REFERENCES users(id_events) ,
    pontuacao DOUBLE,
	comentario VARCHAR(255)
);

CREATE TABLE categories(
	id_categories SERIAL PRIMARY KEY,
	eventos VARCHAR(45)
);

DROP TABLE registrations;
DROP TABLE reviews;
DROP TABLE categories;
DROP TABLE events;
DROP TABLE users;

CREATE TABLE events(
	id_events SERIAL PRIMARY KEY,
	titulo VARCHAR(45),
    descricao VARCHAR(255),
    data DATE,
    hora TIME,
    local VARCHAR(45),
    categoria VARCHAR(45),
    preco DOUBLE,
    imagens VARCHAR(45)
);
SELECT * FROM events ORDER BY data DESC LIMIT 3;
INSERT INTO events (titulo, descricao, data, hora, local, categoria, preco, imagens)
VALUES ('Festa na Praia', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://cinebuzz.uol.com.br/media/uploads/lollapalooza_brasil_2023_tem_datas_definidas.jpg');

INSERT INTO events (titulo, descricao, data, hora, local, categoria, preco, imagens)
VALUES ('Festa na Praia', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg'),
 ('Festa na Praia', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg'),
 ('Festa na Praia', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg');

