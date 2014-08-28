<?php

namespace Plugin\Study\Setup;

class Worker extends \Ip\SetupWorker{

    public function activate()
    {
        $table = ipTable('Study');
        ipDb()->execute("
CREATE TABLE IF NOT EXISTS $table (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageOrder` DOUBLE NOT NULL,
  `imageFile` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
        ");
        ipDb()->execute("
INSERT INTO $table (`id`, `imageOrder`, `imageFile`, `title`) VALUES
(1, 1, 'study1.jpg', 'Title image'),
(2, 2, 'study2.jpg', 'Title image'),
(3, 3, 'study3.jpg', 'Title image'),
(4, 4, 'study4.jpg', 'Title image'),
(5, 5, 'study5.jpg', 'Title image');
        ");
    
    $destdir = ipFile('file/repository');
	$fromdir = ipFile('Plugin/Study/Setup/img');
    $link1= $fromdir."/study1.jpg";
	$img1=file_get_contents($link1);
    file_put_contents($destdir.substr($link1, strrpos($link1,'/')), $img1);
    $link2= $fromdir."/study2.jpg";
	$img2=file_get_contents($link2);
    file_put_contents($destdir.substr($link2, strrpos($link2,'/')), $img2);
    $link3= $fromdir."/study3.jpg";
	$img3=file_get_contents($link3);
    file_put_contents($destdir.substr($link3, strrpos($link3,'/')), $img3);
    $link4= $fromdir."/study4.jpg";
	$img4=file_get_contents($link4);
    file_put_contents($destdir.substr($link4, strrpos($link4,'/')), $img4);
    $link5= $fromdir."/study5.jpg";
	$img5=file_get_contents($link5);
    file_put_contents($destdir.substr($link5, strrpos($link5,'/')), $img5);	
    }

    public function deactivate()
    {
        $table = ipTable('Study');
        try {
            ipDb()->execute("
              DROP TABLE $table;
            ");
        } catch (\Exception $e) {
        }
    }

    public function remove()
    {

    }


}
