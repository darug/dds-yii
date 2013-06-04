<?php

class m130604_130602_create_index_content_table extends CDbMigration
{
	public function up()
	{
		
		$this->createIndex('name', 'content', 'name', true);
		
	}

	public function down()
	{
		$this->dropIndex('name', 'content');
	}

}