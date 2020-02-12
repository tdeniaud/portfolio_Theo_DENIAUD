CREATE TABLE CV (id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
annee CHAR(4) NOT NULL DEFAULT now(), contenu TEXT, img_alt VARCHAR (75), img_url VARCHAR(150) );


INSERT INTO CV (id,annee,contenu,img_alt,img_url)
VALUES (null,"2019","Administrateur CL Val de Chézine - Mandat","logo du Crédit Agricole","assets/images/CA.png"),
(null,"2019","Gestionnaire comptable et achat - CDD","logo du CHU de Nantes","assets/images/CHU.png"),
(null,"2018","Ajoint territoral d''animation - CEE","logo de la ville d''Orvault","assets/images/orvault.png"),
(null,"2017","Coopérant - Responsable comité finances - CAPE","logo des CJS","assets/images/cjs.png"),
(null,"2015","Stagiaire - Magasin de dépannage informatique - Stage","logo de l'entreprise clicmicro","assets/images/clicmicro.jpg")


