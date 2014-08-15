<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
  <?php
    // Theme css files
    ipAddCss(ipThemeUrl('assets/theme.css'), null, 150);

    // Generate head
    echo ipHead();

    ipAddJs(ipThemeUrl('js/libs/modernizr-2.6.1.min.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.prettyCheckable.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.colorbox.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.selectBox.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.responsiveMenu.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.toTop.js'));
    ipAddJs(ipThemeUrl('js/plugins/jquery.responsivetable.min.js'));

    // Our main javascript file where all the magic happens
    ipAddJs(ipThemeUrl('js/site.js'));
    
    // Generate all theme and ImpressPages javascript files
    echo ipJs();

    // Website color
    $color = ipGetThemeOption('websiteColor');
  ?>
  <style type="text/css">
    /* Logo */
    header.main .logo, header.main .logo a,
    /* Nav */
    header.main nav ul li.active > a,
    header.main nav ul li:hover > a,
    header.main nav .langs li.current a,
    /* Links */
    .ipWidget a, 
    .mceContentBody a,
    .ipWidget-IpNewsBlog .ipWidget-IpText .ipmNewsBlogPage,
    .ipWidget-IpFile ul li a
    {
      color: <?php echo $color; ?>;
    }

    /* Select input */
    .selectBox-options li.selectBox-selected a,
    .ipModuleForm .ipmControlSubmit,
    .ipModuleForm .type-submit button
    {
      background-color: <?php echo $color; ?>;
      color: #ffffff;
    }

    .ipWidget-IpFaq .ipwExpanded .ipwQuestion:before,
    .ipWidget-IpFaq:hover .ipwQuestion:before
    {
      border: 1px solid <?php echo $color; ?>;
      color: <?php echo $color; ?>;
    }

    /* Gallery hover */
    .ipWidget-Gallery ._container ._item a .hover,
    /* Table */
    .ipPreviewWidget th, 
    .mceContentBody th, 
    .ipPreviewWidget thead td, 
    .mceContentBody thead td, 
    .ipPreviewWidget tbody tr:first-child td, 
    .ipPreviewWidget tbody tr:first-child td, 
    .ipTableManagement tbody tr:first-child td,
    .ipTableManagement tbody tr:first-child td
    {
      background-color: <?php echo $color; ?>;
    }
  </style>
</head>
<body<?php if (ipIsManagementState()) { echo ' class="manage"'; } ?>>

<header class="main clearfix">
  <div class="upper">
    <div class="wrapper responsive-width">
      <?php echo ipSlot('logo'); ?>

      <?php echo ipView('social.php')->render(); ?>

      <?php
        $visible_langs = 0;
        foreach(ipContent()->getLanguages() as $lang){
          if($lang->visible)
            $visible_langs++;
        }

        if($visible_langs > 1){
          echo ipView('langs.php')->render();
        } 
      ?>
    </div>
  </div>

  <div class="bottom">
    <div class="wrapper responsive-width">
      <nav id="mobile-menu" role="navigation"></nav>

      <nav id="regular-menu" role="navigation">
        <?php echo ipSlot('menu', 'menu1'); ?>

        <div class="ipModuleSearch search-toggler"<?php echo ((bool) ipGetThemeOption('showSearch')) ? ' style="margin-top:0;"' : ' style="display: none;"'; ?>>
          <?php //echo ipSlot('search'); ?>
        </div>
      </nav>
    </div>
  </div>
</header>
