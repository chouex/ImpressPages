<?php if ($image) { ?>
<div class="_images">
    <a class="_image" rel="lightbox" href="<?php echo escAttr($imageBig) ?>" title="<?php echo escAttr($title) ?>" data-description="">
        <img src="<?php echo escAttr($image) ?>" alt="<?php echo escAttr($title) ?>" />
    </a>
    <?php if (!empty($images)) { ?>
        <div class="_thumbs">
            <?php foreach ($images as $key => $image) { ?>
                <a class="_thumb" rel="lightbox" href="<?php echo escAttr($imagesBig[$key]) ?>" title="<?php echo escAttr($title) ?>" data-description="">
                    <img src="<?php echo escAttr($image) ?>" alt="<?php echo escAttr($title) ?>" />
                </a>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<?php } ?>
<div class="_info">
    <h3 class="_title"><?php echo esc($title) ?></h3>
    <div class="_description">
        <?php echo $description ?>
        <?php if (!empty($price)) { ?>
            <p class="_price"><?=$currency?> $<span><?php echo $price ?></span></p>
        <?php } ?>

        <p><span data-widgetid="<?php echo (int) $widgetId ?>" id="shopping<?=(int)$widgetId ?>" class="_button button shopping"><?php _e('Add to Cart', 'SimpleProduct') ?></span></p>
        
    </div>
</div>
