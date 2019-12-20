var j = 0;
var titre = 'CV de Théo DENIAUD'; 


var speed = 100; /* Définition de la vitesse d'écriture du texte en ms */


function typeWriter_titre() {

if (j < titre.length) {

  document.getElementById("titre").innerHTML += titre.charAt(j);
  j++;
  setTimeout(typeWriter_titre, speed);
}
}