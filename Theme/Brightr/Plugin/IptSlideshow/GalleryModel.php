<?php
namespace Plugin\IptSlideshow;

class GalleryModel {

  public static function getSlides()
  {
    return ipDb()->selectAll('iptSlideshow', '*', array('visibility' => true), ' ORDER BY galleryOrder');
  }

}
