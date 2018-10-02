<div class="container">
	<ul class="list-group">
		<li class="list-group-item active"><b>Tarefa: </b><?php echo $tasks->name?></li>
		<li class="list-group-item"><b>Descrição: </b><?php echo $tasks->description; ?></li>
		<li class="list-group-item"><b>Prazo: </b><?php echo $tasks->deadline; ?></li>
		<li class="list-group-item"><b>Prioridade: </b><?php echo $tasks->priority; ?></li>
		<li class="list-group-item"><b>Completa: </b><?php echo $tasks->completed; ?></li>
	</ul> 
</div>