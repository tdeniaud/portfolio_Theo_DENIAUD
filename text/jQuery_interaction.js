$(document).ready(function(){

    /* Permet d'afficher la descritpion au passage de la souris sur l'image */

    $(document.getElementById("reseaux-photo")).hover(function(){$(document.getElementById("desc")).css("display","block");}, 
    /* Désactive le bloc desc lorsque la souris n'est plus sur l'image */
    function(){$(document.getElementById("desc")).css("display","none");});
    /* Permet de maintenir l'affichage de la description sur le bloc desc */
    $(document.getElementById("desc")).hover(function(){$(document.getElementById("desc")).css("display","block");}, 
    function(){$(document.getElementById("desc")).css("display","none");});
});

$(document).ready(function(){
    /* Permet d'afficher la descritpion au passage de la souris sur l'image */

    $(document.getElementById("reseaux-photo2")).hover(function(){$(document.getElementById("desc2")).css("display","block");},
    /* Désactive le bloc desc lorsque la souris n'est plus sur l'image */ 
    function(){$(document.getElementById("desc2")).css("display","none");});
    /* Permet de maintenir l'affichage de la description sur le bloc desc */
    $(document.getElementById("desc2")).hover(function(){$(document.getElementById("desc2")).css("display","block");}, 
    function(){$(document.getElementById("desc2")).css("display","none");});

});

$(document).ready(function(){
  /* Permet d'afficher la descritpion au passage de la souris sur l'image */

  $(document.getElementById("reseaux-photo3")).hover(function(){$(document.getElementById("desc3")).css("display","block");},
  /* Désactive le bloc desc lorsque la souris n'est plus sur l'image */ 
  function(){$(document.getElementById("desc3")).css("display","none");});
  /* Permet de maintenir l'affichage de la description sur le bloc desc */
  $(document.getElementById("desc3")).hover(function(){$(document.getElementById("desc3")).css("display","block");}, 
  function(){$(document.getElementById("desc3")).css("display","none");});

});

