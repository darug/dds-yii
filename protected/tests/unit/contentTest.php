<?php

class MyClassTest extends CTestCase 
{
	
	public function testTableName(){
		
		$tableName = 'content';
		$model = new Content();	
		$this->assertEquals($tableName, $model->tableName());
		
    }
	
	
	
}
