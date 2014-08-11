<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\User\Setup;


class Worker
{

    public function activate()
    {
        $table = ipTable('user');
        $sql = "

CREATE TABLE IF NOT EXISTS $table (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NULL,
  `hash` text NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `resetSecret` varchar(32) DEFAULT NULL,
  `resetTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
      ";
        ipDb()->execute($sql);

    }

    public function deactivate()
    {
        //do nothing
    }

    public function remove()
    {
        //users plugin is very important one. We decided not to remove the database even when you remove the plugin. Just in case.
        //If you want, you can remove user table manually.
    }
}
