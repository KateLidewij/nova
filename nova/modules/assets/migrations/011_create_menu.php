<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_menu extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'menucat_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'menucat_order' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 1),
			'menucat_menu_cat' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
			'menucat_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'menucat_type' => array(
				'type' => 'ENUM',
				'constraint' => "'sub','adminsub'",
				'default' => 'sub')
		));
		$this->dbforge->add_key('menucat_id', true);
		$this->dbforge->create_table('menu_categories');

		$this->dbforge->add_field(array(
			'menu_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'menu_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 150,
				'default' => ''),
			'menu_group' => array(
				'type' => 'INT',
				'constraint' => 4),
			'menu_order' => array(
				'type' => 'INT',
				'constraint' => 4),
			'menu_link' => array(
				'type' => 'TEXT'),
			'menu_link_type' => array(
				'type' => 'ENUM',
				'constraint' => "'onsite','offsite'",
				'default' => 'onsite'),
			'menu_need_login' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n','none'",
				'default' => 'none'),
			'menu_use_access' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'menu_access' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'menu_access_level' => array(
				'type' => 'INT',
				'constraint' => 4,
				'default' => '0'),
			'menu_type' => array(
				'type' => 'ENUM',
				'constraint' => "'main','sub','adminsub'",
				'default' => 'main'),
			'menu_cat' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
			'menu_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'menu_sim_type' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('menu_id', true);
		$this->dbforge->create_table('menu_items');
	}

	public function down()
	{
		$this->dbforge->drop_table('menu_items');
		$this->dbforge->drop_table('menu_categories');
	}
}
