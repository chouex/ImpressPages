/*
    Plugin: responsiveMenu, v1.0
    
    Description:
        This jQuery plugin creates a selectbox from html menu markup
        based on ul, li, a tags including infinite levels of submenus.

    Usage:
        $("#menu-container > ul").responsiveMenu();
        
        $("#menu-container > ul").responsiveMenu({
            currentClass : 'current',
            switchWidth  : 600,
            prependTo    : 'body',
            visualTab    : '--'
        });
*/

;(function($, window, document, undefined){

    var pluginName = "responsiveMenu",
        defaults = {
            currentClass : 'current',
            switchWidth  : 600,
            prependTo    : 'body',
            visualTab    : '--'
        };

    function Plugin(element, options) {
        this.element = element;

        this.options = $.extend({}, defaults, options);

        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    Plugin.prototype = {

        init: function() {
            this._createSelect(this.element);
        },

        _createSelect: function(el){
            var self = this,
                $el = $(el),
                $select = $('<select class="responsive-menu" />');
                menuTree = self._generateMenuTree(el);
                selectOptions = '';

            var addOptionsRecursive = function(menuTree, level){
                level++;

                $.each(menuTree, function(index, value){
                    selectOptions += self._createOption(value.title, value.url, value.current, level);
                    
                    addOptionsRecursive(value.subnodes, level);
                });
            };
            addOptionsRecursive(menuTree, 0);

            $select.append(selectOptions);

            $select
                .change(function(){
                    self._redirectTo($(this).val());
                })
                .prependTo(this.options.prependTo);


            $(window).resize(function(){
                if($(this).width() <= self.options.switchWidth){
                    $el.hide();
                    $select.show();
                } else {
                    $select.hide();
                    $el.show();
                }
            }).trigger('resize');
        },

        _generateMenuTree: function(el){
            var self = this,
                menu = [];

            $(el).children('li').each(function(index, value){
                var $menuLi      = $(value),
                    $menuAnchor  = $($menuLi).find('> a'),
                    $submenu     = $menuLi.find('> ul'),
                    menuItem     = {};

                menuItem = {
                    title   : $menuAnchor.text(),
                    url     : $menuAnchor.attr('href'),
                    current : $menuLi.hasClass(self.options.currentClass),
                    subnodes: self._generateMenuTree($submenu)  
                };

                menu.push(menuItem);
            });

            return menu;
        },

        _createOption: function(title, url, current, level){
            var space = this._repeatString(this.options.visualTab, level),
                title = (level == 1) ? title : space + ' ' + title,
                selected = '';

            if(current == true)
                selected = ' selected';

            return '<option value="' + url + '"' + selected + '>' + title + '</option>\n';
        },

        _repeatString: function(pattern, count) {
            if (count < 1) return '';
            
            var result = '';
            
            while (count > 0) {
                if (count & 1) result += pattern;
                count >>= 1, pattern += pattern;
            }
            
            return result;
        },

        _redirectTo: function(url){
            document.location.href = url;
        }
    };

    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin( this, options ));
            }
        });
    };

})(jQuery, window, document);