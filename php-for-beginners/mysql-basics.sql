/* creating databases */
CREATE DATABASE testdb;

/* select a database */
USE testdb;

/* dropping databases */
DROP DATABASE testdb;

/* creating table */
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(4)
);

CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(20),
    body TEXT
);

/* dropping table */
DROP TABLE users;

/* inserting into table */
INSERT INTO users 
(id, username, email, password) 
VALUES 
(0, 'user1', 'user1@email.com', '451108');

INSERT INTO posts (title, body) VALUES 
('Cineblog', 'O Cineblog está online desde 2003. O seu autor, J.B. Martins, vive em Coimbra e escreve com.'),
('Split Screen', 'O blog Split Screen foi criado por Tiago Ramos e hoje conta já com uma equipa de quatro bloggers.'),
('Close Up', 'O Close Up é escrito, produzido e realizado por uma equipa de duas pessoas: Diana Silva e Pedro Duarte.');

/* Updating and deleting */
UPDATE users SET username = 'user_01' WHERE id = 1;
DELETE FROM users WHERE id = 1;

/* select */
SELECT * FROM blogs;

/* order by */
SELECT * FROM users ORDER BY id DESC;

/* alter */
ALTER TABLE blogs ADD COLUMN created_at TIMESTAMP;

-- mysql -u root -p