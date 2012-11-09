<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_logs extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'log_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'log_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'log_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'log_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'log_content' => array(
				'type' => 'TEXT'),
			'log_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'log_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','saved','pending'",
				'default' => 'activated'),
			'log_tags' => array(
				'type' => 'TEXT'),
			'log_last_update' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'default' => 0),
		));
		$this->dbforge->add_key('log_id', true);
		$this->dbforge->create_table('personallogs');

		$this->dbforge->add_field(array(
			'lcomment_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'lcomment_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'lcomment_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'lcomment_log' => array(
				'type' => 'INT',
				'constraint' => 8),
			'lcomment_content' => array(
				'type' => 'TEXT'),
			'lcomment_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'lcomment_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','pending'",
				'default' => 'activated')
		));
		$this->dbforge->add_key('lcomment_id', true);
		$this->dbforge->create_table('personallogs_comments');
	}

	public function down()
	{
		$this->dbforge->drop_table('personallogs');
		$this->dbforge->drop_table('personallogs_comments');
	}
}
