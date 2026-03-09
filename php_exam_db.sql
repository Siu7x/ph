CREATE DATABASE IF NOT EXISTS php_exam;
USE php_exam;

-- Table User
CREATE TABLE User (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    solde FLOAT DEFAULT 0,
    photo_profil VARCHAR(255),
    role VARCHAR(20) DEFAULT 'user'
);

-- Table Article
CREATE TABLE Article (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    prix FLOAT NOT NULL,
    date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_auteur INT,
    image_lien VARCHAR(255),
    FOREIGN KEY (id_auteur) REFERENCES User(id)
);

-- Table Cart
CREATE TABLE Cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_article INT,
    FOREIGN KEY (id_user) REFERENCES User(id),
    FOREIGN KEY (id_article) REFERENCES Article(id)
);

-- Table Stock
CREATE TABLE Stock (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_article INT,
    quantite INT DEFAULT 0,
    FOREIGN KEY (id_article) REFERENCES Article(id)
);

-- Table Invoice
CREATE TABLE Invoice (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    date_transaction DATETIME DEFAULT CURRENT_TIMESTAMP,
    montant FLOAT NOT NULL,
    adresse_facturation VARCHAR(255),
    ville_facturation VARCHAR(100),
    code_postal_facturation VARCHAR(10),
    FOREIGN KEY (id_user) REFERENCES User(id)
);