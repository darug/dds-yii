<?php

class m130717_124418_insert_first_user_to_user_table extends CDbMigration
{
	public function up()
	{
		
		$this->insert('user', array(
			'username'		=>	'admin',
			'password'		=>	'$2a$13$nQlzxQbLynX6VKO2OxLdOeDKfPC0ab7o5uWX5xCaV5eV4HA1t1dMa',
			'salt'			=>	2147483647,
			'strategy'		=>	0,
			'authority'		=>	99,
			'remembering'	=>	'', 
			'title'			=>	'',
			'rememberMe'	=>	0
		));
		
	}

	public function down()
	{
		$this->truncateTable('user');
	}

}