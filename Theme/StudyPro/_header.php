<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

<head>
    <?php			
		ipAddCss('assets/ip_content.css');
		ipAddCss('assets/nav.css');
		ipAddCss('assets/leftmenu.css');
		ipAddCss('assets/css/style.css');
		ipAddCss('assets/css/zerogrid.css');
		ipAddCss('assets/theme.css');
        echo ipHead();
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

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

<div class="content page1">
  <div class="zerogrid">
      <div class="row">
      <div class="col-full">
	  	<div class="wrap-col"><div class="breadcrumb">
	        <?php echo ipSlot('breadcrumb'); ?>
		</div></div>
      </div>
      
      </div>
      <div class="col-full">
        <hr class="carved" />
      </div>