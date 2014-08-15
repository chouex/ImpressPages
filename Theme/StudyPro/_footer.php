	<div class="row">
	<hr class="carved" />
    <div class="bottom_block">
      <div class="col-1-2">
        <nav>
			<?php echo ipSlot('menu', 'menu3'); ?>
		</nav>        
      </div>
      <div class="col-1-2">
        <div class="soc">
			<?php echo ipSlot('Social'); ?>
        </div>
      </div>
      </div>
	  </div>
    </div>
  </div>
</div>

<footer>    
  <div class="zerogrid">
    <div class="col-full">
		<div class="wrap-col">
		<?php echo ipSlot('text', array('id' => 'Copyright', 'tag' => 'div', 'default' => __('Copyright', 'StudyPro', false), 'class' => 'center')); ?>
	 	</div>
    </div>
  </div>
</footer>

    <?php
		ipAddJs('assets/js/css3-mediaqueries.js');
        echo ipJs();
    ?>
	
</body>
</html>	 