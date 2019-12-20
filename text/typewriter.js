var j = 0;
var titre = 'CV de Théo DENIAUD'; 


var speed = 100; 


function typeWriter_titre() {

if (j < titre.length) {

  document.getElementById("titre").innerHTML += titre.charAt(j);
  j++;
  setTimeout(typeWriter_titre, speed);
}
}