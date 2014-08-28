<div class="single-page-header wrapper">
	<div class="main clearfix">
		<div class="left-side clearfix">
			<h1 class="title-above-breadcrumbs"><?php echo ipContent()->getTitle();; ?></h1>

			<div class="clear"></div>

			<div class="breadcrumbs"<?php echo ((bool) ipGetThemeOption('showBreadcrumbs')) ? '' : ' style="display: none;"'; ?>>
				<?php echo ipSlot('breadcrumb'); ?>
			</div>
		</div>

    <?php echo ipView('social.php')->render(); ?>
	</div>
</div>
