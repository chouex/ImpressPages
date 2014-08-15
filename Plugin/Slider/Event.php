<?php

namespace Plugin\Slider;

class Event
{
    public static function ipBeforeController()
    {
    $script = "
   $(document).ready(function(){
    initBxslider();
   window.setInterval('initBxslider()', 1000);

    });
	function initBxslider() {
	//if($('.SliderGall').find( '.bx-wrapper').length>0)return;
   $('.SliderGall').css('display','block');
   
   $('.bxslider').each(function( index ) {
    		if($(this).parent('.bx-viewport').length>0)return;
$( this ).bxSlider({
   auto: true,
   mode: 'fade',
   speed: 800,
   captions: true,
 
   });
});
    		
   $('.bxslider-nc').each(function( index ) {
    		if($(this).parent('.bx-viewport').length>0)return;
$( this ).bxSlider({
   auto: true,
   mode: 'fade',
   speed: 800,
   captions: false,
 
   });
});

  }
";

        ipAddJsContent('imageslider', $script);
        ipAddJs('assets/slider.js');
        ipAddJs('assets/jquery.bxslider.js');
        ipAddCss('assets/jquery.bxslider.css');
        
        
    }



}