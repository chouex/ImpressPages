<!-- AddThis Button BEGIN -->
<div class="clearfix">
     <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
         <?php

         for ($i=1; $i<=ipGetOption('AddThis.numberOfIcons'); $i++){
         ?>
            <a class="addthis_button_preferred_<?php echo $i; ?>"></a>
         <?php
         }
         ?>
        <a class="addthis_button_compact"></a>
         <?php
         if (ipGetOption('AddThis.enableCounter')){
         ?>
        <a class="addthis_counter addthis_bubble_style"></a>
         <?php
         }
         ?>
    </div>
</div>
<!-- AddThis Button END -->
