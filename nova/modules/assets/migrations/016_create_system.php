<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_system extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'message_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'message_key' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'message_label' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'message_content' => array(
				'type' => 'TEXT'),
			'message_type' => array(
				'type' => 'ENUM',
				'constraint' => "'title','message','other'",
				'default' => 'message'),
			'message_protected' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n')
		));
		$this->dbforge->add_key('message_id', true);
		$this->dbforge->create_table('messages');

		$this->dbforge->add_field(array(
			'question_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'question_value' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('question_id', true);
		$this->dbforge->create_table('security_questions');

		$this->dbforge->add_field(array(
			'setting_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'setting_key' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'setting_value' => array(
				'type' => 'TEXT'),
			'setting_label' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'setting_user_created' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y')
		));
		$this->dbforge->add_key('setting_id', true);
		$this->dbforge->create_table('settings');

		$this->dbforge->add_field(array(
			'session_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'default' => '0'),
			'ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 45,
				'default' => '0'),
			'user_agent' => array(
				'type' => 'VARCHAR',
				'constraint' => 120,
				'default' => ''),
			'last_activity' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => TRUE,
				'default' => 0),
			'user_data' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('session_id', true);
		$this->dbforge->create_table('sessions');

		$this->dbforge->add_field(array(
			'simtype_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'simtype_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => '')
		));
		$this->dbforge->add_key('simtype_id', true);
		$this->dbforge->create_table('sim_type');

		$this->dbforge->add_field(array(
			'sys_id' => array(
				'type' => 'INT',
				'constraint' => 4,
				'auto_increment' => TRUE),
			'sys_uid' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'default' => ''),
			'sys_install_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'sys_last_update' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'sys_version_major' => array(
				'type' => 'INT',
				'constraint' => 1),
			'sys_version_minor' => array(
				'type' => 'INT',
				'constraint' => 2),
			'sys_version_update' => array(
				'type' => 'INT',
				'constraint' => 4),
			'sys_version_ignore' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
		));
		$this->dbforge->add_key('sys_id', true);
		$this->dbforge->create_table('system_info');

		$this->dbforge->add_field(array(
			'upload_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'upload_filename' => array(
				'type' => 'TEXT'),
			'upload_mime_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'upload_resource_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'upload_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'upload_ip' => array(
				'type' => 'VARCHAR',
				'constraint' => 45,
				'default' => ''),
			'upload_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
		));
		$this->dbforge->add_key('upload_id', true);
		$this->dbforge->create_table('uploads');
	}

	public function down()
	{
		$this->dbforge->drop_table('messages');
		$this->dbforge->drop_table('security_questions');
		$this->dbforge->drop_table('settings');
		$this->dbforge->drop_table('sessions');
		$this->dbforge->drop_table('sim_type');
		$this->dbforge->drop_table('system_info');
		$this->dbforge->drop_table('uploads');
	}
}
