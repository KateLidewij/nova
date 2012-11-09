<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_news extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'news_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'news_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'news_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'news_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'news_cat' => array(
				'type' => 'INT',
				'constraint' => 5),
			'news_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'news_content' => array(
				'type' => 'TEXT'),
			'news_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','saved','pending'",
				'default' => 'activated'),
			'news_private' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'news_tags' => array(
				'type' => 'TEXT'),
			'news_last_update' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'default' => 0),
		));
		$this->dbforge->add_key('news_id', true);
		$this->dbforge->create_table('news');

		$this->dbforge->add_field(array(
			'newscat_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'newscat_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'newscat_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y')
		));
		$this->dbforge->add_key('newscat_id', true);
		$this->dbforge->create_table('news_categories');

		$news_categories = array(
			array('newscat_name' => 'General News'),
			array('newscat_name' => 'Out of Character'),
			array('newscat_name' => 'Sim Announcement'),
			array('newscat_name' => 'Website Update')
		);

		foreach ($news_categories as $d)
		{
			$this->db->insert('news_categories', $d);
		}

		$this->dbforge->add_field(array(
			'ncomment_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'ncomment_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'ncomment_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'ncomment_news' => array(
				'type' => 'INT',
				'constraint' => 8),
			'ncomment_content' => array(
				'type' => 'TEXT'),
			'ncomment_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'ncomment_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','pending'",
				'default' => 'activated')
		));
		$this->dbforge->add_key('ncomment_id', true);
		$this->dbforge->create_table('news_comments');
	}

	public function down()
	{
		$this->dbforge->drop_table('news');
		$this->dbforge->drop_table('news_categories');
		$this->dbforge->drop_table('news_comments');
	}
}
