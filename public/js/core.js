$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();
	

	$('img[usemap]').rwdImageMaps();

	

});

if ( ($(window).height() + 100) < $(document).height() ) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}

$('#ang-header-top').on('hidden.bs.collapse', function () {
     $('#menu2Div').hide();
});