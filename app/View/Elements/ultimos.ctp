<h1>Profesores</h1>
<?php 
$teachers = $this->requestAction('teachers/index/sort:id/direction:desc/limit:3');
foreach($teachers as $teacher):
	?>
<article>
	<div class="img-noticia"></div>
	<div class="titulo-noticia">
		<h2>
			<?php echo $this->Html->link($teacher['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $teacher['Teacher']['id']));?>
		</h2>
	</div>
	
	<div class="noticia-content-rel">
		<p>
			<?php echo $teacher['Teacher']['cv']; ?>
		</p>
	</div>
</article>


<?php endforeach; ?>