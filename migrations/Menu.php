<?php
class Menu {
	public static function up() {
		$table = \Asgard\Core\App::get('config')->get('database/prefix').'menu';
		\Asgard\Core\App::get('schema')->create($table, function($table) {
			$table->add('id', 'int(11)')
				->autoincrement()
				->primary();	
			$table->add('created_at', 'datetime')
				->nullable();	
			$table->add('updated_at', 'datetime')
				->nullable();	
			$table->add('name', 'varchar(255)')
				->nullable();
		});

		$table = \Asgard\Core\App::get('config')->get('database/prefix').'menuitem';
		\Asgard\Core\App::get('schema')->create($table, function($table) {
			$table->add('id', 'int(11)')
				->autoincrement()
				->primary();	
			$table->add('position', 'int(11)')
				->nullable();	
			$table->add('created_at', 'datetime')
				->nullable();	
			$table->add('updated_at', 'datetime')
				->nullable();	
			$table->add('menu_id', 'int(11)')
				->nullable();	
			$table->add('parent_id', 'int(11)')
				->nullable();	
			$table->add('item_id', 'int(11)')
				->nullable();	
			$table->add('item_type', 'varchar(255)')
				->nullable();	
			$table->add('title', 'varchar(255)')
				->nullable();	
			$table->add('fixed_url', 'varchar(255)')
				->nullable();	
			$table->add('type', 'varchar(255)')
				->nullable();	
			$table->add('custom_id', 'varchar(255)')
				->nullable();
		});
	}
	
	public static function down() {
		\Asgard\Core\App::get('schema')->drop(\Asgard\Core\App::get('config')->get('database/prefix').'menu');
		\Asgard\Core\App::get('schema')->drop(\Asgard\Core\App::get('config')->get('database/prefix').'menuitem');
	}
}