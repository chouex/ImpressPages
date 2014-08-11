<div class="SliderGall" style="display:none">
<?php if (isset($images) && is_array($images)) { ?>
<div class="bxslider-nc" >
<?php foreach ($images as $imageKey => $image) { ?>
    <div class="_item ipsItem">                                     
            <img class="_image ipsImage" src="<?php echo escAttr($image['imageBig']); ?>" title="<?php echo escAttr($image['title']); ?>" data-description="<?php echo isset($image['description']) ? escAttr($image['description']) : ''; ?>" />
 
    </div>
<?php } ?>
</div>
<?php } ?>
</div>