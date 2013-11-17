<?php
/**
 * @package ImpressPages

 *
 */
namespace Ip\Module\Content\Widget;




class IpTitle extends \Ip\Module\Content\Widget{

    public function managementHtml($instanceId, $data, $layout) {
        $curUrl = ipGetRequest()->getUrl();
        $parts = explode('?', $curUrl);
        $curUrl = $parts[0];
        $data['curUrl'] = $curUrl;
        return parent::managementHtml($instanceId, $data, $layout);
    }


    public function getTitle() {
        return __('Title', 'ipAdmin');
    }
    
}