<?php
namespace Plugin\IptSlideshow;
 
class Slot {

  public static function iptSlideshow($params)
  {
    $images = GalleryModel::getSlides();
    $data = array(
      'images' => $images,
    );

    return ipView('view/slideshow.php', $data)->render();
  }

}
