<?php
namespace Plugin\IptSlideshow\Setup;

class Worker extends \Ip\SetupWorker
{

    public function activate()
    {
        $sql = '
        CREATE TABLE IF NOT EXISTS
           ' . ipTable('iptSlideshow') . '
        (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `galleryOrder` double,
        `showurl` boolean,
        `visibility` boolean,
        `title` varchar(255) NOT NULL,
        `description` varchar(255) NOT NULL,
        `url` varchar(255) NOT NULL,
        `urltext` varchar(255) NOT NULL,
        `image` varchar(255),
        PRIMARY KEY (`id`)
        )';

        ipDb()->execute($sql);

    }

    public function deactivate()
    {

    }

    public function remove()
    {

    }

}
