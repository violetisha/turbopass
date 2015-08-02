//
// Functions
// -------------------------------------------

function init() {

	// Splash screen
	setTimeout(function(){ 
		$('#screen-01').fadeOut('fast');
		$('#screen-02').fadeIn('fast'); 
	}, 1000);
	
	// Go to screen
	$('.top-bar >a, #login-button').click(function(event) {
		$('body >div').fadeOut('fast');
		showScreen = $(this).attr('href');
		$(showScreen).fadeIn('fast'); 
	});

	// Fake login 
	$('#screen-03 button').click(function(event) {
		event.preventDefault();
		$('#screen-03').fadeOut('fast');
		$('#screen-04').fadeIn('fast'); 
	});

	// Choose a card
	$('#screen-04 .card').click(function(event) {
		cardName = $(this).find('h2').text();
		cardCode = $(this).find('img').attr('data-code');

		$('#screen-04').fadeOut('fast');
		$('#screen-05').fadeIn('fast');
		$('#screen-05').find('h3').text(cardName);
		$('#screen-05').find('img').attr('src', 'img/' + cardCode + '.png');
	});

}

//
// RUN!
// -------------------------------------------
$(document).ready(function() { init(); });