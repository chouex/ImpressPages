<!-- AddThis Button BEGIN -->
<div class="clearfix">
    <div class="addthis_toolbox addthis_floating_style addthis_32x32_style " style="position: static;">
        <?php

        for ($i=1; $i<=ipGetOption('AddThis.numberOfIcons'); $i++){
            ?>
            <a class="addthis_button_preferred_<?php echo $i; ?>"></a>
        <?php
        }
        ?>
        <a class="addthis_button_compact"></a>
    </div>

</div>
<!-- AddThis Button END -->