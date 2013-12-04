<?php echo $this->doctypeDeclaration(); ?>
<html<?php echo $this->htmlAttributes(); ?>>
<head>
    <?php
    ipAddCss(ipThemeUrl('ipContent.css'));
    ipAddCss(ipThemeUrl('theme.css'));
    ipPrintHead();
    ?>
</head>
<body>
    <div class="topmenu">
        <?php
        echo $this->generateMenu('top', 'menu1'); // first argument is unique name of this menu within your theme. Choose anything you like. Second argument is a zone name
        ?>
    </div>
    <div class="content">
        <?php echo ipBlock('main')->render(); ?>
    </div>
    <?php
        ipAddJavascript(ipFileUrl('Ip/Module/Ip/assets/js/jquery.js'));
        ipAddJavascript(ipThemeUrl('theme.js'));
        ipPrintJavascript();
    ?>
</body>
</html>