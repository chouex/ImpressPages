<?php echo ipView('_header.php')->render(); ?>
    <div class="row">
    <div class="col-md-12">
      <?php echo ipSlot('breadcrumb'); ?>
        <?php echo ipBlock('main')->exampleContent(' '); ?>
    </div> 
   <div class="container-fluid">
    <div class="row">
       <div class="col-md-4">
       <?php echo ipBlock('block1')->render(); ?>
       </div> 
       <div class="col-md-4">
       <?php echo ipBlock('block2')->render(); ?>
       </div>
       <div class="col-md-4">
       <?php echo ipBlock('block3')->render(); ?>
       </div>
     </div> 
    </div>  
     <div class="container-fluid">
    <div class="row">
       <div class="col-md-3">
       <?php echo ipBlock('block4')->render(); ?>
       </div> 
       <div class="col-md-3">
       <?php echo ipBlock('block5')->render(); ?>
       </div>
       <div class="col-md-3">
       <?php echo ipBlock('block6')->render(); ?>
       </div>
       <div class="col-md-3">
       <?php echo ipBlock('block7')->render(); ?>
       </div>
     </div> 
    </div>  
    <div class="clear"></div>
<?php echo ipView('_footer.php')->render(); ?>