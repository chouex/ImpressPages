<?php

namespace Plugin\Social\Setup;

class Worker extends \Ip\SetupWorker{

    public function activate()
    {
        $table = ipTable('Social');
        ipDb()->execute("
CREATE TABLE IF NOT EXISTS $table (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageOrder` DOUBLE NOT NULL,
  `title` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `imageFile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
        ");
    }

    public function deactivate()
    {
        $table = ipTable('Social');
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
