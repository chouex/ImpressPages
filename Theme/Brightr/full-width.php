<?php echo ipView('partials/head.php')->render(); ?>  
<?php echo ipView('partials/single_page_header.php')->render(); ?>
  <div class="main wrapper">
  	<div class="site-content-wrapper">
      <article class="site-content clearfix">
        <?php echo ipBlock('main')->render(); ?>
      </article>
  	</div>
  </div> 
<?php echo ipView('partials/footer.php')->render(); ?>
