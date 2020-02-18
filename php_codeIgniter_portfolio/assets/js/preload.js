
$(document).ready(function() {

	setTimeout(function(){
		$('body').addClass('loaded');


	}, 500);

	setTimeout(function(){
		$('#mainNav').removeClass('display-none');
		$('#loader-wrapper').css('display','none');
	}, 1400);



});
