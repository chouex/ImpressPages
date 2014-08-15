<?php

namespace Plugin\Study;

class Slot {
    public static function Study ()
    { 
        $table = ipTable('Study');
        $sql = "SELECT `title`, `imageFile` FROM $table ORDER BY `imageOrder` ASC ";
        $results = ipDb()->fetchAll( $sql );

		echo '<div class="slider">';
        echo '<ul class="items">';
		foreach( $results as $result ) 
			{
				echo '<li><img src="'. ipFileUrl('file/repository/' . $result['imageFile'] ) . '" alt="' . $result['title'] . '"></li>' ;
			}		
		echo '</ul>';
		echo '</div>';

    }
}
