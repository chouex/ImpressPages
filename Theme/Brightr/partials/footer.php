  <?php
    $show_footer_widgets = (bool) ipGetThemeOption('showFooterWidgets');

    $footer_class = '';

    if(! $show_footer_widgets)
      $footer_class = ' no-widgets-area';
  ?>

  <footer class="footer-container wrapper<?php echo $footer_class; ?>">
    <div class="footer-widget-area wrapper clearfix"<?php echo (! $show_footer_widgets) ? ' style="display: none;"' : ''; ?>>
      <div class="group-one">
        <div class="first column">
          <?php echo ipBlock('footer_1')->asStatic()->render(); ?>
        </div>

        <div class="secound column last">
          <?php echo ipBlock('footer_2')->asStatic()->render(); ?>
        </div>
      </div>

      <div class="group-two">
        <div class="third column">
          <?php echo ipBlock('footer_3')->asStatic()->render(); ?>
        </div>
            
        <div class="column fourth last">
          <?php echo ipBlock('footer_4')->asStatic()->render(); ?>
        </div>
      </div>
    </div>

    <div class="copyright-container clearfix">
      <div class="wrapper">
        <?php          
          echo ipSlot('text', array(
            'id' => 'footer_copyright_text',
            'tag' => 'p',
            'default' => __('Copyright © 2014 ImpressPagesTemplates.com. All rights reserved.', 'Minimo', false),
            'class' => 'left'
          ));
        ?>
      </div>
    </div>
  </footer>

</div>
</body>
</html>
