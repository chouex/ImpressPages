<?php

namespace Plugin\SMEOverride;

class Event {
	public static function ipBeforeController() {

		//ipAddJs('assets/override.js');
		ipAddCss('assets/override.css');
	}
}