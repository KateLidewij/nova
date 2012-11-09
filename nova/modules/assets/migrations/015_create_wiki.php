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
