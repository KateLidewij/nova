<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_forms extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'data_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'data_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'data_char' => array(
				'type' => 'INT',
				'constraint' => 8),
			'data_user' => array(
				'type' => 'INT',
				'constraint' => 8),
			'data_value' => array(
				'type' => 'TEXT'),
			'data_updated' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('data_id', true);
		$this->dbforge->create_table('characters_data');

		$this->dbforge->add_field(array(
			'field_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'field_type' => array(
				'type' => 'ENUM',
				'constraint' => "'text','select','textarea'",
				'default' => 'text'),
			'field_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_fid' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_class' => array(
				'type' => 'TEXT'),
			'field_label_page' => array(
				'type' => 'TEXT'),
			'field_value' => array(
				'type' => 'TEXT'),
			'field_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'field_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'field_rows' => array(
				'type' => 'INT',
				'constraint' => 3,
				'default' => 5),
			'field_section' => array(
				'type' => 'INT',
				'constraint' => 8,
				'default' => 1)
		));
		$this->dbforge->add_key('field_id', true);
		$this->dbforge->create_table('characters_fields');

		$characters_fields = array(
			array(
				'field_type' => 'select',
				'field_name' => 'gender',
				'field_fid' => 'gender',
				'field_label_page' => 'Gender',
				'field_order' => 1),
			array(
				'field_type' => 'text',
				'field_name' => 'species',
				'field_fid' => 'species',
				'field_class' => '',
				'field_label_page' => 'Species',
				'field_order' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'age',
				'field_fid' => 'age',
				'field_class' => 'small',
				'field_label_page' => 'Age',
				'field_order' => 3),
				
			array(
				'field_type' => 'text',
				'field_name' => 'height',
				'field_fid' => 'height',
				'field_class' => 'medium',
				'field_label_page' => 'Height',
				'field_order' => 1,
				'field_section' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'weight',
				'field_fid' => 'weight',
				'field_class' => 'medium',
				'field_label_page' => 'Weight',
				'field_order' => 2,
				'field_section' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'hair_color',
				'field_fid' => 'hair_color',
				'field_class' => '',
				'field_label_page' => 'Hair Color',
				'field_order' => 3,
				'field_section' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'eye_color',
				'field_fid' => 'eye_color',
				'field_class' => '',
				'field_label_page' => 'Eye Color',
				'field_order' => 4,
				'field_section' => 2),
			array(
				'field_type' => 'textarea',
				'field_name' => 'physical_desc',
				'field_fid' => 'physical_desc',
				'field_class' => '',
				'field_label_page' => 'Physical Description',
				'field_order' => 5,
				'field_section' => 2),
				
			array(
				'field_type' => 'textarea',
				'field_name' => 'personality',
				'field_fid' => 'personality',
				'field_class' => '',
				'field_label_page' => 'General Overview',
				'field_order' => 0,
				'field_section' => 4),
			array(
				'field_type' => 'textarea',
				'field_name' => 'strengths',
				'field_fid' => 'strengths',
				'field_class' => '',
				'field_label_page' => 'Strengths &amp; Weaknesses',
				'field_order' => 1,
				'field_section' => 4),
			array(
				'field_type' => 'textarea',
				'field_name' => 'ambitions',
				'field_fid' => 'ambitions',
				'field_class' => '',
				'field_label_page' => 'Ambitions',
				'field_order' => 2,
				'field_section' => 4),
			array(
				'field_type' => 'textarea',
				'field_name' => 'hobbies',
				'field_fid' => 'hobbies',
				'field_class' => '',
				'field_label_page' => 'Hobbies &amp; Interests',
				'field_order' => 3,
				'field_section' => 4),
				
			array(
				'field_type' => 'text',
				'field_name' => 'spouse',
				'field_fid' => 'spouse',
				'field_class' => '',
				'field_label_page' => 'Spouse',
				'field_order' => 0,
				'field_section' => 3),
			array(
				'field_type' => 'textarea',
				'field_name' => 'children',
				'field_fid' => 'children',
				'field_class' => '',
				'field_label_page' => 'Children',
				'field_order' => 1,
				'field_section' => 3),
			array(
				'field_type' => 'text',
				'field_name' => 'father',
				'field_fid' => 'father',
				'field_class' => '',
				'field_label_page' => 'Father',
				'field_order' => 2,
				'field_section' => 3),
			array(
				'field_type' => 'text',
				'field_name' => 'mother',
				'field_fid' => 'mother',
				'field_class' => '',
				'field_label_page' => 'Mother',
				'field_order' => 3,
				'field_section' => 3),
			array(
				'field_type' => 'textarea',
				'field_name' => 'brothers',
				'field_fid' => 'brothers',
				'field_class' => '',
				'field_label_page' => 'Brother(s)',
				'field_order' => 4,
				'field_section' => 3),
			array(
				'field_type' => 'textarea',
				'field_name' => 'sisters',
				'field_fid' => 'sisters',
				'field_class' => '',
				'field_label_page' => 'Sister(s)',
				'field_order' => 5,
				'field_section' => 3),
			array(
				'field_type' => 'textarea',
				'field_name' => 'other_family',
				'field_fid' => 'other_family',
				'field_class' => '',
				'field_label_page' => 'Other Family',
				'field_order' => 6,
				'field_section' => 3),
				
			array(
				'field_type' => 'textarea',
				'field_name' => 'history',
				'field_fid' => 'history',
				'field_class' => '',
				'field_label_page' => 'Personal History',
				'field_order' => 0,
				'field_section' => 5,
				'field_rows' => 15),
			array(
				'field_type' => 'textarea',
				'field_name' => 'service_record',
				'field_fid' => 'service_record',
				'field_class' => '',
				'field_label_page' => 'Service Record',
				'field_order' => 1,
				'field_section' => 5,
				'field_rows' => 15),
		);

		foreach ($characters_fields as $d)
		{
			$this->db->insert('characters_fields', $d);
		}

		$this->dbforge->add_field(array(
			'section_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'section_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'section_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'section_tab' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 1)
		));
		$this->dbforge->add_key('section_id', true);
		$this->dbforge->create_table('characters_sections');

		$characters_sections = array(
			array(
				'section_name' => 'Character Information',
				'section_order' => 0,
				'section_tab' => 1),
			array(
				'section_name' => 'Physical Appearance',
				'section_order' => 1,
				'section_tab' => 1),
			array(
				'section_name' => 'Family',
				'section_order' => 2,
				'section_tab' => 1),
			array(
				'section_name' => 'Personality &amp; Traits',
				'section_order' => 0,
				'section_tab' => 2),
			array(
				'section_name' => '',
				'section_order' => 0,
				'section_tab' => 3),
		);

		foreach ($characters_sections as $d)
		{
			$this->db->insert('characters_sections', $d);
		}

		$this->dbforge->add_field(array(
			'tab_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'tab_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'tab_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'tab_link_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => 'one'),
			'tab_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y')
		));
		$this->dbforge->add_key('tab_id', true);
		$this->dbforge->create_table('characters_tabs');

		$characters_tabs = array(
			array(
				'tab_order' => 1,
				'tab_name' => 'Basic Info',
				'tab_link_id' => 'one'),
			array(
				'tab_order' => 2,
				'tab_name' => 'Personality',
				'tab_link_id' => 'two'),
			array(
				'tab_order' => 3,
				'tab_name' => 'History',
				'tab_link_id' => 'three'),
		);

		foreach ($characters_tabs as $d)
		{
			$this->db->insert('characters_tabs', $d);
		}

		$this->dbforge->add_field(array(
			'value_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'value_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'value_field_value' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'value_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
				'default' => ''),
			'value_content' => array(
				'type' => 'TEXT'),
			'value_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('value_id', true);
		$this->dbforge->create_table('characters_values');

		$characters_values = array(
			array(
				'value_field' => 1,
				'value_field_value' => 'Male',
				'value_content' => 'Male',
				'value_order' => 1),
			array(
				'value_field' => 1,
				'value_field_value' => 'Female',
				'value_content' => 'Female',
				'value_order' => 2),
			array(
				'value_field' => 1,
				'value_field_value' => 'Hermaphrodite',
				'value_content' => 'Hermaphrodite',
				'value_order' => 3),
			array(
				'value_field' => 1,
				'value_field_value' => 'Neuter',
				'value_content' => 'Neuter',
				'value_order' => 4)
		);

		foreach ($characters_values as $d)
		{
			$this->db->insert('characters_values', $d);
		}

		/**
		 * Docking form
		 */
		$this->dbforge->add_field(array(
			'data_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'data_docking_item' => array(
				'type' => 'INT',
				'constraint' => 5),
			'data_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'data_value' => array(
				'type' => 'TEXT'),
			'data_updated' => array(
				'type' => 'BIGINT',
				'constraint' => 20),
		));
		$this->dbforge->add_key('data_id', true);
		$this->dbforge->create_table('docking_data');

		$this->dbforge->add_field(array(
			'field_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'field_type' => array(
				'type' => 'ENUM',
				'constraint' => "'text','select','textarea'",
				'default' => 'text'),
			'field_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_fid' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_class' => array(
				'type' => 'TEXT'),
			'field_label_page' => array(
				'type' => 'TEXT'),
			'field_value' => array(
				'type' => 'TEXT'),
			'field_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
			'field_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'field_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'field_rows' => array(
				'type' => 'INT',
				'constraint' => 3,
				'default' => 5),
			'field_section' => array(
				'type' => 'INT',
				'constraint' => 8,
				'default' => 1),
		));
		$this->dbforge->add_key('field_id', true);
		$this->dbforge->create_table('docking_fields');

		$this->dbforge->add_field(array(
			'section_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'section_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'section_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('section_id', true);
		$this->dbforge->create_table('docking_sections');

		$this->dbforge->add_field(array(
			'value_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'value_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'value_field_value' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'value_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
				'default' => ''),
			'value_content' => array(
				'type' => 'TEXT'),
			'value_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('value_id', true);
		$this->dbforge->create_table('docking_values');

		/**
		 * Specs form
		 */
		$this->dbforge->add_field(array(
			'data_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'data_item' => array(
				'type' => 'INT',
				'constraint' => 5),
			'data_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'data_value' => array(
				'type' => 'TEXT'),
			'data_updated' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('data_id', true);
		$this->dbforge->create_table('specs_data');

		$this->dbforge->add_field(array(
			'field_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'field_type' => array(
				'type' => 'ENUM',
				'constraint' => "'text','select','textarea'",
				'default' => 'text'),
			'field_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_fid' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_class' => array(
				'type' => 'TEXT'),
			'field_label_page' => array(
				'type' => 'TEXT'),
			'field_value' => array(
				'type' => 'TEXT'),
			'field_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
			'field_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'field_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'field_rows' => array(
				'type' => 'INT',
				'constraint' => 3,
				'default' => 5),
			'field_section' => array(
				'type' => 'INT',
				'constraint' => 8,
				'default' => 1)
		));
		$this->dbforge->add_key('field_id', true);
		$this->dbforge->create_table('specs_fields');

		$specs_fields = array(
			array(
				'field_type' => 'text',
				'field_name' => 'class',
				'field_fid' => 'class',
				'field_class' => '',
				'field_label_page' => 'Class',
				'field_order' => 0,
				'field_section' => 1),
			array(
				'field_type' => 'text',
				'field_name' => 'role',
				'field_fid' => 'role',
				'field_class' => '',
				'field_label_page' => 'Role',
				'field_order' => 1,
				'field_section' => 1),
			array(
				'field_type' => 'text',
				'field_name' => 'duration',
				'field_fid' => 'duration',
				'field_class' => '',
				'field_label_page' => 'Duration',
				'field_order' => 2,
				'field_section' => 1),
			array(
				'field_type' => 'text',
				'field_name' => 'refit',
				'field_fid' => 'refit',
				'field_class' => '',
				'field_label_page' => 'Time Between Refits',
				'field_order' => 3,
				'field_section' => 1),
			array(
				'field_type' => 'text',
				'field_name' => 'resupply',
				'field_fid' => 'resupply',
				'field_class' => '',
				'field_label_page' => 'Time Between Resupply',
				'field_order' => 4,
				'field_section' => 1),
				
			array(
				'field_type' => 'text',
				'field_name' => 'length',
				'field_fid' => 'length',
				'field_class' => '',
				'field_label_page' => 'Length',
				'field_order' => 0,
				'field_section' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'width',
				'field_fid' => 'width',
				'field_class' => '',
				'field_label_page' => 'Width',
				'field_order' => 1,
				'field_section' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'height',
				'field_fid' => 'height',
				'field_class' => '',
				'field_label_page' => 'Height',
				'field_order' => 2,
				'field_section' => 2),
			array(
				'field_type' => 'text',
				'field_name' => 'decks',
				'field_fid' => 'decks',
				'field_class' => 'medium',
				'field_label_page' => 'Decks',
				'field_order' => 3,
				'field_section' => 2),
				
			array(
				'field_type' => 'text',
				'field_name' => 'compliment_officers',
				'field_fid' => 'compliment_officers',
				'field_class' => 'medium',
				'field_label_page' => 'Officers',
				'field_order' => 0,
				'field_section' => 3),
			array(
				'field_type' => 'text',
				'field_name' => 'compliment_enlisted',
				'field_fid' => 'compliment_enlisted',
				'field_class' => 'medium',
				'field_label_page' => 'Enlisted Crew',
				'field_order' => 1,
				'field_section' => 3),
			array(
				'field_type' => 'text',
				'field_name' => 'compliment_marines',
				'field_fid' => 'compliment_marines',
				'field_class' => 'medium',
				'field_label_page' => 'Marines',
				'field_order' => 2,
				'field_section' => 3),
			array(
				'field_type' => 'text',
				'field_name' => 'compliment_civilians',
				'field_fid' => 'compliment_civilians',
				'field_class' => 'medium',
				'field_label_page' => 'Civilians',
				'field_order' => 3,
				'field_section' => 3),
			array(
				'field_type' => 'text',
				'field_name' => 'compliment_emergency',
				'field_fid' => 'compliment_emergency',
				'field_class' => 'medium',
				'field_label_page' => 'Emergency Capacity',
				'field_order' => 4,
				'field_section' => 3),
				
			array(
				'field_type' => 'text',
				'field_name' => 'speed_normal',
				'field_fid' => 'speed_normal',
				'field_class' => 'medium',
				'field_label_page' => 'Cruise Speed',
				'field_order' => 0,
				'field_section' => 4),
			array(
				'field_type' => 'text',
				'field_name' => 'speed_max',
				'field_fid' => 'speed_max',
				'field_class' => 'medium',
				'field_label_page' => 'Maximum Speed',
				'field_order' => 1,
				'field_section' => 4),
			array(
				'field_type' => 'text',
				'field_name' => 'speed_emergency',
				'field_fid' => 'speed_emergency',
				'field_class' => 'medium',
				'field_label_page' => 'Emergency Speed',
				'field_order' => 2,
				'field_section' => 4),
				
			array(
				'field_type' => 'textarea',
				'field_name' => 'defensive',
				'field_fid' => 'defensive',
				'field_class' => '',
				'field_label_page' => 'Shields',
				'field_order' => 0,
				'field_section' => 5,
				'field_rows' => 5),
			array(
				'field_type' => 'textarea',
				'field_name' => 'weapons',
				'field_fid' => 'weapons',
				'field_class' => '',
				'field_label_page' => 'Weapon Systems',
				'field_order' => 1,
				'field_section' => 5,
				'field_rows' => 5),
			array(
				'field_type' => 'textarea',
				'field_name' => 'armament',
				'field_fid' => 'armament',
				'field_class' => '',
				'field_label_page' => 'Armament',
				'field_order' => 2,
				'field_section' => 5,
				'field_rows' => 5),
				
			array(
				'field_type' => 'text',
				'field_name' => 'shuttlebays',
				'field_fid' => 'shuttlebays',
				'field_class' => 'small',
				'field_label_page' => 'Shuttlebays',
				'field_order' => 0,
				'field_section' => 6),
			array(
				'field_type' => 'textarea',
				'field_name' => 'shuttles',
				'field_fid' => 'shuttles',
				'field_class' => '',
				'field_label_page' => 'Shuttles',
				'field_order' => 1,
				'field_section' => 6,
				'field_rows' => 5),
			array(
				'field_type' => 'textarea',
				'field_name' => 'fighters',
				'field_fid' => 'fighters',
				'field_class' => '',
				'field_label_page' => 'Fighters',
				'field_order' => 2,
				'field_section' => 6,
				'field_rows' => 5),
			array(
				'field_type' => 'textarea',
				'field_name' => 'runabouts',
				'field_fid' => 'runabouts',
				'field_class' => '',
				'field_label_page' => 'Runabouts',
				'field_order' => 3,
				'field_section' => 6,
				'field_rows' => 5),
		);

		foreach ($specs_fields as $d)
		{
			$this->db->insert('specs_fields', $d);
		}

		$this->dbforge->add_field(array(
			'section_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE),
			'section_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'section_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('section_id', true);
		$this->dbforge->create_table('specs_sections');

		$specs_sections = array(
			array(
				'section_name' => 'General',
				'section_order' => 0),
			array(
				'section_name' => 'Dimensions',
				'section_order' => 1),
			array(
				'section_name' => 'Personnel',
				'section_order' => 2),
			array(
				'section_name' => 'Speed',
				'section_order' => 3),
			array(
				'section_name' => 'Weapons &amp; Defensive Systems',
				'section_order' => 4),
			array(
				'section_name' => 'Auxiliary Craft',
				'section_order' => 5),
		);

		foreach ($specs_sections as $d)
		{
			$this->db->insert('specs_sections', $d);
		}

		$this->dbforge->add_field(array(
			'value_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'value_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'value_type' => array(
				'type' => 'ENUM',
				'constraint' => "'option'",
				'default' => 'option'),
			'value_field_value' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'value_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
				'default' => ''),
			'value_content' => array(
				'type' => 'TEXT'),
			'value_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('value_id', true);
		$this->dbforge->create_table('specs_values');

		/**
		 * Tour form
		 */
		$this->dbforge->add_field(array(
			'data_id' => array(
				'type' => 'BIGINT',
				'constraint' => 20,
				'auto_increment' => TRUE),
			'data_tour_item' => array(
				'type' => 'INT',
				'constraint' => 5),
			'data_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'data_value' => array(
				'type' => 'TEXT'),
			'data_updated' => array(
				'type' => 'BIGINT',
				'constraint' => 20)
		));
		$this->dbforge->add_key('data_id', true);
		$this->dbforge->create_table('tour_data');

		$this->dbforge->add_field(array(
			'field_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'field_type' => array(
				'type' => 'ENUM',
				'constraint' => "'text','select','textarea'",
				'default' => 'text'),
			'field_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_fid' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => ''),
			'field_class' => array(
				'type' => 'TEXT'),
			'field_label_page' => array(
				'type' => 'TEXT'),
			'field_value' => array(
				'type' => 'TEXT'),
			'field_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'default' => ''),
			'field_order' => array(
				'type' => 'INT',
				'constraint' => 5),
			'field_display' => array(
				'type' => 'ENUM',
				'constraint' => "'y','n'",
				'default' => 'y'),
			'field_rows' => array(
				'type' => 'INT',
				'constraint' => 3,
				'default' => 5),
		));
		$this->dbforge->add_key('field_id', true);
		$this->dbforge->create_table('tour_fields');

		$tour_fields = array(
			array(
				'field_type' => 'text',
				'field_name' => 'location',
				'field_fid' => 'location',
				'field_class' => '',
				'field_label_page' => 'Location',
				'field_order' => 0),
			array(
				'field_type' => 'textarea',
				'field_name' => 'long_desc',
				'field_fid' => 'long_desc',
				'field_class' => '',
				'field_label_page' => 'Description',
				'field_order' => 1,
				'field_rows' => 8),
		);

		foreach ($tour_fields as $d)
		{
			$this->db->insert('tour_fields', $d);
		}

		$this->dbforge->add_field(array(
			'value_id' => array(
				'type' => 'INT',
				'constraint' => 10,
				'auto_increment' => TRUE),
			'value_field' => array(
				'type' => 'INT',
				'constraint' => 10),
			'value_field_value' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'value_selected' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
				'default' => ''),
			'value_content' => array(
				'type' => 'TEXT'),
			'value_order' => array(
				'type' => 'INT',
				'constraint' => 5)
		));
		$this->dbforge->add_key('value_id', true);
		$this->dbforge->create_table('tour_values');
	}

	public function down()
	{
		$this->dbforge->drop_table('characters_data');
		$this->dbforge->drop_table('characters_fields');
		$this->dbforge->drop_table('characters_sections');
		$this->dbforge->drop_table('characters_tabs');
		$this->dbforge->drop_table('characters_values');

		$this->dbforge->drop_table('docking_data');
		$this->dbforge->drop_table('docking_fields');
		$this->dbforge->drop_table('docking_sections');
		$this->dbforge->drop_table('docking_values');

		$this->dbforge->drop_table('specs_data');
		$this->dbforge->drop_table('specs_fields');
		$this->dbforge->drop_table('specs_sections');
		$this->dbforge->drop_table('specs_values');

		$this->dbforge->drop_table('tour_data');
		$this->dbforge->drop_table('tour_fields');
		$this->dbforge->drop_table('tour_values');
	}
}
