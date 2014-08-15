<?php

namespace Plugin\Courses;

class Slot {
    public static function Courses ()
    { 
        $table = ipTable('Courses');
        $sql = "SELECT `title`, `description`, `url`, `imageFile` FROM $table ORDER BY `imageOrder` ASC ";
        $results = ipDb()->fetchAll( $sql );
        echo '<a href="#" class="prev"></a><a href="#" class="next"></a>';
			echo '<ul class="carousel1">';
		foreach( $results as $result ) 
			{
				echo '<li><div><a href="' . $result['url'] . '"><img src="' . ipFileUrl('file/repository/' . $result['imageFile'] ) . '" alt="' . $result['title'] . '"></a>';
				echo '<h3><a href="' . $result['url'] . '">' . $result['title'] . '</a></h3>';
				echo '<span>' . $result['description'] . '</span>';
				echo '</div></li>';
			}
			echo '</ul>';
    }
}
