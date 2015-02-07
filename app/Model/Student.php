<?php 
// Tabla students (plural y en minúsculas)
// Clase Student (singular y en CamelCase)
// ActiveRecord (buscar información)

class Student extends AppModel
{
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => 'El nombre no puede estar vacío'
			),
		'last_name' => array(
			'rule' => 'notEmpty',
			'message' => 'Los apellidos no pueden estar vacíos'
			)
		);

	public $hasAndBelongsToMany = array(
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'students_courses',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'course_id'
			)

		);



}
 ?>