CREATE DATABASE literie3000;

USE literie3000;

CREATE TABLE matelas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marque VARCHAR(60) NOT NULL,
    dimension VARCHAR(20) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    images VARCHAR(255) NOT NULL
);

INSERT INTO matelas (marque, dimension, prix, images) VALUES
('EPEDA', '90x190', 759.00, 'images/1.jpg'),
('DREAMWAY', '90x190', 809.00, 'images/2.jpg'),
('BULTEX', '140x190', 759.00, 'images/3.jpg'),
('EPEDA', '160x200', 509.00, 'images/4.jpg');