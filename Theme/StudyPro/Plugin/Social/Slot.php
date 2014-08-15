<?php

namespace Plugin\Social;

class Slot {
    public static function Social ()
    { 
        $table = ipTable('Social');
        $sql = "SELECT `title`, `target`, `url`, `imageFile` FROM $table ORDER BY `imageOrder` ASC ";
        $results = ipDb()->fetchAll( $sql );
        echo '<div class="social">';
			echo '<ul class="icons">';
		foreach( $results as $result ) 
			{
				echo '<li><a href="' . $result['url'] . '" title="' . $result['title'] . '" target="' . $result['target'] . '"><img src="' . ipFileUrl('file/repository/' . $result['imageFile'] ) . '" alt="' . $result['title'] . '"></a></li>';
			}
			echo '</ul>';
		echo '</div>';
    }
}
