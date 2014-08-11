/* Place the code below into MySamplePlugin/Widget/HelloWorld/assets/MyWidget.js file */
IpWidget_AddThis = function() {

    this.$widgetObject = null;

    this.init = function($widgetObject, data) {
        addthis.toolbox('.addthis_toolbox');
    };

    this.onAdd = function () {

    }

};


