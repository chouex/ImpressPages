<?php
/**
 * Created by PhpStorm.
 * User: Marijus
 * Date: 5/16/14
 * Time: 2:21 PM
 */

namespace Plugin\AddThis;

class Slot
{

    public static function AddThis($widget = false)
    {
        if ($widget){
            $layout = ipGetOption('AddThis.widgetLayout');
        }else{
            $layout = ipGetOption('AddThis.slotLayout');
        }

        return ipView('view/'.$layout.'.php')->render();
    }

}