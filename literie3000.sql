CREATE DATABASE litererie3000;

USE litererie3000;

CREATE TABLE matelas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marque VARCHAR(255) NOT NULL,
    dimension VARCHAR(20) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO matelas (marque, dimension, prix, image) VALUES
('EPEDA', '90x190', 759.00, 'epeda_90x190.jpg'),
('DREAMWAY', '90x190', 809.00, 'dreamway_90x190.jpg'),
('BULTEX', '140x190', 759.00, 'bultex_140x190.jpg'),
('EPEDA', '160x200', 509.00, 'epeda_160x200.jpg');