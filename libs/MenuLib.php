<?php
namespace Coxis\Menu\Libs;

class MenuLib {
	protected static $menu = array();

	public static function _autoloader() {

		$menu - array(
			'pages' => array(
				'fixed_url'	=>	\Coxis\Core\App::get('url')->to('pages/index'),
			)
		);
	}

	public static function get($id) {
		if(isset(static::$menu[$id]['fixed_url']))
			return static::$menu[$id]['fixed_url'];
	}
}