<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_wiki extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'wikicat_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'wikicat_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'wikicat_desc' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('wikicat_id', true);
		$this->dbforge->create_table('wiki_categories');

		$this->dbforge->add_field(array(
			'wcomment_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'wcomment_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'wcomment_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'wcomment_page' => array(
				'type' => 'INT',
				'constraint' => 10),
			'wcomment_date' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'wcomment_content' => array(
				'type' => 'TEXT'),
			'wcomment_status' => array(
				'type' => 'ENUM',
				'constraint' => "'activated','pending'",
				'default' => 'activated')
		));
		$this->dbforge->add_key('wcomment_id', true);
		$this->dbforge->create_table('wiki_comments');

		$this->dbforge->add_field(array(
			'draft_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'draft_id_old' => array(
				'type' => 'INT',
				'constraint' => 10),
			'draft_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'draft_author_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'draft_author_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'draft_summary' => array(
				'type' => 'TEXT'),
			'draft_content' => array(
				'type' => 'LONGTEXT'),
			'draft_page' => array(
				'type' => 'INT',
				'constraint' => 10),
			'draft_created_at' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'draft_categories' => array(
				'type' => 'TEXT'),
			'draft_changed_comments' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('draft_id', true);
		$this->dbforge->create_table('wiki_drafts');

		$wiki_drafts = array(
			array(
				'draft_title' => 'Welcome to Thresher',
				'draft_author_user' => 0,
				'draft_author_character' => 0,
				'draft_summary' => "This is the main wiki system page.",
				'draft_content' => "<p>Welcome to Thresher R2. Thresher is Nova's built-in mini-wiki to help your RPG collaborate and share information easily. You can change this message by editing the system page from the Wiki Page Management page.</p>",
				'draft_page' => 1,
				'draft_created_at' => now()),
			array(
				'draft_title' => 'Create Wiki Page',
				'draft_author_user' => 0,
				'draft_author_character' => 0,
				'draft_summary' => "",
				'draft_content' => "",
				'draft_page' => 2,
				'draft_created_at' => now()),
			array(
				'draft_title' => 'Edit Wiki Page',
				'draft_author_user' => 0,
				'draft_author_character' => 0,
				'draft_summary' => "",
				'draft_content' => "",
				'draft_page' => 3,
				'draft_created_at' => now()),
			array(
				'draft_title' => 'Wiki Categories',
				'draft_author_user' => 0,
				'draft_author_character' => 0,
				'draft_summary' => "Categories in Thresher allow pages to be broken up in to different subject matters and categorized in a way that makes sense. Below is the complete list of categories. Clicking on one of the categories will show all pages associated with that category.",
				'draft_content' => "",
				'draft_page' => 4,
				'draft_created_at' => now()),
			array(
				'draft_title' => 'Wiki Category Page',
				'draft_author_user' => 0,
				'draft_author_character' => 0,
				'draft_summary' => "",
				'draft_content' => "",
				'draft_page' => 5,
				'draft_created_at' => now()),
		);

		foreach ($wiki_drafts as $d)
		{
			$this->db->insert('wiki_drafts', $d);
		}

		$this->dbforge->add_field(array(
			'page_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'page_draft' => array(
				'type' => 'INT',
				'constraint' => 10),
			'page_created_at' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'page_created_by_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'page_created_by_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'page_updated_at' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'page_updated_by_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'page_updated_by_character' => array(
				'type' => 'INT',
				'constraint' => 8),
			'page_comments' => array(
				'type' => 'ENUM',
				'constraint' => "'open','closed'",
				'default' => 'open'),
			'page_type' => array(
				'type' => 'ENUM',
				'constraint' => "'standard','system'",
				'default' => 'standard'),
			'page_key' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
		));
		$this->dbforge->add_key('page_id', true);
		$this->dbforge->create_table('wiki_pages');

		$wiki_pages = array(
			array(
				'page_draft' => 1,
				'page_created_at' => now(),
				'page_created_by_user' => 0,
				'page_created_by_character' => 0,
				'page_comments' => 'closed',
				'page_type' => 'system',
				'page_key' => 'index'),
			array(
				'page_draft' => 2,
				'page_created_at' => now(),
				'page_created_by_user' => 0,
				'page_created_by_character' => 0,
				'page_comments' => 'closed',
				'page_type' => 'system',
				'page_key' => 'create'),
			array(
				'page_draft' => 3,
				'page_created_at' => now(),
				'page_created_by_user' => 0,
				'page_created_by_character' => 0,
				'page_comments' => 'closed',
				'page_type' => 'system',
				'page_key' => 'edit'),
			array(
				'page_draft' => 4,
				'page_created_at' => now(),
				'page_created_by_user' => 0,
				'page_created_by_character' => 0,
				'page_comments' => 'closed',
				'page_type' => 'system',
				'page_key' => 'categories'),
			array(
				'page_draft' => 5,
				'page_created_at' => now(),
				'page_created_by_user' => 0,
				'page_created_by_character' => 0,
				'page_comments' => 'closed',
				'page_type' => 'system',
				'page_key' => 'category'),
		);

		foreach ($wiki_pages as $d)
		{
			$this->db->insert('wiki_pages', $d);
		}

		$this->dbforge->add_field(array(
			'restr_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'restr_page' => array(
				'type' => 'INT',
				'constraint' => 10),
			'restr_created_at' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'restr_created_by' => array(
				'type' => 'INT',
				'constraint' => 8),
			'restr_updated_at' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
			'restr_updated_by' => array(
				'type' => 'INT',
				'constraint' => 8),
			'restrictions' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('restr_id', true);
		$this->dbforge->create_table('wiki_restrictions');
	}

	public function down()
	{
		$this->dbforge->drop_table('wiki_categories');
		$this->dbforge->drop_table('wiki_comments');
		$this->dbforge->drop_table('wiki_drafts');
		$this->dbforge->drop_table('wiki_pages');
		$this->dbforge->drop_table('wiki_restrictions');
	}
}
