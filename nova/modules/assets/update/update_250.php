<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Update Nova from - to 2.5.0
 */
$system_info	= null;
$add_tables		= null;
$drop_tables	= null;
$rename_tables	= null;
$add_column		= null;
$modify_column	= null;
$drop_column	= null;

/**
 * Version info for the database
 */
$system_info = array(
	'sys_last_update'		=> now(),
	'sys_version_major'		=> 2,
	'sys_version_minor'		=> 5,
	'sys_version_update'	=> 0
);

/*
|---------------------------------------------------------------
| TABLES TO ADD
|
| $add_tables = array(
|	'table_name' => array(
|		'id' => 'table_id',
|		'fields' => 'fields_table_name')
| );
|
| $fields_table_name = array(
|	'table_id' => array(
|		'type' => 'INT',
|		'constraint' => 6,
|		'auto_increment' => TRUE),
|	'table_field_1' => array(
|		'type' => 'VARCHAR',
|		'constraint' => 255,
|		'default' => ''),
|	'table_field_2' => array(
|		'type' => 'INT',
|		'constraint' => 4,
|		'default' => '99')
| );
|---------------------------------------------------------------
*/

if ($add_tables !== null)
{
	foreach ($add_tables as $key => $value)
	{
		$this->dbforge->add_field($$value['fields']);
		$this->dbforge->add_key($value['id'], true);
		$this->dbforge->create_table($key, true);
	}
}

/*
|---------------------------------------------------------------
| TABLES TO DROP
|
| $drop_tables = array('table_name');
|---------------------------------------------------------------
*/

if ($drop_tables !== null)
{
	foreach ($drop_tables as $value)
	{
		$this->dbforge->drop_table($value);
	}
}

/*
|---------------------------------------------------------------
| TABLES TO RENAME
|
| $rename_tables = array('old_table_name' => 'new_table_name');
|---------------------------------------------------------------
*/

if ($rename_tables !== null)
{
	foreach ($rename_tables as $key => $value)
	{
		$this->dbforge->rename_table($key, $value);
	}
}

/*
|---------------------------------------------------------------
| COLUMNS TO ADD
|
| $add_column = array(
|	'table_name' => array(
|		'field_name_1' => array('type' => 'TEXT'),
|		'field_name_2' => array(
|			'type' => 'VARCHAR',
|			'constraint' => 100)
|	)
| );
|---------------------------------------------------------------
*/

if ($add_column !== null)
{
	foreach ($add_column as $key => $value)
	{
		$this->dbforge->add_column($key, $value);
	}
}

/*
|---------------------------------------------------------------
| COLUMNS TO MODIFY
|
| $modify_column = array(
|	'table_name' => array(
|		'old_field_name' => array(
|			'name' => 'new_field_name',
|			'type' => 'TEXT')
|	)
| );
|---------------------------------------------------------------
*/

if ($modify_column !== null)
{
	foreach ($modify_column as $key => $value)
	{
		$this->dbforge->modify_column($key, $value);
	}
}

/*
|---------------------------------------------------------------
| COLUMNS TO DROP
|
| $drop_column = array(
|	'table_name' => array('field_name')
| );
|---------------------------------------------------------------
*/

if ($drop_column !== null)
{
	foreach ($drop_column as $key => $value)
	{
		$this->dbforge->drop_column($key, $value[0]);
	}
}

/**
 * Update the classes on dynamic fields for Bootstrap 2.
 */

$fieldsToUpdate = array(
	'age' 			=> 'span1',
	'decks'			=> 'span1',
	'shuttlebays'	=> 'span1',

	'height' 				=> 'span2',
	'weight' 				=> 'span2',
	'hair_color'			=> 'span2',
	'eye_color' 			=> 'span2',
	'length'				=> 'span2',
	'width'					=> 'span2',
	'compliment_officers'	=> 'span2',
	'compliment_enlisted'	=> 'span2',
	'compliment_marines'	=> 'span2',
	'compliment_civilians'	=> 'span2',
	'compliment_emergency'	=> 'span2',
	'speed_normal'			=> 'span2',
	'speed_max'				=> 'span2',
	'speed_emergency'		=> 'span2',

	'children' 		=> 'span6',
	'brothers' 		=> 'span6',
	'sisters' 		=> 'span6',
	'other_family'	=> 'span6',
);

// Load the models
$this->load->model('characters_model', 'characters');
$this->load->model('specs_model', 'specs');
$this->load->model('tour_model', 'tour');

// Get all the fields
$fields['characters'] = $this->characters->get_bio_fields('', '', '');
$fields['specs'] = $this->specs->get_spec_fields('', '', '');
$fields['tour'] = $this->tour->get_tour_fields('', '');

// Loop through the forms
foreach ($fields as $formKey => $form)
{
	// Loop through the form's fields
	foreach ($form as $f)
	{
		// If we have explicit set the class, use it, otherwise figure out what it should be
		if (array_key_exists($f->field_name, $fieldsToUpdate))
		{
			$updateDate['field_class'] = $fieldsToUpdate[$f->field_name];
		}
		else
		{
			$updateDate['field_class'] = ($f->field_type == 'textarea') ? 'span8' : 'span4';
		}

		// Figure out which model and method to call
		switch ($formKey)
		{
			case 'characters':
				$this->characters->update_bio_field($f->field_id, $updateData);
			break;

			case 'specs':
				$this->specs->update_spec_field($f->field_id, $updateData);
			break;

			case 'tour':
				$this->tour->update_tour_field($f->field_id, $updateData);
			break;
		}
	}
}
