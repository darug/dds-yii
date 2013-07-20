<?php

class m130720_101004_rename_table_user_to_admin extends CDbMigration
{
	public function up()
	{
		
		$this->renameTable('user', 'admin');
		
	}

	public function down()
	{
		
		$this->renameTable('admin', 'user');
		
	}

}