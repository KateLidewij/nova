<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_roles extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'group_id' => array(
				'type' => 'INT',
				'constraint' => 6,
				'auto_increment' => TRUE),
			'group_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'group_order' => array(
				'type' => 'INT',
				'constraint' => 4,
				'default' => '99')
		));
		$this->dbforge->add_key('group_id', true);
		$this->dbforge->create_table('access_groups');

		$this->dbforge->add_field(array(
			'page_id' => array(
				'type' => 'INT',
				'constraint' => 6,
				'auto_increment' => TRUE),
			'page_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'page_url' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'page_level' => array(
				'type' => 'VARCHAR',
				'constraint' => 3,
				'default' => ''),
			'page_group' => array(
				'type' => 'INT',
				'constraint' => 6,
				'default' => '0'),
			'page_desc' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('page_id', true);
		$this->dbforge->create_table('access_pages');

		$this->dbforge->add_field(array(
			'role_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'role_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'role_access' => array(
				'type' => 'TEXT'),
			'role_desc' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('role_id', true);
		$this->dbforge->create_table('access_roles');
	}

	public function down()
	{
		$this->dbforge->drop_table('access_groups');
		$this->dbforge->drop_table('access_pages');
		$this->dbforge->drop_table('access_roles');
	}
}
