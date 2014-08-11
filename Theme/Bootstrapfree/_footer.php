     <div class="footer">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-12">
           <?php echo ipBlock('blockF')->render(); ?>
         </div> 
         <div class="col-md-12">
         <?php echo ipSlot('text', array('id' => 'themeName', 'tag' => 'div', 'default' => __('Theme "Bootstrap Free"', 'Bootstrap', false), 'class' => 'left')); ?>
         </div> 
        </div>
      </div>   
        
     </div>  
     

</div>
<?php echo ipAddJs('assets/site.js'); ?>
<?php if (!(ipIsManagementState ( ))) { echo ipAddJs('assets/bootstrap.js'); } ?>
<?php if (ipIsManagementState ( )) { echo ipAddJs('assets/tinymceConfig.js'); } ?>
<?php echo ipJs(); ?>

</body>
</html>