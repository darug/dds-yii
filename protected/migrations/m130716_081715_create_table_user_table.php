<?php

class m130716_081715_create_table_user_table extends CDbMigration
{
	public function up()
	{
		
			$this->createTable('user', array(
					'id'			=>	'pk',
					'username'		=>	'string NOT NULL',
					'password'		=>	'string NOT NULL',
					'salt'			=>	'int',
					'strategy'		=>	'int',
					'authority'		=>	'int',
					'remembering'	=>	'string NOT NULL',
					'lastmod'		=>	'string NOT NULL',
					'title'			=>	'string NOT NULL',
					'rememberMe'	=>	'boolean'
			));
			$this->createIndex('username', 'user', 'username');
	}

	public function down()
	{
			$this->dropIndex('username', 'user');
			$this->dropTable('user');
	}

}