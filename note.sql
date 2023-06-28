CREATE DATABASE `iNotes` COLLATE `utf8_unicode_ci`;

USE `iNotes`;
CREATE TABLE noteTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(255)
)

CREATE TABLE notes (
    id int AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    content VARCHAR(255),
    noteType_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (noteType_id) REFERENCES noteTypes(id)
);