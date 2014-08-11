$(document).ready(function () {
    "use strict";
    


$('.vertM').css("display", "block");
$('.vertM > ul').toggleClass('navbar-nav nav-pills nav-stacked');
 
$('.slidergall').css("visibility", "visible");  

$('.logo').css({"display": "block", "margin": "0px"});
$('.logo > a').attr('class','navbar-brand');

$('.ipWidget-Map').css({"height": "100%", "width": "100%"});
$('.ipWidget-Map > div.ui-resizable').css({"height": "100%", "width": "100%"});



});