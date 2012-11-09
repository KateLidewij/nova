<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_specstour extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'specs_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'specs_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'specs_order' => array(
				'type' => 'INT',
				'constraint' => 4),
			'specs_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'specs_images' => array(
				'type' => 'TEXT'),
			'specs_summary' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('specs_id', true);
		$this->dbforge->create_table('specs');

		$this->dbforge->add_field(array(
			'tour_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'tour_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'tour_order' => array(
				'type' => 'INT',
				'constraint' => 4),
			'tour_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'tour_images' => array(
				'type' => 'TEXT'),
			'tour_summary' => array(
				'type' => 'TEXT'),
			'tour_spec_item' => array(
				'type' => 'INT',
				'constraint' => 5),
		));
		$this->dbforge->add_key('tour_id', true);
		$this->dbforge->create_table('tour');

		$this->dbforge->add_field(array(
			'deck_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'deck_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'deck_order' => array(
				'type' => 'INT',
				'constraint' => 10),
			'deck_content' => array(
				'type' => 'TEXT'),
			'deck_item' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 0),
		));
		$this->dbforge->add_key('deck_id', true);
		$this->dbforge->create_table('tour_decks');
	}

	public function down()
	{
		$this->dbforge->drop_table('specs');
		$this->dbforge->drop_table('tour');
		$this->dbforge->drop_table('tour_decks');
	}
}
