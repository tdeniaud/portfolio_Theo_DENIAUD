function menuAgrandir() {

    // on récupère l'élément
    var element = document.getElementById("more");

    if(element.style.display === "none"){

         // on modifie son style
        element.style.display = "block";


    }
    else {

         // on modifie son style
        element.style.display = "none";

    }
   

}