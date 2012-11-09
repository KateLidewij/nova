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

		$messages = array(
			array(
				'message_key' => 'welcome_msg',
				'message_label' => 'Welcome Page Message',
				'message_content' => "Define your welcome message and welcome page header through the Site Messages page.",
				'message_type' => 'message'),
			array(
				'message_key' => 'rules',
				'message_label' => 'Rules Message',
				'message_content' => "Define your sim's rules through the Site Messages page.",
				'message_type' => 'message'),
			array(
				'message_key' => 'sim',
				'message_label' => 'Sim Message',
				'message_content' => "Define your sim message through the Site Messages page.",
				'message_type' => 'message'),
			array(
				'message_key' => 'wiki_main',
				'message_label' => 'Wiki Main Page Message',
				'message_content' => "Welcome to Thresher Release 1, Anodyne's integrated mini-wiki included with Nova. You can change this message through the Site Messages page.",
				'message_type' => 'message'),
			array(
				'message_key' => 'credits_perm',
				'message_label' => 'Permanent Credits',
				'message_content' => "Nova has been developed on the <a href='http://www.codeigniter.com' target='_blank'>CodeIgniter</a> PHP framework by <a href='http://www.ellislab.com' target='_blank'>EllisLab</a>.\r\n\r\nIcons used throughout Nova were created by <a href='http://www.famfamfam.com'>FamFamFam</a> and <a href='http://www.pinvoke.com'>Pinvoke</a>.",
				'message_protected' => 'y',
				'message_type' => 'message'),
			array(
				'message_key' => 'credits',
				'message_label' => 'Credits',
				'message_content' => "Define your site credits through the Site Messages page.",
				'message_type' => 'message'),
			array(
				'message_key' => 'join_disclaimer',
				'message_label' => 'Join Disclaimer',
				'message_content' => "Members are expected to follow the rules and regulations of both the sim and fleet at all times, both in character and out of character. By continuing, you affirm that you will sim in a proper and adequate manner. Members who choose to make ultra short posts, post very infrequently, or post posts with explicit content (above PG-13) will be removed immediately, and by continuing, you agree to this. In addition, in compliance with the Children's Online Privacy Protection Act of 1998 (COPPA), we do not accept players under the age of 13.  Any players found to be under the age of 13 will be immediately removed without question.  By agreeing to these terms, you are also saying that you are above the age of 13.",
				'message_type' => 'other'),
			array(
				'message_key' => 'join_instructions',
				'message_label' => 'Join Instructions',
				'message_content' => "Define your join instructions through the Site Message page.",
				'message_type' => 'message'),
			array(
				'message_key' => 'join_post',
				'message_label' => 'Join Sample Post',
				'message_content' => "Define your join sample post through the Site Message page.",
				'message_type' => 'other'),
			array(
				'message_key' => 'accept_message',
				'message_label' => 'User Acceptance Email',
				'message_content' => "Define your user acceptance message through the Site Message page.",
				'message_type' => 'other'),
			array(
				'message_key' => 'reject_message',
				'message_label' => 'User Rejection Message',
				'message_content' => "Define your user rejection message through the Site Messages page.",
				'message_type' => 'other'),
			array(
				'message_key' => 'docking_accept_message',
				'message_label' => 'Docking Acceptance Email',
				'message_content' => "Define your docking acceptance message through the Site Message page.",
				'message_type' => 'other'),
			array(
				'message_key' => 'docking_reject_message',
				'message_label' => 'Docking Rejection Message',
				'message_content' => "Define your docking rejection message through the Site Messages page.",
				'message_type' => 'other'),
			array(
				'message_key' => 'contact',
				'message_label' => 'Contact Instructions',
				'message_content' => '',
				'message_type' => 'message'),
			
			array(
				'message_key' => 'welcome_head',
				'message_label' => 'Welcome Header',
				'message_content' => "Welcome to Nova!",
				'message_type' => 'title'),
			array(
				'message_key' => 'main_credits_title',
				'message_label' => 'Site Credits Header',
				'message_content' => 'Site Credits',
				'message_type' => 'title'),
			array(
				'message_key' => 'main_join_title',
				'message_label' => 'Join Page Header',
				'message_content' => 'Join',
				'message_type' => 'title'),
		);

		foreach ($messages as $d)
		{
			$this->db->insert('messages', $d);
		}

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

		$security_questions = array(
			array('question_value' => "What is your father's middle name?"),
			array('question_value' => "What was the name of your first pet?"),
			array('question_value' => "What city were you born in?"),
			array('question_value' => "What is your favorite animal?"),
			array('question_value' => "Who was your favorite teacher?"),
			array('question_value' => "What is the last book you read?")
		);

		foreach ($security_questions as $d)
		{
			$this->db->insert('security_questions', $d);
		}

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

		$settings = array(
			array(
				'setting_key' => 'sim_name',
				'setting_value' => '',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'sim_year',
				'setting_value' => '',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'sim_type',
				'setting_value' => 2,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'maintenance',
				'setting_value' => 'off',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'skin_main',
				'setting_value' => 'default',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'skin_admin',
				'setting_value' => 'default',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'skin_wiki',
				'setting_value' => 'default',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'skin_login',
				'setting_value' => 'default',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'display_rank',
				'setting_value' => 'default',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'bio_num_awards',
				'setting_value' => 10,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'allowed_chars_playing',
				'setting_value' => 1,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'allowed_chars_npc',
				'setting_value' => 3,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'system_email',
				'setting_value' => 'on',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'email_subject',
				'setting_value' => '',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'timezone',
				'setting_value' => 'UTC',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'daylight_savings',
				'setting_value' => 'FALSE',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'date_format',
				'setting_value' => '%D %M %j%S, %Y @ %g:%i%a',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'list_logs_num',
				'setting_value' => 25,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'list_posts_num',
				'setting_value' => 25,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'manifest_defaults',
				'setting_value' => "$('tr.active').show();,$('tr.npc').show();",
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'updates',
				'setting_value' => 'all',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'show_news',
				'setting_value' => 'y',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'show_logs',
				'setting_value' => 'y',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'show_posts',
				'setting_value' => 'y',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'post_count_format',
				'setting_value' => 'multiple',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'use_sample_post',
				'setting_value' => 'y',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'default_email_name',
				'setting_value' => '',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'default_email_address',
				'setting_value' => '',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'use_mission_notes',
				'setting_value' => 'y',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'online_timespan',
				'setting_value' => '5',
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'posting_requirement',
				'setting_value' => 14,
				'setting_user_created' => 'n'),
			array(
				'setting_key' => 'use_post_participants',
				'setting_value' => 'y',
				'setting_user_created' => 'n'),
		);

		foreach ($settings as $d)
		{
			$this->db->insert('settings', $d);
		}

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
		$sess_table = $this->db->dbprefix('sessions');
		$this->db->query("CREATE INDEX last_activity_idx ON $sess_table(last_activity)");

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

		$sim_type = array(
			array('simtype_name' => 'all'),
			array('simtype_name' => 'ship'),
			array('simtype_name' => 'base'),
			array('simtype_name' => 'colony'),
			array('simtype_name' => 'unit'),
			array('simtype_name' => 'realm'),
			array('simtype_name' => 'planet'),
			array('simtype_name' => 'organization')
		);

		foreach ($sim_type as $d)
		{
			$this->db->insert('sim_type', $d);
		}

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

		$system_info = array(
			array(
				'sys_uid' => random_string('alnum', 32),
				'sys_install_date' => now(),
				'sys_version_major' => 2,
				'sys_version_minor' => 2,
				'sys_version_update' => 0)
		);

		foreach ($system_info as $d)
		{
			$this->db->insert('system_info', $d);
		}

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
