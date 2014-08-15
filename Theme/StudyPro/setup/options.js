var ipDesignOptions = {
    textColor: function (value) {
        $('body, .leftmenu li a:link, .leftmenu li a:visited, .bottom_block a, .bottom_block a:visited').css('color', value);
        ipDesign.reloadLessFiles(['theme']);
    },
    linkColor: function (value) {
        $('a, a:visited, a:hover, h1, h2, h3, h4, h5, h6, .carousel1 h3 a:hover').css('color', value);
        ipDesign.reloadLessFiles(['theme']);
    },
    navColor: function (value) {
        'use strict';
        $('.ipModuleForm .btn:hover, .carousel1 li .more:hover, .prev, .next, .pagination  li a, .leftmenu li a:hover, .leftmenu li.active a,.topmenu .level1 > li:hover > a,.topmenu .level1 > li > a:hover, .topmenu .level1 > .active > a, .topmenu .level1 > .selected > a, .topmenu li:hover > ul').css('background-color', value);
    },
    topColor: function (value) {
        'use strict';
        $('body').css('background-color', value);
    },
    headerColor: function (value) {
        $('.ipModuleForm .btn,.prev:hover, .next:hover, .pagination  li a:hover, header, .carousel1 li .more').css('background-color', value);
		$('.carousel1 h3 a,.content.page1 h2.wel').css('color', value);
		$('.leftmenu li a').css('border-left', value);
		$('.leftmenu li a:hover, .leftmenu li.active a').css('border-bottom', value);
        ipDesign.reloadLessFiles(['theme']);
    },
    mainColor: function (value) {
        'use strict';
        $('.main').css('background-color', value);
    }
};
