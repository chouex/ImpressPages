<?php echo ipView('_header.php')->render(); ?>
</div>
    <div class="col_12">
        <?php echo ipBlock('main')->exampleContent(' '); ?>
    </div>
    <div class="wrapper clearfix">
    <div class="main col_13">
        <div class="h-feature">
        <?php echo ipBlock('main1')->exampleContent(' '); ?>
		</div>
        <div class="h-feature">
        <?php echo ipBlock('main2')->exampleContent(' '); ?>
		</div>
        <div class="h-feature right">
        <?php echo ipBlock('main3')->exampleContent(' '); ?>
		</div>
        
    </div>
    <div class="main col_12">
        <div class="h-feature">
        <?php echo ipBlock('grid1')->exampleContent(' '); ?>
		</div>
        <div class="h-feature">
        <?php echo ipBlock('grid2')->exampleContent(' '); ?>
		</div>
        <div class="h-feature right">
        <?php echo ipBlock('grid3')->exampleContent(' '); ?>
		</div>

    </div>
    <div class="clear"></div>
<?php echo ipView('_footer.php')->render(); ?>
