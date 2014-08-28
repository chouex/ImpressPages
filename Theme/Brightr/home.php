<?php echo ipView('partials/head.php')->render(); ?>
	
  <div class="main wrapper">
    <?php 
      if((bool) ipGetThemeOption('slideshowOnHomepage'))
          echo ipSlot('iptSlideshow'); 
    ?>

    <?php if((bool) ipGetThemeOption('displayFeatures')): ?>
      <div class="wrapper features-container">
        <div class="wrapper clearfix">
          <div class="feature">
            <?php
              echo ipSlot('image', array(
                'id' => '1_feature',
                'class' => 'featured-img',
                'width' => '353',
                'height'=>'190',
                'default' => ipThemeUrl('img/promo_1.jpg')
              ));

              echo ipSlot('text', array(
                'id' => '1_feature_title',
                'tag' => 'h2',
                'default' => __('Cross Browser Compatible', 'Brightr', false),
                'class' => ''
              ));

              echo ipSlot('text', array(
                'id' => '2_feature_text',
                'tag' => 'div',
                'default' => __('We have put a lot of effort in designing and developing it, hopefully you’ll find it useful! The demo website doesn’t do justice!', 'Brightr', false),
                'class' => 'txt'
              ));
            ?>
          </div><!-- .feature end -->

          <div class="feature in-the-middle">
            <?php
              echo ipSlot('image', array(
                'id' => '2_feature',
                'class' => 'featured-img',
                'width' => '353',
                'height'=>'190',
                'default' => ipThemeUrl('img/promo_2.jpg')
              ));

              echo ipSlot('text', array(
                'id' => '2_feature_title',
                'tag' => 'h2',
                'default' => __('Cross Browser Compatible', 'Brightr', false),
                'class' => ''
              ));

              echo ipSlot('text', array(
                'id' => '2_feature_text',
                'tag' => 'div',
                'default' => __('Flexibility and customization were the main focus of this theme and along with good typography the end result.', 'Brightr', false),
                'class' => 'txt'
              ));
            ?>
          </div><!-- .feature end -->

          <div class="feature">
            <?php
              echo ipSlot('image', array(
                'id' => '3_feature',
                'class' => 'featured-img',
                'width' => '353',
                'height'=>'190',
                'default' => ipThemeUrl('img/promo_3.jpg')
              ));

              echo ipSlot('text', array(
                'id' => '3_feature_title',
                'tag' => 'h2',
                'default' => __('Impress Pages CMS', 'Brightr', false),
                'class' => ''
              ));

              echo ipSlot('text', array(
                'id' => '2_feature_text',
                'tag' => 'div',
                'default' => __('Our new and improved framework that holds tons of options and features, with a new user-friendly interface that makes everything. easier!', 'Brightr', false),
                'class' => 'txt'
              ));
            ?>
          </div><!-- .feature end -->
        </div><!-- .wrapper end -->
      </div><!-- .features-container end -->
    <?php endif; ?>

  	<div class="site-content-wrapper">
      <article class="site-content site-content-home clearfix">
        <?php echo ipBlock('main')->render(); ?>
      </article>
  	</div>
  </div> 

<?php echo ipView('partials/footer.php')->render(); ?>
