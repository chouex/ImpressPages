        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
						<?php echo ipSlot('text', array('id' => 'BadgeFooterTitle1', 'tag' => 'h4', 'default' => __('Title 1', 'BadgePro', false), 'class' => 'center')); ?>
						<?php echo ipBlock('footer1')->asStatic()->render(); ?>	
                    </div>
                    <div class="widget span3">
					<?php echo ipSlot('text', array('id' => 'BadgeFooterTitle2', 'tag' => 'h4', 'default' => __('Title 2', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('footer2')->asStatic()->render(); ?>						
                    </div>
                    <div class="widget span3">
					<?php echo ipSlot('text', array('id' => 'BadgeFooterTitle3', 'tag' => 'h4', 'default' => __('Title 3', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('footer3')->asStatic()->render(); ?>						
                    </div>
                    <div class="widget span3">
					<?php echo ipSlot('text', array('id' => 'BadgeFooterTitle4', 'tag' => 'h4', 'default' => __('Title 4', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('footer4')->asStatic()->render(); ?>	
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="footer_menu span8">
						<?php echo ipSlot('menu', 'menu3'); ?>
                    </div>
                    <div class="copyright span4">
						Design Theme: <a href="http://www.themeimpresspages.com/" title="Design Theme ImpressPages CMS" >ThemeImpressPages.com</a>
                    </div>
                </div>
            </div>
        </footer>
    <?php
		echo ipJs();
    ?>		
</body>
</html>