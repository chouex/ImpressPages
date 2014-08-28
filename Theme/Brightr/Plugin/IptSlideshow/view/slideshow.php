<?php if(count($images) > 0): ?>
    <div id="slider-container">

        <div id="slider">
            <?php foreach ($images as $imageKey => $image): ?>
                <div class="slide">
                    <div class="slide-inner">

                        <div class="left-side">
                            <img src="<?php echo esc(ipReflection($image['image'], array(
                                  'type' => 'fit',
                                  'width' => 470,
                                  'height' => 273,   
                                  'quality' => 100, //optional, 0 - 100
                                  'forced' => false //optional. Smaller images will be scaled up if set to true
                              ))); ?>" alt="" />
                        </div>

                        <div class="right-side">
                            <h2><?php echo esc($image['title']) ?></h2>
                            <p><?php echo $image['description']; ?></p>

                            <?php if($image['showurl'] == 1): ?>
                                <div class="link">
                                    <a href="<?php echo esc($image['url']); ?>"><?php echo $image['urltext']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
<?php endif; ?>