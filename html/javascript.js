$('#iniciarSession').on('click', function(){
	$('#iniciarSesionBox').toggle();
});

$('header').on('click', function(){
	if($('#iniciarSesionBox').css('display') != 'none'){
		$('#iniciarSesionBox').toggle();
	}
});

