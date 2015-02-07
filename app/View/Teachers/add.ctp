<div class="add">
	<?php echo $this->Form->create('Teacher') ?>
	<fieldset>
		<legend>Agregar profesor</legend>
		<?php echo $this->Form->input('name', array('label' => 'Nombre')); ?>
		<?php echo $this->Form->input('last_name', array('label' => 'Apellidos')); ?>
		<?php echo $this->Form->input('cv', array('label' => 'Currículum Vitae')); ?>
	</fieldset>
	<?php echo $this->Form->end('Crear profesor'); ?>
</div>