var ipDesignOptions = {
    mainColor: function (value) {
        $(
            /* Logo */
            'header.main .logo, header.main .logo a,' +
            /* Nav */
            'header.main nav ul li.current > a,' +
            'header.main nav ul li a:hover,' +
            'header.main nav .langs li.current a,' +
            /* Sidebar menu */
            '#side-menu ul.level1 > li.current > a,' + 
            '#side-menu ul.level2 > li.current > a,' +
            '#side-menu ul.level3 > li.current > a,' +
            '#side-menu ul.level1 > li a:hover,' +
            '#side-menu ul.level2 > li a:hover,' +
            '#side-menu ul.level3 > li a:hover,' +
            /* Headings */
            '.features-container .feature h2,' +
            '.ipPreviewWidget h1,' +
            '.ipPreviewWidget h1 a,' +
            '.ipPreviewWidget h2,' +
            '.ipPreviewWidget h2 a,' +
            '.ipPreviewWidget h3,' +
            '.ipPreviewWidget h3 a,' +
            '.ipWidget-IpNewsBlog .ipWidget-IpText .ipmNewsBlogPage,' +
            '.ipWidget-IpFile ul li a,' +
            /* FAQ */
            '.ipWidget-IpFaq .ipwExpanded .ipwQuestion,' +
            '.ipWidget-IpFaq .ipwDisabled .ipwQuestion,' +
            '.ipWidget-IpFaq .ipwQuestion:hover'
        ).css({
            'color': value
        });

        $('.header.main nav ul .level2').css({
            'border-bottom': '5px solid ' + value
        });

        $(
            '.selectBox-options li.selectBox-selected a,' +
            '.ipModuleForm .ipmControlSubmit,' +
            /* Footer submit */
            '.footer-container .ipModuleForm .ipmControlSubmit'
        ).css({
            'background-color': value,
            'color': '#ffffff'
        });

        $(
            '.ipWidget-IpFaq .ipwExpanded .ipwQuestion:before,' +
            '.ipWidget-IpFaq .ipwDisabled .ipwQuestion:before,' +
            '.ipWidget-IpFaq .ipwQuestion:hover:before,' +
            /* Gallery hover */
            '.ipWidget-IpImageGallery ul li a .hover,' +
            /* Table */
            '.ipPreviewWidget th,' +
            '.mceContentBody th,' +
            '.ipPreviewWidget thead td,' + 
            '.mceContentBody thead td,' +
            '.ipPreviewWidget tbody tr:first-child td,' +
            '.ipPreviewWidget tbody tr:first-child td,' +
            '.mceItemTable tbody tr:first-child td,' +
            '.mceItemTable tbody tr:first-child td,' +
            /* Search */
            '.ipModuleSearch .ipmControlSubmit,' +
            /* Slider bubble */
            '#slider-container .bx-wrapper .bx-pager.bx-default-pager a:hover,' +
            '#slider-container .bx-wrapper .bx-pager.bx-default-pager a.active,' +
            /* Slider link */
            '#slider-container .slide .link a'
        ).css({
            'background-color': value
        });
    },

    secondaryColor: function (value) {
        $(
            /* Button hovers */        
            '#slider-container .slide .link a:hover,' +
            '.ipModuleForm .ipmControlSubmit:hover,' +
            '.ipModuleSearch .ipmControlSubmit:hover'
        ).css({
            'background-color': value
        })
    },

    siteBackground: function (value) {
        var themeDir = ip.baseUrl + 'Theme/Brightr/img/backgrounds/';

        $('body').css({
            'background': '#ffffff url(' + themeDir + value + '.png) repeat center center'
        });
    },

    showBreadcrumbs: function (value) {
        if(value) {
            $('.title-above-breadcrumbs').removeClass('without-breadcrumbs');

            $('.breadcrumbs').show();
        } else {
            $('.title-above-breadcrumbs').addClass('without-breadcrumbs');

            $('.breadcrumbs').hide();
        }
    },

    showFooterWidgets: function (value) {
        if(value) {
            $('.footer-container').removeClass('no-widgets-area');

            $('.footer-widget-area').show();
        } else {
            $('.footer-container').addClass('no-widgets-area');

            $('.footer-widget-area').hide();
        }
    },

    showSearchInSidebar: function (value) {
        if(value) {
            $('#sidebar-search-toggle').show();
        } else {
            $('#sidebar-search-toggle').hide();
        }
    },

    showMenuInSidebar: function (value) {
        if(value) {
            $('#sidebar-menu-toggle').show();
        } else {
            $('#sidebar-menu-toggle').hide();
        }
    },

    /*
        $('body').css({
            'background': 'url(' + themeDir + value') no-repeat center center fixed',
            '-webkit-background-size': 'cover',
            '-moz-background-size': 'cover',
            '-o-background-size': 'cover',
            'background-size': 'cover'
        }) 
    */

    websiteColor: function (value) {
        $('header.main .logo, header.main .logo a,' +
        'header.main nav ul li.current > a,' +
        'header.main nav ul li:hover > a,' +
        'header.main nav .langs li.current a,' +
        '.ipPreviewWidget a,' +
        '.mceContentBody a,' +
        '.ipWidget-IpNewsBlog .ipWidget-IpText .ipmNewsBlogPage,' +
        '.ipWidget-IpFile ul li a,' +
        '.ipWidget-IpFaq .ipwExpanded .ipwQuestion, ' +
        '.ipWidget-IpFaq .ipwDisabled .ipwQuestion,' +
        '.ipWidget-IpFaq .ipwQuestion:hover').css('color', value);

        $('.selectBox-options li.selectBox-selected a,' +
        '.ipModuleForm .ipmControlSubmit').css({
            'color': '#ffffff',
            'backgroundColor': value
        });

        $('.ipWidget-IpFaq .ipwExpanded .ipwQuestion:before,'+
        '.ipWidget-IpFaq:hover .ipwQuestion:before').css({
            'color': value,
            'border': '1px solid ' + value
        });

        $('.ipWidget-IpFaq .ipwExpanded .ipwQuestion:before, ' +
        '.ipWidget-IpFaq .ipwDisabled .ipwQuestion:before,' +
        '.ipWidget-IpFaq .ipwQuestion:hover:before,' +
        '.ipWidget-IpImageGallery ul li a .hover,' +
        '.ipPreviewWidget th, ' +
        '.mceContentBody th, ' +
        '.ipPreviewWidget thead td, ' +
        '.mceContentBody thead td, ' +
        '.ipPreviewWidget tbody tr:first-child td, ' +
        '.ipPreviewWidget tbody tr:first-child td, ' +
        '.mceItemTable tbody tr:first-child td,' +
        '.mceItemTable tbody tr:first-child td').css({
            'backgroundColor': value
        });
    },

    showSocialIcons: function (value) {
        var $icons = $('.social-icons-wrapper');

        if(value) {
            $icons.show();
        } else {
            $icons.hide();
        }
    },

    showSearch: function (value) {
        var $searchBar = $('.search-toggler');

        if(value) {
            $searchBar.show();
        } else {
            $searchBar.hide();
        }      
    }
};