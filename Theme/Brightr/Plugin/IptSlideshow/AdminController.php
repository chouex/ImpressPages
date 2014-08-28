<?php
namespace Plugin\IptSlideshow;

class AdminController extends \Ip\GridController
{
    protected  function config(){
        return array(
            'title' => 'Slideshow',
            'table' => 'iptSlideshow',
            'deleteWarning' => 'Are you sure?',
            'sortField' => 'galleryOrder',
            'createPosition' => 'top',
            'pageSize' => 10,
            'fields' => array(
                array(
                    'type' => 'Checkbox',
                    'label' => 'Visible',
                    'showInList' => true,
                    'field' => 'visibility'
                ),
                array(
                    'label' => 'Title',
                    'field' => 'title',
                    'validators' => array('Required')
                ),
                array(
                    'label' => 'Description',
                    'field' => 'description',
                    'validators' => array('Required')
                ),
                array(
                    'type' => 'Checkbox',
                    'label' => 'Show Url',
                    'showInList' => true,
                    'field' => 'showurl'
                ),
                array(
                    'label' => 'Url',
                    'field' => 'url',
                ),
                array(
                    'label' => 'Url text',
                    'field' => 'urltext',
                ),              
                array(
                    'type' => 'RepositoryFile',
                    'label' => 'image',
                    'field' => 'image'
                )
            )
        );
    }

}