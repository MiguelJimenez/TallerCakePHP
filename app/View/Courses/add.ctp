<div class="form">
	<?php echo $this->Form->create('Course') ?>
	<fieldset>
		<legend>Agregar curso</legend>
		<?php 
			echo $this->Form->input('name', array('label' => 'Nombre'));
			echo $this->Form->input('description', array('label' => 'Descripción'));
			echo $this->Form->input('teacher_id', array('label' => 'Profesor'));
			echo $this->Form->end('Guardar curso');

		 ?>
	</fieldset>


</div>