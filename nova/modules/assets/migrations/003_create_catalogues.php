<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_catalogues extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'rankcat_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'rankcat_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'rankcat_location' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'rankcat_preview' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => 'preview.png'),
			'rankcat_blank' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => 'blank.png'),
			'rankcat_extension' => array(
				'type' => 'VARCHAR',
				'constraint' => 5,
				'default' => '.png'),
			'rankcat_status' => array(
				'type' => 'ENUM',
				'constraint' => "'active','inactive','development'",
				'default' => 'active'),
			'rankcat_credits' => array(
				'type' => 'TEXT'),
			'rankcat_url' => array(
				'type' => 'TEXT'),
			'rankcat_default' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n'),
			'rankcat_genre' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
				'default' => GENRE),
		));
		$this->dbforge->add_key('rankcat_id', true);
		$this->dbforge->create_table('catalogue_ranks');

		$this->dbforge->add_field(array(
			'skin_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'skin_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'skin_location' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'skin_credits' => array(
				'type' => 'TEXT')
		));
		$this->dbforge->add_key('skin_id', true);
		$this->dbforge->create_table('catalogue_skins');

		$this->dbforge->add_field(array(
			'skinsec_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'skinsec_section' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'skinsec_skin' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'skinsec_image_preview' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => ''),
			'skinsec_status' => array(
				'type' => 'ENUM',
				'constraint' => "'active','inactive','development'",
				'default' => 'active'),
			'skinsec_default' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'n')
		));
		$this->dbforge->add_key('skinsec_id', true);
		$this->dbforge->create_table('catalogue_skinsecs');
	}

	public function down()
	{
		$this->dbforge->drop_table('catalogue_ranks');
		$this->dbforge->drop_table('catalogue_skins');
		$this->dbforge->drop_table('catalogue_skinsecs');
	}
}
