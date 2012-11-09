<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_docking extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'docking_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'docking_sim_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'docking_sim_url' => array(
				'type' => 'TEXT'),
			'docking_gm_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'docking_gm_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'docking_status' => array(
				'type' => 'ENUM',
				'constraint' => "'active','inactive','pending'",
				'default' => 'pending'),
			'docking_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('docking_id', true);
		$this->dbforge->create_table('docking');
	}

	public function down()
	{
		$this->dbforge->drop_table('docking');
	}
}
