<?php echo ipView('_header.php')->render(); ?>
<div id="container">
    <div class="main col_12 col_md_12 col_lg_8 right">
        <?php echo ipSlot('breadcrumb'); ?>
        <?php echo ipBlock('main')->render(); ?>
    </div>
    <div class="side col_12 col_md_12 col_lg_3 left">
        <aside>
            <?php echo ipBlock('side1')->asStatic()->render(); ?>
        </aside>
    </div>
</div>
    <div class="clear"></div>
<?php echo ipView('_footer.php')->render(); ?>
