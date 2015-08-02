//
// Functions
// -------------------------------------------

function init() {

	// Footer position
	if ( $('body').height() < $(window).height() ) {
		$('footer').css('position', 'absolute');
	};
	

}

//
// RUN!
// -------------------------------------------
$(document).ready(function() { init(); });