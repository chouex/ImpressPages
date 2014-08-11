<?php 
echo 'sdfffsdfsdfsdfsdfsdfs';
print_r($imagelink);
if(!empty($imagelink)){

//exit;
$options = array(
    	'id' => mt_rand(0,999999999999999999),
    	'width' => $width,
    	'height'=> $height,
    	'default' => '',
	);
	echo "<a herf=".$url.">".ipSlot('image', $options)."</a>";

}

?>