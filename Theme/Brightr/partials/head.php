<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script type="text/javascript">
    Config = {
      slideShow: {
        loopTime: <?php echo ipGetThemeOption('slideShowLoopTime'); ?>
      }
    };
  </script>
  <?php
    // Theme css files
    ipAddCss(ipThemeUrl('assets/theme.css'), null, 150);

    // Generate head
    echo ipHead();

    // Javascript libraries
    ipAddJs(ipThemeUrl('js/libs/modernizr-2.6.1.min.js'));

    // Javascript plugins
    ipAddJs(ipThemeUrl('js/plugins/jquery.colorbox.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.prettyCheckable.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.selectBox.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.responsiveMenu.js'));
    ipAddJs(ipThemeUrl('js/plugins/responsive-tables.js'));

    // Our main javascript file where all the magic happens
    ipAddJs(ipThemeUrl('js/site.js'));
    
    // Generate all theme and ImpressPages javascript files
    echo ipJs();

    // Background
    $backgrounds_string = "default cubes fabric fancy freckles knitting navy rice texture";
    $valid_backgrounds = explode(" ", $backgrounds_string);
    $current_background = ipGetThemeOption('siteBackground');
    if(in_array($current_background, $valid_backgrounds)){
      $background = $current_background;
    } else {
      $background = "default";
    }
    $background_image = ipGetThemeOption('customBackgroundImage');

    $color           = ipGetThemeOption('mainColor');
    $secondary_color = ipGetThemeOption('secondaryColor');
  ?>
  <style type="text/css">
    <?php if(strlen($background_image) > 10): ?>
      body{
        background: url('<?php echo $background_image; ?>') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    <?php else: ?>
      body{
        background: #ffffff url(<?php echo ipThemeUrl('/img/backgrounds/'.$background.'.png'); ?>) repeat center center;
      }
    <?php endif; ?>

    /* Logo */
    header.main .logo, header.main .logo a,
    /* Nav */
    header.main nav ul li.current > a,
    header.main nav ul li a:hover,
    header.main nav .langs li.current a,
    /* Sidebar menu */
    #side-menu ul.level1 > li.current > a, 
    #side-menu ul.level2 > li.current > a, 
    #side-menu ul.level3 > li.current > a, 
    #side-menu ul.level1 > li a:hover, 
    #side-menu ul.level2 > li a:hover, 
    #side-menu ul.level3 > li a:hover,
    /* Headings */
    .features-container .feature h2,
    .ipWidget h1,
    .ipWidget h1 a,
    .ipWidget h2,
    .ipWidget h2 a,
    .ipWidget h3,
    .ipWidget h3 a,
    .ipWidget-IpFile ul li a
    {
      color: <?php echo $color; ?>;
    }

    header.main nav ul .level2
    {
      border-bottom: 5px solid <?php echo $color; ?> !important;
    }

    /* Select input */
    .selectBox-options li.selectBox-selected a,
    .ipModuleForm .ipmControlSubmit,
    .ipModuleForm .type-submit button,
    /* Footer submit */
    .footer-container .ipModuleForm .ipmControlSubmit
    {
      background-color: <?php echo $color; ?> !important;
      color: #ffffff !important;
    }

    /* Table */
    .ipWidget th, 
    .mceContentBody th, 
    .ipWidget thead td, 
    .mceContentBody thead td, 
    .ipWidget tbody tr:first-child td, 
    .ipWidget tbody tr:first-child td, 
    .mceItemTable tbody tr:first-child td,
    .mceItemTable tbody tr:first-child td,
    /* Search */
    .ipModuleSearch .ipmControlSubmit,
    /* Slider bubble */
    #slider-container .bx-wrapper .bx-pager.bx-default-pager a:hover, 
    #slider-container .bx-wrapper .bx-pager.bx-default-pager a.active,
    /* Slider link */
    #slider-container .slide .link a
    {
      background-color: <?php echo $color; ?> !important;
    }

        /* Gallery hover */
    .ipWidget-Gallery .hover {
      background-color: <?php echo $color; ?> !important;
    }

    /* Button hovers */        
    #slider-container .slide .link a:hover,
    .ipModuleForm .ipmControlSubmit:hover,
    .ipModuleSearch .ipmControlSubmit:hover,
    .ipModuleForm .type-submit button:hover
    {
      background-color: <?php echo $secondary_color; ?> !important;
    }
  </style>
</head>
<body<?php if (ipIsManagementState()) { echo ' class="manage"'; } ?>>

<div class="main-container">
  <header class="main wrapper clearfix">
    <?php echo ipSlot('logo'); ?>

    <?php
      $visible_langs = 0;
      foreach(ipContent()->getLanguages() as $lang){
        if($lang->visible)
          $visible_langs++;
      }
    ?>

    <nav id="mobile-menu" role="navigation"<?php echo ($visible_langs > 1) ? ' class="with-langs"' : '' ; ?>></nav>

    <nav id="regular-menu" role="navigation"<?php echo ($visible_langs > 1) ? ' class="with-langs"' : '' ; ?>>
      <?php echo ipSlot('menu', 'menu1'); ?>

      <?php
        if($visible_langs > 1){
          echo ipView('langs.php')->render();
        } 
      ?>
    </nav>
  </header>
