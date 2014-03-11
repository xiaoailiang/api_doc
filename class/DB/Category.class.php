<?php
class DB_Category extends DB_Model{
	public $tableName = 'category';
	
	public function create($condition,$duplicateCondition = null){
		$condition['create_time'] = $condition['create_time'] ? $condition['create_time'] : time();
		$condition['update_time'] = $condition['update_time'] ? $condition['update_time'] : time();
		if($duplicateCondition){
			$duplicateCondition['update_time'] = $duplicateCondition['update_time'] ? $duplicateCondition['update_time'] : time();
		}
		return parent::create($condition,$duplicateCondition);
	}
	
}