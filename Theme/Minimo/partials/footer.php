  <?php
    $show_footer_widgets = (bool) ipGetThemeOption('showFooterWidgets');
    $footerWidgetsStyle = "";
    if(! $show_footer_widgets){
      $footerWidgetsStyle = ' style="display: none;"';
    }
    
    $footer_class = '';
    if(! $show_footer_widgets){
      $footer_class = ' no-widgets';
    }
  ?>

  <div class="main-container">
    <footer class="footer-container wrapper<?php echo $footer_class; ?>">
      <div class="footer clearfix border-box"<?php echo $footerWidgetsStyle; ?>>
        <div class="one column">
          <?php echo ipBlock('footer_1')->asStatic()->render(); ?>
        </div>

        <div class="two column">
          <?php echo ipBlock('footer_2')->asStatic()->render(); ?>
        </div>

        <div class="three column">
          <?php echo ipBlock('footer_3')->asStatic()->render(); ?>
        </div>
      </div>
  
        <div class="copyright-container clearfix">
          <div class="wrapper">
            <?php
            $uniqueKey = 'footer_copyright_text';
            $tagUsed = 'p';
            $defaultText = 'Copyright © 2013 ImpressPagesTemplates.com. All rights reserved.';
            $cssClass = 'left';
             
            echo ipSlot('text', array('id' => $uniqueKey, 'tag' => $tagUsed, 'default' => __('Copyright © 2013 ImpressPagesTemplates.com. All rights reserved.', 'Minimo', false), 'class' => 'left'));
            ?>
          </div>
        </div>
    </footer>
  </div>
</body>
</html>