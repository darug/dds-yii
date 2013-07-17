<?php

class m130716_081243_add_column_content_table extends CDbMigration
{
	public function up()
	{
		
		$this->addColumn('content', 'url', 'string');
		
	}

	public function down()
	{
		$this->dropColumn('column', 'url');
	}

}