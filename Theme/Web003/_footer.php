
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php echo ipJs(); ?>
<script type="text/javascript">
	$(function(){
	    $("#gotop").click(function(){
	        jQuery("html,body").animate({
	            scrollTop:0
	        },1000);
	    });
	});
	</script>
<div class="footer">
  <div class="ggl"></div>
  <div class="footer00">
  <div class="top" id="gotop"><a href="#"><img src="<?=ipThemeUrl('assets/img/gototop.png')?>" width="82" height="41" /></a></div>
  <div class="bl"></div>
  <div class="cdetail">
  <div class="tti00"><?php echo ipSlot('text', array('id' => 'footer-h4', 'tag' => 'h4', 'default' => "COMPANY DETAILS", 'class' => 'center')); ?></div>
  <div>
<?php echo ipSlot('text', array('id' => 'footertext1', 'tag' => 'div', 'default' => "  Company Name</br>
Street Name & Number</br>
Line Two</br>
Town</br>
Postcode/Zip ", 'class' => 'center')); ?>

  </div>
  </div>
<div class="copyright"><?php echo ipSlot('text', array('id' => 'footertext2', 'tag' => 'div', 'default' => "
	Tel: xxxxx xxxxxxxxxx</br>
	Fax: xxxxx xxxxxxxxxx</br>
	Email: contact@mydomain.com</br></br>
	Copyright © 2013 Domain Name - All Rights Reserved", 'class' => 'center')); ?>
</div>
  </div>
</div>
<!---->
</div>
</body>
</html>
