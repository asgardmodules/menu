<?php
/**
@Prefix('menus')
*/
class MenuController extends \Asgard\Core\Controller {
	/**
	@Route('')
	*/
	public function indexAction($request) {
		$this->menu = Menu::loadByName('Principal');
	}
}