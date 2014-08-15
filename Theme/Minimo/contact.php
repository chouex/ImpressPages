<?php 
    $show_map = (bool) ipGetThemeOption('contactShowMap');

    if($show_map){ ?>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <?php
        $lat  = (float) ipGetThemeOption('contactMapLat');
        $long = (float) ipGetThemeOption('contactMapLong');
        $zoom_level = (int) ipGetThemeOption('contactMapZoomLevel');

        $js = "$( document ).ready(function() {
          GoogleMaps.init($lat, $long, $zoom_level);
        });";
        \Ip\ServiceLocator::pageAssets()->addJavascriptContent('google-maps-init', $js);
    }

    echo ipView('partials/head.php')->render();
?>  
    
    <div class="main-container layout-narrow">
        <div class="post-image-container">
            <?php if($show_map) : ?>
                <div id="the-map"></div>
            <?php endif; ?>

            <article class="site-content clearfix">
                <?php echo ipBlock('main')->render(); ?>
            </article>
        </div>
    </div>

<?php echo ipView('partials/footer.php')->render(); ?>