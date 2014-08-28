$(document).ready(function(){
	if (typeof Config !== 'undefined'){
		$('#slider').bxSlider({
			adaptiveHeight: true,
			auto: true,
			autoStart: true,
			pause: Config.slideShow.loopTime,
			speed: 800
		});
	}
});
