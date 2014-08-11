var ipDesignOptions = {
    textColor: function (value) {
        $('.ipModuleForm .ipmLabel, .ipWidget-IpText td, .ipWidget-Text').css('color', value);
        ipDesign.reloadLessFiles(['theme']);
    },
   
    bodyBackgroundColor: function (value) {
        'use strict';
        $('body').css('background-color', value);
    },
    'navbar-inverse-bg': function (value) {
       'use strict';
        $('.navbar-inverse').css('background-color', value);
    },
    'navbar-default-link-active-bg': function (value) {
       'use strict';
        $('.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus').css('background-color', value);
    },
    'breadcrumb-bg': function (value) {
       'use strict';
        $('.breadcrumb').css('background-color', value);
    },
     'navbar-inverse-toggle-hover-bg': function (value) {
       'use strict';
        $('.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus').css('background-color', value);
    },
     'brand-primary': function (value) {
       'use strict';
        $('.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus').css('background-color', value);
    },
     'navbar-inverse-link-hover-color': function (value) {
       'use strict';
        $('.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus').css('color', value);
    },
     'component-active-color': function (value) {
       'use strict';
        $('.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus').css('color', value);
    },
     'active-items-bg': function (value) {
       'use strict';
        $('.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus').css('background-color', value);
    },
     ipFormButtonBackground: function (value) {
       'use strict';
        $('.ipModuleForm .btn-default').css('background-color', value);
   },
     ipLinkColor: function (value) {
       'use strict';
        $('.languages a').css('color', value);
   },
     bgfooter: function (value) {
       'use strict';
        $('.footer').css('background-color', value);
         ipDesign.reloadLessFiles(['theme']);
   }
};