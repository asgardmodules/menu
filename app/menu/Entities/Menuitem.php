<?php
namespace App\Menu\Entities;

class Menuitem extends \Asgard\Core\Entity {
	public static $properties = array(
		'title'	=>	array(
			'required'	=>	false,
		),
		'fixed_url' => array(
			'required'	=>	false,
		),
		'type'	=>	array(
			'in'	=>	array('none', 'fixed', 'custom', 'item'),
			'required'	=>	false,
			// none
			// fixed url
			// custom object
			// db item
		),
		'custom_id' => array(
			'required'	=>	false,
		),
	);
	
	public static $relations = array(	
		'menu' => array(
			'has'	=>	'one',
			'entity'	=>	'App\Menu\Entities\Menu',
		),
		'parent' => array(
			'has'	=>	'one',
			'entity'	=>	'App\Menu\Entities\MenuItem',
		),
		'childs' => array(
			'has'	=>	'many',
			'entity'	=>	'App\Menu\Entities\MenuItem',
		),
		'item' => array(
			'type'	=>	'belongsTo',
			'polymorphic'	=>	true,
			'entity'	=>	'menuitemable',
		),
	);
	
	public static $behaviors = array(
		'Asgard\Behaviors\SortableBehavior'
	);
		
	public static $meta = array(
	);
	
	public function __toString() {
		return (string)$this->title;
	}

	public function url() {
		switch($this->type) {
			case 'none':
				return $this->childs()->first()->url();
				// return null;
			case 'fixed':
				return $this->fixed_url;
			case 'custom':
				return MenuLib::get($this->custom_id);
			case 'item':
				return $this->item->url();
		}
	}
}