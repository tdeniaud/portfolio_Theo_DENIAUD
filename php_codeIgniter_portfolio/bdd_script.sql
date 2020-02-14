CREATE TABLE CV (id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
annee CHAR(4) NOT NULL, contenu TEXT, img_alt VARCHAR (75), img_url VARCHAR(150), section VARCHAR(25));


INSERT INTO CV (id,annee,contenu,img_alt,img_url, section)
VALUES (null,"2019","Administrateur CL Val de Chézine - Mandat","logo du Crédit Agricole","assets/images/CA.png","XP"),
(null,"2019","Gestionnaire comptable et achat - CDD","logo du CHU de Nantes","assets/images/CHU.png","XP"),
(null,"2018","Ajoint territoral d''animation - CEE","logo de la ville d''Orvault","assets/images/orvault.png","XP"),
(null,"2017","Coopérant - Responsable comité finances - CAPE","logo des CJS","assets/images/cjs.png","XP"),
(null,"2015","Stagiaire - Magasin de dépannage informatique - Stage","logo de l'entreprise clicmicro","assets/images/clicmicro.jpg","XP"),
(null,"2016","PSC1 - Prévention et Secours Civiques de niveau 1","logo du ministere de l'éducation","assets/images/ministere.jpg","FORMATION"),
(null,"2019","Baccalauréat général Scientifique Sciences de l''Ingénieur","logo du lycée Nicolas Appert","assets/images/logo_appert.png","FORMATION"),
(null,"2019","Etudiant en Bachelor Informatique","logo de Campus Academy","assets/images/logo.png","FORMATION")



CREATE TABLE Contact(id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT, prenom VARCHAR(25) NOT NULL,
nom VARCHAR(50) NOT NULL, societe VARCHAR(75),email VARCHAR(75) NOT NULL UNIQUE)


CREATE TABLE Message(id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT, id_contact INT UNSIGNED NOT NULL, contenu TEXT NOT NULL, updated_at DATETIME NOT NULL,
CONSTRAINT FOREIGN KEY fk_id_contact_Message_Contact_id (id_contact) REFERENCES Contact(id))
