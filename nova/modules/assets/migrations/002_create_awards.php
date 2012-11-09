<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_awards extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'award_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'award_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'award_image' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'award_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'award_desc' => array(
				'type' => 'TEXT'),
			'award_cat' => array(
				'type' => 'ENUM',
				'constraint' => "'ic','ooc','both'",
				'default' => 'ic'),
			'award_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y')
		));
		$this->dbforge->add_key('award_id', true);
		$this->dbforge->create_table('awards');

		$this->dbforge->add_field(array(
			'queue_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'queue_receive_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'queue_receive_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'queue_nominate' => array(
				'type' => 'INT',
				'constraint' => 8),
			'queue_award' => array(
				'type' => 'INT',
				'constraint' => 5),
			'queue_reason' => array(
				'type' => 'TEXT'),
			'queue_status' => array(
				'type' => 'ENUM',
				'constraint' => "'pending','accepted','rejected'",
				'default' => 'pending'),
			'queue_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('queue_id', true);
		$this->dbforge->create_table('awards_queue');

		$this->dbforge->add_field(array(
			'awardrec_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'awardrec_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'awardrec_character' => array(
				'type' => 'INT',
				'constraint' => 8,
				'default' => 0),
			'awardrec_nominated_by' => array(
				'type' => 'INT',
				'constraint' => 8,
				'default' => 0),
			'awardrec_award' => array(
				'type' => 'INT',
				'constraint' => 5),
			'awardrec_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'awardrec_reason' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('awardrec_id', true);
		$this->dbforge->create_table('awards_received');
	}

	public function down()
	{
		$this->dbforge->drop_table('awards');
		$this->dbforge->drop_table('awards_queue');
		$this->dbforge->drop_table('awards_received');
	}
}
