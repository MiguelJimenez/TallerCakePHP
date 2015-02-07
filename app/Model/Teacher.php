<?php 
class Teacher extends AppModel
{
	public $virtualFields = array(
		'name' => 'CONCAT(Teacher.name, " " , Teacher.last_name)'
		);
	public $displayField = 'name';

	public $hasMany = array(
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'teacher_id',
			'dependent' => true
			)
		);
}


 ?>