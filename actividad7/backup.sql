DROP IF EXISTS DATABASE `actividad7`;

CREATE DATABASE `actividad7`;

USE `actividad7`;

-- Eliminar tabla si exite previamente
DROP TABLE IF EXISTS users;

CREATE TABLE users(
    id int unsigned auto_increment primary key,
    name varchar(50) not null,
    age int unsigned,
    email varchar(50) not null,
    password varchar(50) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);

INSERT INTO users(id, name,age,email,password) VALUES
(1, "Hector",21,"hector1@gmail.com","1234"),
(2, "Josue",23,"josue1@gmail.com","4321"),
(3, "Maria", 24, "maria@gmail.com", "maria");

CREATE TABLE posts(
    id int unsigned auto_increment primary key,
    title varchar(50) not null,
    content varchar(512),
    user_id int unsigned NOT NULL,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp,
    FOREIGN KEY (user_id) references users(id)
);

INSERT INTO posts(title,content,user_id) VALUES
("Critica al gobierno","Contenido de ejemplo sin relevancia",1),
("Recomendaciones de compra", "Recomendamos comprar computadoras...",1),
("Como hacer un panqueque","Aqui estan los pasos para realizar...",2);