CREATE DATABASE IF NOT EXISTS `6.1.proyecto-mvc`;

USE `6.1.proyecto-mvc`;

CREATE TABLE
    IF NOT EXISTS courses (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name varchar(50) NOT NULL,
        description varchar(255),
        start_date date,
        end_date date
    );

INSERT INTO
    courses (id, name, description, start_date, end_date)
VALUES
    (
        1,
        'Curso de Programación',
        'Curso de programación en Python',
        '2023-01-01',
        '2023-06-30'
    ),
    (
        2,
        'Curso de Diseño Web',
        'Curso de diseño web con HTML y CSS',
        '2023-02-01',
        '2023-07-31'
    ),
    (
        3,
        'Curso de Marketing Digital',
        'Curso de marketing digital y redes sociales',
        '2023-03-01',
        '2023-08-31'
    );

CREATE TABLE
    IF NOT EXISTS students (
        ci varchar(12) PRIMARY KEY,
        name varchar(50) NOT NULL,
        last_name varchar(50),
        birth_date date,
        cellphone varchar(8),
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  course_id int NOT NULL,
        FOREIGN KEY (course_id) REFERENCES courses (id) ON DELETE CASCADE ON UPDATE CASCADE
    );

INSERT INTO
    students (ci, name, last_name, birth_date, cellphone, course_id)
VALUES
    (
        '12345678',
        'Juan',
        'Pérez',
        '1990-01-01',
        '12345678',
        1
    ),
    (
        '87654321',
        'María',
        'Gómez',
        '1995-02-02',
        '87654321',
        2
    ),
    (
        '11223344',
        'Pedro',
        'López',
        '1985-03-03',
        '11223344',
        3
    );