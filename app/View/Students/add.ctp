<h1>Agregar estudiante</h1>
<?php 
	echo $this->Form->create('Student', array('novalidate' => true));
	echo $this->Form->input('name', array('label'=>'Nombre'));
	echo $this->Form->input('last_name', array('label'=>'Apellidos'));
	echo $this->Form->end('Guardar estudiante');
 ?>