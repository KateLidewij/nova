<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_genres extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'dept_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'dept_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'dept_desc' => array(
				'type' => 'TEXT'),
			'dept_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'dept_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'dept_type' => array(
				'type' => 'ENUM',
				'constraint' => "'playing','nonplaying'",
				'default' => 'playing'),
			'dept_parent' => array(
				'type' => 'INT',
				'constraint' => 10,
				'default' => 0),
			'dept_manifest' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 0),
		));
		$this->dbforge->add_key('dept_id', true);
		$this->dbforge->create_table('departments_'.GENRE);

		$this->dbforge->add_field(array(
			'pos_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'pos_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'pos_desc' => array(
				'type' => 'TEXT'),
			'pos_dept' => array(
				'type' => 'INT',
				'constraint' => 10),
			'pos_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'pos_open' => array(
				'type' => 'INT',
				'constraint' => 5),
			'pos_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'pos_type' => array(
				'type' => 'ENUM',
				'constraint' => "'senior','officer','enlisted','other'",
				'default' => 'officer'),
			'pos_top_open' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n')
		));
		$this->dbforge->add_key('pos_id', true);
		$this->dbforge->create_table('positions_'.GENRE);

		$this->dbforge->add_field(array(
			'rank_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'rank_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'rank_short_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
			'rank_image' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'rank_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'rank_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'rank_class' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 1)
		));
		$this->dbforge->add_key('rank_id', true);
		$this->dbforge->create_table('ranks_'.GENRE);
	}

	public function down()
	{
		// Get all the tables
		$tables = $this->db->list_tables();

		// Get the database prefix
		$prefix = $this->db->dbprefix();

		// Loop through and remove what we need to
		foreach ($tables as $table)
		{
			// Remove the prefix
			$t = str_replace($prefix, '', $table);

			// Drop all the department tables
			if (strpos($t, 'departments_') !== false)
			{
				$this->dbforge->drop_table($t);
			}

			// Drop all the positions tables
			if (strpos($t, 'positions_') !== false)
			{
				$this->dbforge->drop_table($t);
			}

			// Drop all the rank tables
			if (strpos($t, 'ranks_') !== false)
			{
				$this->dbforge->drop_table($t);
			}
		}
	}
}
