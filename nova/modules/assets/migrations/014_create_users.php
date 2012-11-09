<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'loa_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'loa_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'loa_start_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'loa_end_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'loa_duration' => array(
				'type' => 'TEXT'),
			'loa_reason' => array(
				'type' => 'TEXT'),
			'loa_type' => array(
				'type' => 'ENUM',
				'constraint' => "'active','loa','eloa'",
				'default' => 'loa'),
		));
		$this->dbforge->add_key('loa_id', true);
		$this->dbforge->create_table('user_loa');

		$this->dbforge->add_field(array(
			'pref_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'pref_key' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'pref_label' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'pref_default' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('pref_id', true);
		$this->dbforge->create_table('user_prefs');

		$user_prefs = array(
			array(
				'pref_key' => 'email_new_news_comments',
				'pref_label' => 'Email News Comments',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_new_log_comments',
				'pref_label' => 'Email Log Comments',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_new_post_comments',
				'pref_label' => 'Email Post Comments',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_new_wiki_comments',
				'pref_label' => 'Email Wiki Comments',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_private_message',
				'pref_label' => 'Email Private Messages',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_personal_logs',
				'pref_label' => 'Email Personal Logs',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_news_items',
				'pref_label' => 'Email News Items',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_mission_posts',
				'pref_label' => 'Email Mission Posts',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_mission_posts_save',
				'pref_label' => 'Email Mission Post Saved Notifications',
				'pref_default' => 'y'),
			array(
				'pref_key' => 'email_mission_posts_delete',
				'pref_label' => 'Email Mission Post Delete Notifications',
				'pref_default' => 'y'),
		);

		foreach ($user_prefs as $d)
		{
			$this->db->insert('user_prefs', $d);
		}

		$this->dbforge->add_field(array(
			'prefvalue_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'prefvalue_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'prefvalue_key' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'prefvalue_value' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('prefvalue_id', true);
		$this->dbforge->create_table('user_prefs_values');

		$this->dbforge->add_field(array(
			'userid' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'status' => array(
				'type' => 'ENUM',
				'constraint' => "'active','inactive','pending'",
				'default' => 'active'),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'default' => ''),
			'date_of_birth' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'instant_message' => array(
				'type' => 'TEXT'),
			'main_char' => array(
				'type' => 'INT',
				'constraint' => 8),
			'access_role' => array(
				'type' => 'INT',
				'constraint' => 5),
			'is_sysadmin' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'is_game_master' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'is_webmaster' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'is_firstlaunch' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'timezone' => array(
				'type' => 'VARCHAR',
				'constraint' => 5,
				'default' => 'UTC'),
			'daylight_savings' => array(
				'type' => 'VARCHAR',
				'constraint' => 1,
				'default' => '0'),
			'language' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => 'english'),
			'join_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'leave_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'last_post' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'last_login' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'loa' => array(
				'type' => 'ENUM',
				'constraint' => "'active','loa','eloa'",
				'default' => 'active'),
			'display_rank' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => 'default'),
			'skin_main' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => 'default'),
			'skin_wiki' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => 'default'),
			'skin_admin' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => 'default'),
			'location' => array(
				'type' => 'TEXT'),
			'interests' => array(
				'type' => 'TEXT'),
			'bio' => array(
				'type' => 'TEXT'),
			'security_question' => array(
				'type' => 'INT',
				'constraint' => 5),
			'security_answer' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'default' => ''),
			'password_reset' => array(
				'type' => 'INT',
				'constraint' => 1,
				'default' => 0),
			'moderate_posts' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'moderate_logs' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'moderate_news' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'moderate_post_comments' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'moderate_log_comments' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'moderate_news_comments' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'moderate_wiki_comments' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'my_links' => array(
				'type' => 'TEXT'),
			'last_update' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
		));
		$this->dbforge->add_key('userid', true);
		$this->dbforge->create_table('users');

		$this->dbforge->add_field(array(
			'ban_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'ban_level' => array(
				'type' => 'INT',
				'constraint' => 1),
			'ban_ip' => array(
				'type' => 'VARCHAR',
				'constraint' => 45,
				'default' => ''),
			'ban_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'ban_reason' => array(
				'type' => 'TEXT'),
			'ban_date' => array(
				'type' => 'BIGINT',
				'constraint'=> 20),
		));
		$this->dbforge->add_key('ban_id', true);
		$this->dbforge->create_table('bans');

		$this->dbforge->add_field(array(
			'login_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'login_ip' => array(
				'type' => 'VARCHAR',
				'constraint' => 45,
				'default' => ''),
			'login_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'login_time' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'default' => 0)
		));
		$this->dbforge->add_key('login_id', true);
		$this->dbforge->create_table('login_attempts');
	}

	public function down()
	{
		$this->dbforge->drop_table('user_loa');
		$this->dbforge->drop_table('user_prefs');
		$this->dbforge->drop_table('user_prefs_values');
		$this->dbforge->drop_table('users');
		$this->dbforge->drop_table('bans');
		$this->dbforge->drop_table('login_attempts');
	}
}
