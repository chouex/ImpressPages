<?php
  $default = ipThemeUrl('img/default-featured-image-dummy.png');
  $options = array(
    'id' => 'featuredImage',
    'class' => 'featured-image',
    'width' => '1140',
    'height'=>'500',
    'default' => $default
  );
  $featuredImg = ipSlot('image', $options);

	if(
		(strpos($featuredImg, 'data-defaultvalue') !== false || strpos($featuredImg, $default) === false) 
		// && $site->getCurrentZone()->getAssociatedModule() != 'search'
	){
		echo $featuredImg;
	}
