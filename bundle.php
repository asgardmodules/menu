<?php
namespace App\Menu;

class Bundle extends \Coxis\Core\BundleLoader {
	public function load($queue) {
		parent::load();
	}

	public function run() {
		\Coxis\Admin\Libs\AdminMenu::$menu[0]['childs'][] = array('label' => 'Menus', 'link' => 'menus');
		\Coxis\Admin\Libs\AdminMenu::$home[] = array('img'=>\URL::to('menu/icon.svg'), 'link'=>'menus', 'title' => 'Menus', 'description' => __('Manage the menus.'));
		parent::run();
	}
}
return new Bundle;