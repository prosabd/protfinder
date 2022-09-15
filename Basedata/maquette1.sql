#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: proteines
#------------------------------------------------------------

CREATE TABLE proteines(
        ID          Int  Auto_increment  NOT NULL ,
        Nom         Varchar (50) NOT NULL ,
        Categorie   Varchar (50) NOT NULL ,
        Prix        Int NOT NULL ,
        Quantite    Int NOT NULL ,
        Description Varchar (5) NOT NULL
	,CONSTRAINT proteines_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        ID           Int  Auto_increment  NOT NULL ,
        Nom          Varchar (50) NOT NULL ,
        Prenom       Varchar (50) NOT NULL ,
        Adresse      Varchar (100) NOT NULL ,
        Telephone    Varchar (50) NOT NULL ,
        mail         Varchar (50) NOT NULL ,
        mot_de_passe Varchar (50) NOT NULL
	,CONSTRAINT Utilisateurs_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Panier
#------------------------------------------------------------

CREATE TABLE Panier(
        ID         Int  Auto_increment  NOT NULL ,
        ID_Client  Int NOT NULL ,
        ID_Article Varchar (50) NOT NULL ,
        Date       Date NOT NULL ,
        Nombre     Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avis
#------------------------------------------------------------

CREATE TABLE Avis(
        ID              Int  Auto_increment  NOT NULL ,
        Avis_text       Varchar (50) NOT NULL ,
        ID_Utilisateurs Int NOT NULL ,
        ID_proteines    Int NOT NULL
	,CONSTRAINT Avis_PK PRIMARY KEY (ID)

	,CONSTRAINT Avis_Utilisateurs_FK FOREIGN KEY (ID_Utilisateurs) REFERENCES Utilisateurs(ID)
	,CONSTRAINT Avis_proteines0_FK FOREIGN KEY (ID_proteines) REFERENCES proteines(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acheter
#------------------------------------------------------------

CREATE TABLE acheter(
        ID              Int NOT NULL ,
        ID_Utilisateurs Int NOT NULL
	,CONSTRAINT acheter_PK PRIMARY KEY (ID,ID_Utilisateurs)

	,CONSTRAINT acheter_proteines_FK FOREIGN KEY (ID) REFERENCES proteines(ID)
	,CONSTRAINT acheter_Utilisateurs0_FK FOREIGN KEY (ID_Utilisateurs) REFERENCES Utilisateurs(ID)
)ENGINE=InnoDB;

