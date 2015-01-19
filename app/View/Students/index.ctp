<h1>Listado de estudiantes</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellidos</th>
	</tr>
	<?php foreach ($estudiantes as $key => $estudiante):?>
	<tr>
		<td><?php echo $estudiante['Student']['id']; ?></td>
		<td><?php echo $estudiante['Student']['name']; ?></td>
		<td><?php echo $estudiante['Student']['last_name']; ?></td>
	</tr>

	<?php endforeach; ?>



</table>