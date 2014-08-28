<?php 
  $show_map = (bool) ipGetThemeOption('contactShowMap');

  if($show_map){
    ipAddJs('http://maps.google.com/maps/api/js?sensor=true');

    $lat  = (float) ipGetThemeOption('contactMapLat');
    $long = (float) ipGetThemeOption('contactMapLong');
    $zoom_level = (int) ipGetThemeOption('contactMapZoomLevel');

    $js = "$(document).ready(function() {
      GoogleMaps.init($lat, $long, $zoom_level);
    });";
    \Ip\ServiceLocator::pageAssets()->addJavascriptContent('google-maps-init', $js);
  }

  echo ipView('partials/head.php')->render();
?>  
  <?php if($show_map): ?>
    <div id="the-map"></div>
  <?php endif; ?>

  <div class="main wrapper contact-page clearfix">
      <div class="site-content-wrapper clearfix">
      <article class="site-content with-sidebar clearfix">
        <?php echo ipBlock('main')->render(); ?>
      </article>
  
      <aside class="sidebar clearfix">
        <?php echo ipBlock('sidebar_contact')->render(); ?>
      </aside>
    </div>
  </div> 
<?php echo ipView('partials/footer.php')->render(); ?>
