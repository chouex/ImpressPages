<?php

namespace Plugin\Courses\Setup;

class Worker extends \Ip\SetupWorker{

    public function activate()
    {
        $table = ipTable('Courses');
        ipDb()->execute("
CREATE TABLE IF NOT EXISTS $table (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageOrder` DOUBLE NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `imageFile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
        ");
        ipDb()->execute("
INSERT INTO $table (`id`, `imageOrder`, `title`, `description`,  `url`, `imageFile`) VALUES
(1, 1, 'Title Course', 'Long description course here ...', '','courses1.jpg'),
(2, 2, 'Title Course', 'Long description course here ...', '','courses2.jpg'),
(3, 3, 'Title Course', 'Long description course here ...', '','courses3.jpg'),
(4, 4, 'Title Course', 'Long description course here ...', '','courses4.jpg'),
(5, 5, 'Title Course', 'Long description course here ...', '','courses5.jpg');
        ");
    
    $destdir = ipFile('file/repository');
	$fromdir = ipFile('Plugin/Courses/Setup/img');
    $link1= $fromdir."/courses1.jpg";
	$img1=file_get_contents($link1);
    file_put_contents($destdir.substr($link1, strrpos($link1,'/')), $img1);
    $link2= $fromdir."/courses2.jpg";
	$img2=file_get_contents($link2);
    file_put_contents($destdir.substr($link2, strrpos($link2,'/')), $img2);
    $link3= $fromdir."/courses3.jpg";
	$img3=file_get_contents($link3);
    file_put_contents($destdir.substr($link3, strrpos($link3,'/')), $img3);
    $link4= $fromdir."/courses4.jpg";
	$img4=file_get_contents($link4);
    file_put_contents($destdir.substr($link4, strrpos($link4,'/')), $img4);
    $link5= $fromdir."/courses5.jpg";
	$img5=file_get_contents($link5);
    file_put_contents($destdir.substr($link5, strrpos($link5,'/')), $img5);	
    }		

    public function deactivate()
    {
        $table = ipTable('Courses');
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
