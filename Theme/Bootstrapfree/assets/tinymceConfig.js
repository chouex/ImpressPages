var originalConfigFunction = ipTinyMceConfig;

var ipTinyMceConfig = function () {
    var originalConfig = originalConfigFunction();
    originalConfig.visual_table_class = 'table';
    originalConfig.style_formats = [
        
        {title: 'Buttons', items: [
            {title : 'Default', inline : 'span', classes : 'btn btn-default'},
            {title : 'Primary', inline : 'span', classes : 'btn btn-primary'},
            {title : 'success', inline : 'span', classes : 'btn btn-success'},
            {title : 'Info', inline : 'span', classes : 'btn btn-info'},
            {title : 'Warning', inline : 'span', classes : 'btn btn-warning'},
            {title : 'Danger', inline : 'span', classes : 'btn btn-danger'},
        ]},
        {title: 'Image', items: [
            {title: 'Image Left', selector: 'img', styles: { 'float': 'left', 'margin': '0 10px 0 10px'}},
            {title: 'Image right', selector: 'img', styles: { 'float': 'right', 'margin': '0 10px 0 10px'}},
            {title: 'Image Rounded', selector: 'img', classes : 'img-rounded'},
            {title: 'Image Circle', selector: 'img', classes : 'img-circle'},
            {title: 'Image Thumbnail', selector: 'img', classes : 'img-thumbnail'}
        ]},
        {title: 'Visible', items: [
            {title: 'Large devices', inline : 'span', classes : 'visible-inline-lg'},
            {title: 'Mid devices', inline : 'span', classes : 'visible-inline-md'},
            {title: 'Small devices', inline : 'span', classes : 'visible-inline-sm'},
            {title: 'XS devices', inline : 'span', classes : 'visible-inline-xs'}
        ]},
        {title: 'Hidden', items: [
            {title: 'Large devices', inline : 'span', classes : 'hidden-inline-lg'},
            {title: 'Mid devices', inline : 'span', classes : 'hidden-inline-md'},
            {title: 'Small devices', inline : 'span', classes : 'hidden-inline-sm'},
            {title: 'XS devices', inline : 'span', classes : 'hidden-inline-xs'}
        ]},
        {title: 'Contextual', items: [
            {title: 'BG Primary', inline : 'span', classes : 'bg-primary',styles: { 'padding': '15px', 'display': 'inline-block'}, exact : true},
            {title: 'BG Success', inline : 'span', classes : 'bg-success',styles: { 'padding': '15px', 'display': 'inline-block'}, exact : true},
            {title: 'BG Info', inline : 'span', classes : 'bg-info', styles: { 'padding': '15px', 'display': 'inline-block'}, exact : true},
            {title: 'BG Warning', inline : 'span', classes : 'bg-warning', styles: { 'padding': '15px', 'display': 'inline-block'}, exact : true},
            {title: 'BG Danger', inline : 'span', classes : 'bg-danger', styles: { 'padding': '15px', 'display': 'inline-block'}, exact : true}
        ]}

    ];
    
    
    return originalConfig;
}

var bootstrap = ipTinyMceConfig;

var ipTinyMceConfig = function () {
    var originalConfig = bootstrap();
    
    originalConfig.toolbar1 = originalConfig.toolbar1 + ' code forecolor ';
    originalConfig.external_code_path = ip.baseUrl + 'Plugin/code/';
    originalConfig.external_textcolor_path = ip.baseUrl + 'Plugin/textcolor/';
    

    if (!originalConfig.external_plugins) {
        originalConfig.external_plugins = {};
    }
    originalConfig.external_plugins.code = ip.baseUrl  + 'Ip/Internal/Core/assets/js/tiny_mce/plugins/code/plugin.min.js';
    originalConfig.external_plugins.textcolor = ip.baseUrl  + 'Ip/Internal/Core/assets/js/tiny_mce/plugins/textcolor/plugin.min.js';
    
    return originalConfig;

}