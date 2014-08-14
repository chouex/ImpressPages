<?php

namespace Plugin\JavaScript;

class Event {
	public static function ipBeforeController() {
		if ($script = ipGetOption ( "JavaScript.javascript" ))
			ipAddJsContent ( 'javascript', $script );
	}
}