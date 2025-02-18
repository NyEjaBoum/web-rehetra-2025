create database isam;
use isam;

create table classeSelection( 
    idClasseSelection INT AUTO_INCREMENT PRIMARY KEY,
    nom TEXT
);

create table etudiants(
    idEtudiant INT AUTO_INCREMENT primary key,
    nom TEXT,
    prenom TEXT,
    email TEXT,
    tel TEXT,
    idClasseSelection INT,
    FOREIGN KEY (idClasseSelection) REFERENCES classeSelection (idClasseSelection)

);

INSERT INTO etudiants (nom,prenom,email,tel,idClasseSelection) VALUES ('test','test','test','test',1);



INSERT INTO classeSelection (nom) VALUES ('C');
INSERT INTO classeSelection (nom) VALUES ('S');

create table pieceSelection( 
    idPiece INT AUTO_INCREMENT PRIMARY KEY,
    idEtudiant INT,
    images TEXT,
    FOREIGN KEY (idEtudiant) REFERENCES etudiants (idEtudiant)
);

create table matiereSelection( 
    idMatiere INT AUTO_INCREMENT PRIMARY KEY,
    idClasseSelection INT,
    nom TEXT,
    FOREIGN KEY (idClasseSelection) REFERENCES classeSelection (idClasseSelection)
);

create table noteSelection(
    idNote INT AUTO_INCREMENT PRIMARY KEY,
    idEtudiant INT,
    idMatiere INT,
    valeur FLOAT,
    FOREIGN KEY (idEtudiant) REFERENCES etudiants (idEtudiant),
    FOREIGN KEY (idMatiere) REFERENCES matiereSelection (idMatiere)
);



