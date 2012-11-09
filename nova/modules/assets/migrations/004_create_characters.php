<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_characters extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'charid' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'first_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'middle_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'last_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'suffix' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'crew_type' => array(
				'type' => 'ENUM',
				'constraint' => "'active','inactive','pending','npc'",
				'default' => 'active'),
			'date_activate' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'date_deactivate' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'images' => array(
				'type' => 'TEXT'),
			'rank' => array(
				'type' => 'INT',
				'constraint' => 10),
			'position_1' => array(
				'type' => 'INT',
				'constraint' => 10,
				'default' => 1),
			'position_2' => array(
				'type' => 'INT',
				'constraint' => 10),
			'last_post' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
		));
		$this->dbforge->add_key('charid', true);
		$this->dbforge->create_table('characters');

		$this->dbforge->add_field(array(
			'prom_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'prom_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'prom_char' => array(
				'type' => 'INT',
				'constraint' => 8),
			'prom_old_order' => array(
				'type' => 'INT',
				'constraint' => 8),
			'prom_old_rank' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'prom_new_order' => array(
				'type' => 'INT',
				'constraint' => 8),
			'prom_new_rank' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'prom_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('prom_id', true);
		$this->dbforge->create_table('characters_promotions');

		$this->dbforge->add_field(array(
			'coc_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'coc_crew' => array(
				'type' => 'INT',
				'constraint' => 8),
			'coc_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('coc_id', true);
		$this->dbforge->create_table('coc');

		$this->dbforge->add_field(array(
			'app_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'app_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'app_ip' => array(
				'type' => 'VARCHAR',
				'constraint' => 45,
				'default' => ''),
			'app_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'app_user_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'app_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'app_character_name' => array(
				'type' => 'TEXT'),
			'app_position' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'app_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'app_action' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'app_message' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('app_id', true);
		$this->dbforge->create_table('applications');
	}

	public function down()
	{
		$this->dbforge->drop_table('characters');
		$this->dbforge->drop_table('characters_promotions');
		$this->dbforge->drop_table('coc');
		$this->dbforge->drop_table('applications');
	}
}
