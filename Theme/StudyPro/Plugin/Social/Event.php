<?php

namespace Plugin\Social;

class Event
{
    public static function ipBeforeController()
    {
        ipAddCss('Plugin/Social/assets/social.css');
    }
}
