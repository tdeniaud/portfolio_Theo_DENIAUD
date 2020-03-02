/* Fonction pour faire disparaitre le bg preload au chargement de la page */
$(document).ready(function() {

	setTimeout(function(){
		$('body').addClass('loaded');


	}, 500);

	setTimeout(function(){
		$('#loader-progress').css('display','none')
	}, 1000);

	setTimeout(function(){
		$('#mainNav').removeClass('display-none');
		$('#loader-wrapper').css('display','none');
	}, 1400);



});
