<?php echo ipView('_header.php')->render(); ?>
<div id="container">
	<div class="main col_12">
        <?php echo ipBlock('main')->exampleContent(' '); ?>

        <div class="col-md-9">

			<div class="row">
				<div class="col-4">
        <?php echo ipSlot('text', array('id' => 'footer-title1', 'tag' => 'h2', 'default' => "About Us", 'class' => 'center')); ?>
       </div>
				<div
					style="display: inline; position: relative; float: right; width: 75%;">
        <?php echo ipSlot('text', array('id' => 'footer-title2', 'tag' => 'h3', 'default' => "NAME", 'class' => 'center')); ?>
        <?php echo ipSlot('text', array('id' => 'footer-text', 'tag' => 'div', 'default' => "Vestassapede et donec ut est liberos sus et eget sed eget. Quis queta habitur augue magnisl mag.Vestassapede et donec ut est liberos sus et eget sed eget. Quis queta habitur augue magnisl mag.Vestassapede et donec ut est liberos sus et eget sed eget. Quis queta habitur augue magnisl mag.Vestassapede et donec ut est liberos sus et eget sed eget. Quis queta habitur augue magnisl mag.", 'class' => 'center')); ?>
       </div>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>
<?php echo ipView('_footer.php')->render(); ?>
