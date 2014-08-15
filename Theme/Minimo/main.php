<?php echo ipView('partials/head.php')->render(); ?>

<div class="main-container layout-narrow">
  <div class="post-image-container">
    <?php echo ipView('partials/featured_image.php')->render(); ?>

    <article class="site-content clearfix">
      <?php echo ipBlock('main')->render(); ?>
    </article>
  </div>
</div>

<?php echo ipView('partials/footer.php')->render(); ?>
