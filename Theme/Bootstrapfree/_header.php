<?php echo ipDoctypeDeclaration(); ?>

<html<?php echo ipHtmlAttributes(); ?>>
<head>
    <?php ipAddCss('assets/theme.css'); ?>
    <?php echo ipHead(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <header class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo ipSlot('logo'); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php echo ipSlot('menu', 'menu1'); ?>
      <?php if (count(ipContent()->getLanguages()) > 1) { ?>
                    <div class="languages pull-right">
                        <?php echo ipSlot('languages'); ?>
                    </div>
                <?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

        
    </header>
 <div class="container-fluid">