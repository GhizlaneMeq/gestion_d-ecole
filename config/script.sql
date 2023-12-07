CREATE DATABASE gestion_ecole;

CREATE TABLE categories (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(20)
);

CREATE TABLE clubs (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(50) unique,
    description varchar(255),
    image varchar(255)
);

CREATE TABLE livres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    resume TEXT NOT NULL,
    nbrPage INT NOT NULL,
    image VARCHAR(255) NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

CREATE TABLE roles (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(20)
);

CREATE TABLE utilisateurs (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(25),
    email varchar(100),
    phone varchar(20),
    image varchar(50),
    genre ENUM('male','female'),
    club_id INT NULL,
    role_id INT,
    FOREIGN KEY (club_id) REFERENCES clubs(id) ,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
    
);

CREATE TABLE reservations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date_debut DATE,
    date_fin DATE,
    status ENUM('valider','non valider','encour de traitement') DEFAULT 'encour de traitement',
    utilisateur_id INT,
    livre_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE,
    FOREIGN KEY (livre_id) REFERENCES livres(id) ON DELETE CASCADE
);


CREATE TABLE feedbacks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date DATE,
    contenu TEXT NOT NULL,
    utilisateur_id INT,
    livre_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE,
    FOREIGN KEY (livre_id) REFERENCES livres(id) ON DELETE CASCADE
);


CREATE TABLE etudiants(
    id INT PRIMARY KEY AUTO_INCREMENT,
    level varchar(10),
    promotion varchar(20),
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
);


CREATE TABLE matieres(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(20)
);

CREATE TABLE groupes(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(20),
    matiere_id INT,
    FOREIGN KEY (matiere_id) REFERENCES matieres(id) ON DELETE CASCADE
);
CREATE TABLE professeurs(
    id int PRIMARY KEY AUTO_INCREMENT,
    cin varchar(10) unique,
    matiere_id INT,
    utilisateur_id INT,
    groupe_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE,
    FOREIGN KEY (matiere_id) REFERENCES matieres(id),
    FOREIGN KEY (groupe_id) REFERENCES groupes(id) 

);

CREATE TABLE postes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    level varchar(10),
    promotion varchar(20),
    utilisateur_id INT,
    groupe_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE,
    FOREIGN KEY (groupe_id) REFERENCES groupes(id) ON DELETE CASCADE
);

CREATE TABLE etudiants_professeurs(
    etudiant_id INT,
    professeur_id INT,
    FOREIGN KEY (etudiant_id) REFERENCES etudiants(id) ON DELETE CASCADE,
    FOREIGN KEY (professeur_id) REFERENCES professeurs(id) ON DELETE CASCADE
);

CREATE TABLE etudiants_groupes(
    etudiant_id INT,
    groupe_id INT,
    FOREIGN KEY (etudiant_id) REFERENCES etudiants(id) ON DELETE CASCADE,
    FOREIGN KEY (groupe_id) REFERENCES groupes(id) ON DELETE CASCADE
);
CREATE TABLE etudiants_matieres(
    etudiant_id INT,
    matiere_id INT,
    FOREIGN KEY (etudiant_id) REFERENCES etudiants(id) ON DELETE CASCADE,
    FOREIGN KEY (matiere_id) REFERENCES matieres(id) ON DELETE CASCADE
);






