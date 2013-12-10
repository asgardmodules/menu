<?php
namespace Coxis\Menu;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\Coxis\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Menus', 'link' => 'menus');
		\Coxis\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Coxis\Core\Facades\URL::to('menu/icon.svg'), 'link'=>'menus', 'title' => 'Menus', 'description' => __('Manage the menus.'));
		parent::run();
	}
}