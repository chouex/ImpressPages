<?php 
    $show_social = (bool) ipGetThemeOption('showSocialIcons');

    $socialStyle = "";
    if(! $show_social){
        $socialStyle = "display: none;";
    }

    function social_link($network_key, $network_name){
    	$link = (string) ipGetThemeOption('link'.$network_key);

    	if(!empty($link) && strlen($link) > 0){
    		return '<a href="'.$link.'" target="_blank" class="social-icon '.strtolower($network_key).'">'.$network_name.'</a>';
    	}
    }

    $visible_langs = 0;
    foreach(ipContent()->getLanguages() as $lang){
        if($lang->visible)
            $visible_langs++;
    }

    if($visible_langs > 1){
        $class = ' with-langs';
    } else {
        $class = '';
    }
?>

<div class="social-icons-wrapper<?php echo $class; ?>" style="<?php echo $socialStyle; ?>">
	<?php echo social_link('Twitter', 'Twitter'); ?>
	<?php echo social_link('Facebook', 'Facebook'); ?>
	<?php echo social_link('Gplus', 'Google Plus'); ?>
	<?php echo social_link('Linkedin', 'Linkedin'); ?>
</div>
