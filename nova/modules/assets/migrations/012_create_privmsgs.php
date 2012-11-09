<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_privmsgs extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'privmsgs_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'privmsgs_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'privmsgs_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'privmsgs_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'privmsgs_subject' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'privmsgs_content' => array(
				'type' => 'TEXT'),
			'privmsgs_author_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y')
		));
		$this->dbforge->add_key('privmsgs_id', true);
		$this->dbforge->create_table('privmsgs');

		$this->dbforge->add_field(array(
			'pmto_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'pmto_message' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'pmto_recipient_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'pmto_recipient_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'pmto_unread' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'pmto_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y')
		));
		$this->dbforge->add_key('pmto_id', true);
		$this->dbforge->create_table('privmsgs_to');
	}

	public function down()
	{
		$this->dbforge->drop_table('privmsgs');
		$this->dbforge->drop_table('privmsgs_to');
	}
}
