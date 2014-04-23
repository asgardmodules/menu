<?php
namespace Asgard\Menu;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run() {
		\App\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Menus', 'link' => 'menus');
		\App\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>	\Asgard\Core\App::get('url')->to('menu/icon.svg'), 'link'=>'menus', 'title' => 'Menus', 'description' => __('Manage the menus.'));
		parent::run();
	}
}