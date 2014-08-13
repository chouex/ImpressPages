<div class="SliderGall" style="display:none">
<?php if (isset($images) && is_array($images)) { ?>
<div class="bxslider" >
<?php foreach ($images as $imageKey => $image) { ?>
    <div class="_item ipsItem">        
    <a <?php if($image['type']=='lightbox'){?>rel="lightbox"
            href="<?php echo escAttr($image['imageBig']); ?>"
            <?php }else{?>
            href="<?php echo escAttr($image['url']); ?>"
            <?php }?>
                        title=""
        data-description=""
        >                        
            <img class="_image ipsImage" src="<?php echo escAttr($image['imageBig']); ?>" title="<?php echo escAttr($image['title']); ?>" data-description="<?php echo isset($image['description']) ? escAttr($image['description']) : ''; ?>" />
 </a>
    </div>
<?php } ?>
</div>
<?php } ?>
</div>