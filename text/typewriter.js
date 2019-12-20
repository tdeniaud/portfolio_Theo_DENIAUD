var i = 0;
var j = 0;
var k = 0;
var skill = 'Mes compétences'; 
var titre = 'CV de Théo DENIAUD'; 
var xp = 'Mon expérience'; 


var speed = 100; 

function typeWriter() {
  if (i < skill.length) {
    document.getElementById("skill").innerHTML += skill.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

function typeWriter_titre() {
if (j < titre.length) {
  document.getElementById("titre").innerHTML += titre.charAt(j);
  j++;
  setTimeout(typeWriter_titre, speed);
}
}

function typeWriter_xp() {
  if (k < xp.length) {
    document.getElementById("xp").innerHTML += xp.charAt(k);
    k++;
    setTimeout(typeWriter_xp, speed);
  }
  }