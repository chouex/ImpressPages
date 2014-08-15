<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

<head>
    <?php			
		ipAddCss('assets/ip_content.css');
		ipAddCss('assets/nav.css');
		ipAddCss('assets/css/style.css');
		ipAddCss('assets/css/slider.css');
		ipAddCss('assets/css/zerogrid.css');
		ipAddCss('assets/theme.css');
        echo ipHead();
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
					
    <?php
		ipAddJs('assets/js/jquery-migrate-1.1.1.js');
		ipAddJs('assets/js/jquery.carouFredSel-6.1.0-packed.js');
		ipAddJs('assets/js/tms-0.4.1.js');
		ipAddJs('assets/js/css3-mediaqueries.js');
		if ( ipIsManagementState () ) { } else 
		{ 
		ipAddJs('assets/jquery.js'); 
		}
        echo ipJs();
    ?>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>

	<script>
	 // DOM ready
	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "   "
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
	   // To make dropdown actually work
	   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });
	</script>	
	<style>	
    nav select { display: none; }
	nav select {     
     -webkit-appearance: none;  /*Removes default chrome and safari style*/
     -moz-appearance: none;  /*Removes default style Firefox*/
	}
	nav select  { width:100%; padding:8px; color:#FFFFFF; background: rgba(0,0,0,1) url('<?php echo ipThemeUrl('assets/img/nav-icon.png') ; ?>') no-repeat 12px 8px; 
				line-height: 20px; padding-left:40px; border: 1px solid #fff; cursor:pointer; outline:none;}		
	nav select option { margin:5px; padding:0; cursor:pointer; outline:none; border:none;}
    @media (max-width: 767px) {
	.menu_block {float:none}
      nav ul, #nav { display: none; }
      nav select { display: inline-block; width: 100%}
    }
	</style>		
     </head>	

     <body>
	<div class="zerogrid">
    <div class="col-full">
		<div class="languages">
            <?php if (count(ipContent()->getLanguages()) > 1) { ?>
                <?php echo ipSlot('languages'); ?>
            <?php } ?>
		</div>
	</div>			
	</div>			
       <div class="main">
<!--==============================header=================================-->
 <header> 
  <div class="zerogrid">
    <div class="col-full">
	<div class="wrap-col">
    <h1><?php echo ipSlot('logo'); ?></h1>
    
		 <div class="menu_block"><div class="topmenu">
           <nav>
			<?php echo ipSlot('menu', 'menu1'); ?>
           </nav>
           <div class="clear"></div>
         </div></div>
		   
           <div class="clear"></div>
		</div>
      </div>
    </div>
</header>
 <div class="slider-relative">
    <div class="slider-block">
	
	<?php echo ipSlot('Study'); ?>
	
    </div>
 </div>
<!--=======content================================-->

<div class="content page1">
  <div class="zerogrid">
      <div class="row">
      <div class="col-full">
	  	<div class="wrap-col">
	        <?php echo ipSlot('text', array('id' => 'welcome', 'tag' => 'h2', 'default' => __('Welcome', 'StudyPro', false), 'class' => 'center wel')); ?>
			<br>
			<?php echo ipSlot('text', array('id' => 'welcometext', 'tag' => 'span', 'default' => __('WelcomeText', 'StudyPro', false), 'class' => 'left')); ?>
		</div>
      </div>
      
      </div>
      <div class="col-full">
        <hr class="carved" />
      </div>
	  <div class="row">
      <div class="col-full">
	  	<div class="wrap-col">
        <div class="car_wrap">
        <?php echo ipSlot('text', array('id' => 'OurCourses', 'tag' => 'h2', 'default' => __('Our Courses', 'StudyPro', false), 'class' => 'left')); ?>
		<?php echo ipSlot('Courses'); ?>
      </div>
	  </div>
    </div>
	</div>
	<br>
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
</body>
</html>	