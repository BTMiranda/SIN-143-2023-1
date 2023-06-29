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
    imagens VARCHAR(500),
    id_criador INTEGER
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
	comentario VARCHAR(500)
);

/*
CREATE TABLE categories(
	id_categories SERIAL PRIMARY KEY,
	eventos VARCHAR(45)
);
*/

DROP TABLE registrations;
DROP TABLE reviews;
DROP TABLE events;
DROP TABLE users;
-- DROP TABLE categories;

/*
SELECT * FROM events;
SELECT * FROM reviews;
DELETE FROM reviews;

INSERT INTO users(id_users,nome,email,senha,tipo) VALUES
(1, 'Ademiro', 'adm@adm', 'adm123', 'Administrador'),
(2, 'Dummy', 'dummy@adm', 'dummy123', 'Organizador');

INSERT INTO events (titulo, descricao, data, hora, id_criador, local, categoria, preco, imagens)
VALUES 
 ('Teatro', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 1 ,'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg'),
 ('User 2', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 2 ,'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg'),
 ('Festa', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 1 ,'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg'),
 ('Bar', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 1 ,'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://diariodocomercio.com.br/wp-content/uploads/2023/01/festa-pic.jpg'),
 ('Lola', 'A vida é uma jornada cheia de altos e baixos, desafios e oportunidades. Cada dia é uma nova página em branco esperando para ser escrita. É importante lembrar que mesmo nos momentos difíceis, há sempre espaço para crescimento e aprendizado. Acredite em si mesmo, siga em frente e abrace cada experiência que a vida lhe oferece. Nunca subestime o poder de uma atitude positiva e da determinação. Seja resiliente, busque seus sonhos e nunca pare de acreditar que coisas maravilhosas estão por vir.',
 '2023-09-15', '23:00', 1 ,'Rua Barretos de Cachias, Bairro Villa Rica, número 897 - Belo Horizonte - Minas Gerais', 'Festa', 50.00, 'https://cinebuzz.uol.com.br/media/uploads/lollapalooza_brasil_2023_tem_datas_definidas.jpg');

*/