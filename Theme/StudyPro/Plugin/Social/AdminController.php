<?php

namespace Plugin\Social;



class AdminController extends \Ip\GridController
{

    protected function config()
    {

        return array(			
            'title' => 'List Social Networks',
            'table' => 'Social',
			'deleteWarning' => 'Are you sure?',
            'sortField' => 'imageOrder',
            'createPosition' => 'bottom', 
            'fields' => array(
                array(
                    'label' => 'Title social network',
                    'field' => 'title',
					'validators' => array('Required')
                ),
                array(
                    'label' => 'URL social network with http://',
                    'field' => 'url',
					'validators' => array('Required')
                ),				
                array(
                    'type' => 'Select',
                    'label' => 'Select Link target',
                    'field' => 'target',
                    'values' => array(
                       array('_blank', 'open in new window'),
                       array('_self', 'open in same window')
                    )
                ),			
                array(
                    'type' => 'RepositoryFile',
                    'label' => __('Image file', 'FormExample'),
                    'field' => 'imageFile',
                    'preview' => 'Plugin\Social\Model::showImage'
                )

            )
        );
    }

}
