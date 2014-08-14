<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 6/24/14
 * Time: 10:01 PM
 */

namespace Plugin\SimpleProduct;

class Event
{
    public static function ipBeforeController()
    {    
    	ipAddJsVariable('cartColor',ipGetOption("SimpleProduct.theme_color",'#00abff'));
        ipAddCss('assets/simpleProduct.css');
        ipAddCss('assets/dc.core.1.1.0.min.css');
        ipAddCss('assets/dc.cart.css');

        ipAddJs('assets/simpleProduct.js');
        ipAddJs('assets/dc.core.1.1.0.min.js');
        ipAddJs('assets/dc.cart.free.min.js');
        ipAddJs('assets/dc.cart.lang.js');
    }


}
