var j = 0; 
var titre = 'Etudiant en première année de Bachelor Informatique'; /* Texte à écrire */


var speed = 100; /* Définition de la vitesse d'écriture du texte en ms */


function typeWriter_titre() { /* Afficher la variable titre, lettre par lettre */

if (j < titre.length) {

  document.getElementById("desc").innerHTML += titre.charAt(j);
  j++;
  setTimeout(typeWriter_titre, speed);
}
}