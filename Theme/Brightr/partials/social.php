<?php 
    $show_social = (bool) ipGetThemeOption('showSocialIcons');

    function social_link($network_key, $network_name){
    	$link = (string) ipGetThemeOption('link'.$network_key);

    	if(!empty($link) && strlen($link) > 0){
    		return '<a href="'.$link.'" class="social-icon '.strtolower($network_key).'">'.$network_name.'</a>';
    	}
    }
?>

<?php if($show_social): ?>
	<div class="social-icons-wrapper">
		<?php echo social_link('Twitter', 'Twitter'); ?>
		<?php echo social_link('Facebook', 'Facebook'); ?>
		<?php echo social_link('Gplus', 'Google Plus'); ?>
		<?php echo social_link('Linkedin', 'Linkedin'); ?>
	</div>
<?php endif; ?>
