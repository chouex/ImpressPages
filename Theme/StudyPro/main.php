<?php echo ipView('_header.php')->render(); ?>
	  
		<div class="row">
	        <div class="col-1-4">
				<div class="wrap-col">
				  <div class="leftmenu">
					<?php echo ipSlot('menu', 'menu2'); ?>
				  </div>
				  <?php echo ipBlock('side1')->render(); ?>
				</div>
			</div>
	        <div class="col-3-4">
				<div class="wrap-col">
				<?php echo ipBlock('main')->render(); ?>
			  	</div>
	        </div>
		</div>

<?php echo ipView('_footer.php')->render(); ?>