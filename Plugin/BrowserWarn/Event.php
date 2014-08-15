<?php

namespace Plugin\BrowserWarn;

class Event {
	public static function ipBeforeController() {

		ipAddJs('assets/warn.js');
		ipAddCss('assets/warn.css');
	}
}