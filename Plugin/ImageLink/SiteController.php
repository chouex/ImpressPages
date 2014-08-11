<?php

namespace Plugin\ImageLink;

class SiteController extends \Ip\Controller
{

    public function index()
    {
       
    }

    public function showForm()
    {

   
    }

    public function save()
    {
        $postData = ipRequest()->getPost();
        $data = array('url'=>$postData['url'],'width'=>$postData['width'],'height'=>$postData['height']);
        $html = ipView('view/imagelink.php',$data)->render();
        return $html;
    }

    public function showSuccessMessage()
    {
        $renderedHtml = ipView('view/success.php')->render();

        return $renderedHtml;
    }

    public function redirectLink()
    {
        $value = ipRequest()->getRequest('link');
        //p
        $url = $this->addhttp($value);
        
        return new \Ip\Response\Redirect($url); 
    }

    public function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}


}

?>