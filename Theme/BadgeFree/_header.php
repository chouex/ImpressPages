<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

<head>

    <?php
		ipAddCss('assets/navigation.css');
		ipAddCss('assets/site.css');
		ipAddCss('assets/ip_content.css');
		ipAddCss('assets/style.css');
		ipAddCss('assets/bootstrap.min.css');
		ipAddCss('assets/media.css');
        echo ipHead();
    ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<style>	
    nav select { display: none; }
	nav select {     
     -webkit-appearance: none;  /*Removes default chrome and safari style*/
     -moz-appearance: none;  /*Removes default style Firefox*/
}
	nav select  { width:100%; padding:10px; color:#FFFFFF; background: rgba(0,0,0,1) url('<?php echo ipThemeUrl('assets/img/nav-icon.png') ; ?>') no-repeat 12px 8px; 
				line-height: 20px; padding-left:40px; border: 1px solid #fff; cursor:pointer; outline:none;}		
	nav select option { margin:5px; padding:0; cursor:pointer; outline:none; border:none;}
    @media (max-width: 980px) {
      nav ul, #nav { display: none; }
      nav select { display: inline-block; }
    }	
	</style>
	
	<script>
	 // DOM ready
	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400&subset=latin,cyrillic,greek,vietnamese' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>

        <!-- Header -->
        <div class="container">
            <header>
			<div class="header row">
                <div class="span12">
                    <div class="navbar">	
                        <nav>
						<div class="navbar-inner">
                                <?php echo ipSlot('logo'); ?>
                <?php if (count(ipContent()->getLanguages()) > 1) { ?>
                    <div class="language">
                        <?php echo ipSlot('languages'); ?>
                    </div>
                <?php } ?>
							<div class="nav-collapse collapse">
							<div id="nav">
									<?php echo ipSlot('menu', 'menu1'); ?> 						
								</div>
                            </div>
                        </div>
						</nav>
                    </div>
                </div>
            </div>
			</header>
        </div>