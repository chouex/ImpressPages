<?php if( !empty( $data ) ): ?>

<?php

	$options = array(
    	'id' => $data['imagelink']['widgetId'],
    	'width' => $data['imagelink']['width'],
    	'height'=> $data['imagelink']['height'],
    	'default' => '',
	);
	

echo "<a style='display:block' href=?sa=ImageLink.redirectLink&link=".$data['imagelink']['url']." target = '_blank '>".ipSlot('image', $options)."</a>";
?>
<?php elseif( ipIsManagementState() ): ?>
    <div style="text-align: center; border: 1px solid #CDCDCD;">
        <span style="color: #D1D1D1;"><small><?php echo __( 'On this page imageLink widget is hidden', 'ImageLink' ); ?></small></span>
    </div>
<?php endif; ?>