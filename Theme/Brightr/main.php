<?php echo ipView('partials/head.php')->render(); ?>
<?php echo ipView('partials/single_page_header.php')->render(); ?>

  <div class="main wrapper clearfix">
    <div class="site-content-wrapper">
      <article class="site-content with-sidebar clearfix">
        <?php echo ipBlock('main')->render(); ?>
      </article>
  
      <aside class="sidebar clearfix">
        <!--
        <div id="sidebar-search-toggle"<?php echo ((bool) ipGetThemeOption('showSearchInSidebar')) ? '' : ' style="display: none;"'; ?>>
          <?php
            /*echo $site->generateBlock($lang_code.'_sidebarSearchTop', true);
            echo $site->generateBlock('ipSearch');*/
          ?>
        </div>
        -->

        <div id="sidebar-menu-toggle"<?php echo ((bool) ipGetThemeOption('showMenuInSidebar')) ? '' : ' style="display: none;"'; ?>>
          <?php echo ipBlock('sidebarMenuTop')->asStatic()->render(); ?>

          <nav id="side-menu" role="navigation">
            <?php echo ipSlot('menu', 'menu2'); ?>
          </nav>            
        </div>

        <?php echo ipBlock('sidebar')->asStatic()->render(); ?>
      </aside>
    </div>
  </div> 

<?php echo ipView('partials/footer.php')->render(); ?>
