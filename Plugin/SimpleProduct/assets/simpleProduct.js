var cart;
var t=1;
$( document ).ready(function() {
    "use strict";

    //update delivery price when delivery country changes
    $('.ipsPhysicalProductForm .ipsCountry').on('change', function (e) {

        var data = {
            'sa': 'SimpleProduct.updateDeliveryCost',
            'country': $(this).val()
        };

        $.ajax({
            url: ip.baseUrl,
            data: data,
            dataType: 'json',
            type: 'GET',
            success: function (response) {
                $('.ipsPhysicalProductForm .ipsDeliveryCostHtml').replaceWith(response.html);
            },
            error: function (response) {
                alert('Unexpected error.' + response.responseText);
            }
        });
    });

    //autosubmit virtual product checkout form as virtual form has nothing needed to be entered.
    $('.ipsProductWidgetAutosubmit').submit();

    cart = $('#cart').DCAJAXPaypalCart({
        width:600,
        height:600,
        currency:'MOP',
        autoOpenWhenAdd:true,  // Enable auto open the cart window after a item added to cart (Optional)
        autoCleanCart:true, // Enable auto clean cart after checkout button click (Optional)
        openNewCheckOutWindow:false, // Indicate if the paypal checkout window is open in a new window (Optional)
        themeColor:'#0066cc',       // Color in the theme (Optional)
        themeDarkColor:'#0040a1',   // Dark color in the theme (Optional)
        /*header:'Header Text Here',  // The content of header (Optional)
        footer:'Footer Text Here',  // The content of footer (Optional)
        paypalOptions:{
            business:'YOU_PAYPAL_EMAIL@email.com'
        }*/
    });

    //chopping cart
    $( ".shopping" ).on( "click", function() {
        //console.log($(this).parents('._title'));
        cart.add({
            id:$( this ).attr('id'),                        // Specify the unique id for this item
            name:$(this).parents('.ipWidget').find('._title').text(),                  // Item name appear on the cart
            thumbnail:$(this).parents('.ipWidget').find('img').attr('src'),  // Thumbnail path of the item (Optional)
            price:$(this).parents('.ipWidget').find('._price').text(),                          // Cost of the item
            shipping:0,                         // Shipping cost for the item (Optional)
            allowMultiple:true                  // Set if allow multiple item in cart (Optional)
        });
        cart.openCart();
    });

});
