<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Load the migration library with configuration
		$this->load->library('migration', array(
			'migration_enabled'	=> true,
			'migration_path'	=> MODPATH.'assets/migrations/',
		));

		// Run up to the latest migration
		$this->migration->latest();
	}
}
