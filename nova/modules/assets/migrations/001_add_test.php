<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_test extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field('id');
		$this->dbforge->create_table('blog');
	}

	public function down()
	{
		$this->dbforge->drop_table('blog');
	}
}
