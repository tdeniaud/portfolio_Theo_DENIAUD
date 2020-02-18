
$(document).on('submit', '#form-contact', function (e) {

    //Permet de désactiver toutes les actions par défaut du comportement html (ici un bouton submit doit recharger la page. Ici on empêche ce rechargement)
    e.preventDefault();
    var formData = $(this).serialize();
    var url = site_url + 'enregistrer'; /* préciser index.php/contact */
    var elementSelected = $('p.field-error');

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {
           if (data.error) {
           	$('p.field-error').text('');

               elementSelected.each(function () {
                   for (var key in data.error) {
                        if ($(this).attr('data-field') === key) {
                            $(this).html(data.error[key]);
                        }
                   }
               })

           } else {

               Swal.fire({
                   position : 'center',
                   icon : 'success',
                   title : 'Merci d\'avoir complété ce formulaire ! Vous allez être redirigé vers la page d\'accueil ...',
                   showConfirmButton : false,
                   timer : 1500
               });

			   setTimeout(function(){
				   window.location.href = site_url;
			   }, 1500);



           }
        }
    });

});
