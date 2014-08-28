<?php

namespace Plugin\IptSlideshow;

class Filter
{
    public static function ipSendResponse($response)
    {
        if (!($response instanceof \Ip\Response\Layout)) {
            return $response;
        }

        $js_dir = "public/js/";
        $css_dir = "public/css/";
        ipAddCss($css_dir.'slideshow.css');
        ipAddJs($js_dir.'jquery.bxslider.js');
        ipAddJs($js_dir.'slider.js');

        return $response;
    }
}
