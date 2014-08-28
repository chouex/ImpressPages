<?php

namespace Plugin\Study;



class AdminController extends \Ip\GridController
{

    protected function config()
    {

        return array(			
            'title' => 'Slideshow Image',
            'table' => 'Study',
			'deleteWarning' => 'Are you sure?',
            'sortField' => 'imageOrder',
            'createPosition' => 'bottom', 
            'fields' => array(
                array(
                    'label' => 'Title',
                    'field' => 'title',
					'validators' => array('Required')
                ),
                array(
                    'type' => 'RepositoryFile',
                    'label' => __('Image file', 'FormStudy'),
                    'field' => 'imageFile',
					'preview' => 'thumbnails'
                    //'preview' => 'Plugin\Study\Model::showImage'
                )

            )
        );
    }

}
