<?php
namespace Plugin\Study;

use Ip\Form\Exception;

class Model
{
    public static function getAllImages()
    {
        $images = ipDb()->selectAll('Study', array('title', 'imageFile'), 'ORDER BY imageOrder ASC');

        return $images;
    }
	
    public static function showImage($value, $recordData = null)
    {

        if ($value) {
            $transform = array (
                'type' => 'fit',
                'width' => 100,
                'height' => 100
            );
            $thumbnailUrl = ipReflection($value, $transform, 'preview.jpg');

            $imageHtml = '<a href="' . ipFileUrl('file/repository/' . $value) . '" target="blank"><img src="' . $thumbnailUrl . '" alt="' . esc($value) . '"></a>';

            return $imageHtml;
        } else {
            return false;
        }
    }


    public static function saveImageRecord($image)
    {

        $imageId = ipDb()->insert('Study', $image);
        ipBindFile($image['imageFile'], 'Table_Study_image', $imageId);

    }
}
