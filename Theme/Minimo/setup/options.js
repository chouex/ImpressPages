var ipDesignOptions = {
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
    },

    showFooterWidgets: function (value) {
        var $footer = $(".footer");
        var $footerContainer = $('.footer-container');

        if(value) {
            $footer.show();
            $footerContainer.removeClass('no-widgets');
        } else {
            $footer.hide();
            $footerContainer.addClass('no-widgets');
        }
    }
};