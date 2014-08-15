<?php
namespace Plugin\Courses;

use Ip\Form\Exception;

class Model
{
    public static function getAllImages()
    {
        $images = ipDb()->selectAll('Courses', array('title', 'description', 'url', 'imageFile'), 'ORDER BY imageOrder ASC');
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

        $imageId = ipDb()->insert('Courses', $image);
        ipBindFile($image['imageFile'], 'Table_Courses_image', $imageId);

    }
}
