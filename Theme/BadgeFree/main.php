<?php echo ipView('_header.php')->render(); ?>

		<section>
		<article>
        <!-- Breadcrumb -->
        <div class="page-title2">
            <div class="container">
                <div class="row">
                    <div class="span12">
					<div class="breadcrumb">
                        <?php echo ipSlot('breadcrumb'); ?>
                    </div>
					</div>
                </div>
            </div>
        </div>
		
        <!-- Page -->
        <div class="mainpage container">
			<div class="aside-left">
				<div class="box">
					<?php echo ipSlot('menu', 'menu2'); ?>
					<aside>
					<?php echo ipBlock('side1')->asStatic()->render(); ?>
					</aside>
				</div>
			</div>
			<div class="page-left">
				<?php echo ipBlock('main')->render(); ?>	
			</div>
		
		</div>		
		<br><br>
		</article>
		</section>

<?php echo ipView('_footer.php')->render(); ?>	
