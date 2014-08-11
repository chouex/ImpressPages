<?php echo ipView('_header.php')->render(); ?>
    <div class=" row ">
  <?php echo ipSlot('breadcrumb'); ?>
  <div class="col-md-3" id="sidebar" role="navigation">

        <nav class="vertM " style="display:none" >
            <?php
                // generate 2 - 7 levels submenu
                // please note that it is possible to generate second level only if first level item is in breadcrumb
                // $pages = \Ip\Menu\Helper::getMenuItems('menu1', 2, 7);
                // echo ipSlot('menu', $pages);

                 //submenu of currently active menu item
                 //$pages = \Ip\Menu\Helper::getChildItems();
                 //echo ipSlot('menu', $pages);
              echo ipSlot('menu', 'menu2'); 
            ?>
        </nav>
       <br>   
       <?php echo ipBlock('side1')->render(); ?>
    </div>
   <div class="col-md-9">
        
        <?php echo ipBlock('main')->render(); ?>
    </div>
   
    <div class="clear"></div>
<?php echo ipView('_footer.php')->render(); ?>