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
<<<<<<< Updated upstream

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
=======

/*
SELECT * FROM events WHERE titulo LIKE 'Fes%' 
SELECT  * FROM users;
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
*/
>>>>>>> Stashed changes
