<?php

namespace Plugin\BrowserWarn;

class Event {
	public static function ipBeforeController() {
		if (!array_key_exists('iewarn', $_COOKIE)) {
			setcookie ( "iewarn", 1 );
			ipAddJs ( 'assets/warn.js' );
			ipAddCss ( 'assets/warn.css' );
		}
	}
}