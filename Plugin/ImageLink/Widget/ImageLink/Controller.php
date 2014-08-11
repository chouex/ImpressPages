<?php

namespace Plugin\ImageLink\Widget\ImageLink;

class Controller extends \Ip\WidgetController
{
    public function getTitle() {
       
        return __('imagelink', 'imagelink',false);
    }

    public function generateHtml( $revisionId, $widgetId, $data, $skin )
    {
        
        
        if( empty( $data['serialized'] ) ) {
            $data['serialized'] = '';
            
        } else {
            parse_str( $data['serialized'], $data );
            $data['currentLink'] = $revisionId;
            $name=$this->getTitle();
            $data['data'][$name]['widgetId'] = $widgetId;
            //$data['widgetId'] = $widgetId;
        }

        //print_r($data);
        return parent::generateHtml( $revisionId, $widgetId, $data, $skin );
    }

    public function adminHtmlSnippet()
    {
        $form1 = new \Ip\Form();
   
        $fild_url = new \Ip\Form\Field\Text
        (
            array(
                'name' => 'data[imagelink][url]',
                'label' =>'Link',
            )
        );
       // $fild_url->addValidator('Required');
        $form1->addField($fild_url);
        
        $fild_width = new \Ip\Form\Field\Text
        (
            array(
                'name' => 'data[imagelink][width]',
                'label' =>'image_width',
            )
        );
        //$fild_width->addValidator('Number');
        $form1->addField($fild_width);
        
        $fild_height = new \Ip\Form\Field\Text
        (
            array(
                'name' => 'data[imagelink][height]',
                'label' =>'image_height',
            )
        );
        //$fild_height->addValidator('Number');
        $form1->addField($fild_height);
        //$form1->setAjaxSubmit(true);
        return ipView('snippet/edit.php',array('form1' => $form1))->render();
    }

}

?>
