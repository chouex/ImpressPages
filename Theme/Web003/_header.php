<?php echo ipDoctypeDeclaration(); ?>
<html <?php echo ipHtmlAttributes(); ?>>
<head>
    <?php ipAddCss('assets/style.css'); ?>
    <?php ipAddCss('assets/theme.css'); ?>
    <?php echo ipHead(); ?>
    <?php ipAddCss('assets/reset.css'); ?>
    <meta name="viewport"
	content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<div class="bluel"></div>
		<div class="head">
			<div class="logo">
        <?php echo ipSlot('logo'); ?></div>
			<div class="right-top">
       <?php echo ipBlock('block-top')->render(); ?></div>
		</div>
		<div class="menu00">
			<div class="topmenu">
        <?php echo ipSlot('menu', 'menu1'); ?></div>
		</div>