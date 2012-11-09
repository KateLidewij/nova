<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_posts extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'post_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'post_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'post_location' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'post_timeline' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'post_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'post_authors' => array(
				'type' => 'TEXT'),
			'post_authors_users' => array(
				'type' => 'TEXT'),
			'post_mission' => array(
				'type' => 'INT',
				'constraint' => 8),
			'post_saved' => array(
				'type' => 'INT',
				'constriant' => 8),
			'post_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','saved','pending'",
				'default' => 'activated'),
			'post_content' => array(
				'type' => 'TEXT'),
			'post_tags' => array(
				'type' => 'TEXT'),
			'post_last_update' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'default' => 0),
			'post_participants' => array(
				'type' => 'TEXT'),
			'post_lock_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'post_lock_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
		));
		$this->dbforge->add_key('post_id', true);
		$this->dbforge->create_table('posts');

		$this->dbforge->add_field(array(
			'pcomment_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'pcomment_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'pcomment_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'pcomment_post' => array(
				'type' => 'INT',
				'constraint' => 8),
			'pcomment_content' => array(
				'type' => 'TEXT'),
			'pcomment_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'pcomment_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','pending'",
				'default' => 'activated')
		));
		$this->dbforge->add_key('pcomment_id', true);
		$this->dbforge->create_table('posts_comments');

		$this->dbforge->add_field(array(
			'misgroup_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'misgroup_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'misgroup_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'misgroup_desc' => array(
				'type' => 'TEXT'),
			'misgroup_parent' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 0),
		));
		$this->dbforge->add_key('misgroup_id', true);
		$this->dbforge->create_table('mission_groups');

		$this->dbforge->add_field(array(
			'mission_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'mission_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'mission_images' => array(
				'type' => 'TEXT'),
			'mission_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'mission_group' => array(
				'type' => 'INT',
				'constraint' => 5),
			'mission_status' => array(
				'type' => 'ENUM',
				'constraint' => "'upcoming','current','completed'",
				'default' => 'upcoming'),
			'mission_start' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'mission_end' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'mission_desc' => array(
				'type' => 'TEXT'),
			'mission_summary' => array(
				'type' => 'TEXT'),
			'mission_notes' => array(
				'type' => 'TEXT'),
			'mission_notes_updated' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('mission_id', true);
		$this->dbforge->create_table('missions');
	}

	public function down()
	{
		$this->dbforge->drop_table('posts');
		$this->dbforge->drop_table('posts_comments');
		$this->dbforge->drop_table('mission_groups');
		$this->dbforge->drop_table('missions');
	}
}
