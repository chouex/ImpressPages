<?php

namespace Plugin\Courses;



class AdminController extends \Ip\GridController
{

    protected function config()
    {

        return array(			
            'title' => 'List Courses item',
            'table' => 'Courses',
			'deleteWarning' => 'Are you sure?',
            'sortField' => 'imageOrder',
            'createPosition' => 'bottom', 
            'fields' => array(
                array(
                    'label' => 'Title Courses',
                    'field' => 'title',
					'validators' => array('Required')
                ),
                array(
                    'label' => 'Description Courses',
                    'field' => 'description',
					'validators' => array('Required')
                ),				
                array(
                    'label' => 'URL read more with http://',
                    'field' => 'url'
                ),							
                array(
                    'type' => 'RepositoryFile',
                    'label' => __('Image file', 'FormExample'),
                    'field' => 'imageFile',
                    'preview' => 'Plugin\Courses\Model::showImage'
                )

            )
        );
    }

}
