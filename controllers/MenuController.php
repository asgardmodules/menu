<?php
/**
@Prefix('menus')
*/
class MenuController extends \Coxis\Core\Controller {
	/**
	@Route('')
	*/
	public function indexAction($request) {
		$this->menu = Menu::loadByName('Principal');
	}
}