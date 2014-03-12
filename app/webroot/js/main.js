jQuery(function($){
	if($('#carrousel').length>0)
	{
		$('#carrousel .slides').slides({
			play: 5000,
			pause: 1500,
			hoverPause: true
		});
	}
});