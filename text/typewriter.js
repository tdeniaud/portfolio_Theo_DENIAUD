var i = 0;
var txt = 'Mes compétences'; 
var speed = 50; 

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("skill").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}