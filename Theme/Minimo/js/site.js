(function($){
  var ResponsiveTables = function(){
    $('.ipWidget-IpTable table').responsiveTable({
      scrollHintEnabled: false
    });
  };

  var ResponsiveMenu = function(){
    $("#regular-menu ul.level1").responsiveMenu({
      prependTo: '#mobile-menu',
      switchWidth: 890,
      topOptionText: 'Menu'
    });
  };

  var FormsModule = {
    init: function(){
      this.addLabelsToRadios($('.ipmControlRadio'));
      this.styleCheckboxesAndRadios($('.ipmControlRadio, .ipmControlCheckbox'));

      this.styleSelects($('.ipmControlSelect'));
    },

    addLabelsToRadios: function(radios){
      if(radios.length > 0){
        radios.each(function(index, radio){
          var $radio = $(radio),
              $parent = $radio.parent();

          $radio.attr('data-label', $radio.attr('value'));

          $parent.text('').append($radio);
        });
      }
    },

    styleCheckboxesAndRadios: function(items){
      if(items.length > 0)
        items.prettyCheckable({
          color: 'grey'
        });
    },

    styleSelects: function(selects){
      selects.selectBox();

      selects.selectBox('settings', { 
        menuTransition: 'slide'
      });
    }
  };

  var GalleryWidgetSetup = function(){
    $('.ipWidget-Gallery a, .ipWidget-IpImage a').colorbox2({
      rel:'ipwImage',
      maxWidth:'90%',
      maxHeight:'90%'
    });

    $(window).resize(function () {
      if($('#cboxOverlay').is(':visible')){
        $.colorbox2.load(true);
      }
    });

    $("body").delegate(".ipWidget-Gallery a", "mouseenter", function(event) {
      var $self = $(event.currentTarget);

      $self
        .find('.hover')
        .stop(1, 1)
        .fadeIn(200);
    });
    $("body").delegate(".ipWidget-Gallery a", "mouseleave", function(event) {
      var $self = $(event.currentTarget);

      $self
        .find('.hover')
        .stop(1, 1)
        .fadeOut(200);
    });    
  };


  $(document).ready(function() {
    FormsModule.init();

    ResponsiveMenu();
    ResponsiveTables();
    
    //GalleryWidgetSetup();

    $().UItoTop({
      easing: 'swing',
      scrollSpeed: 600
    });
  });
})(jQuery);

GoogleMaps = {
  init: function(lat, lon, zoomLevel){
    var self = this;

    $(document).ready(function(){
      self.show(lat, lon, zoomLevel);
    });
  },

  show: function(lat, lon, zoomLevel){
    var latlng = new google.maps.LatLng(lat, lon);

    var settings = {
      zoom: zoomLevel,
      center: latlng,
      panControl: true,
      scrollwheel: false,
      mapTypeControl: true,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
      },
      navigationControl: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("the-map"), settings);

    var markerPos = new google.maps.LatLng(lat, lon);
    var marker = new google.maps.Marker({
      position: markerPos,
      map: map,
      title: ""
    });
  }
}
