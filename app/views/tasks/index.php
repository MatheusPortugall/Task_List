
<div class="container">
	<table class="table">
		<tr>
		    <th scope="col">Tarefas</th>
		    <th scope="col">Feita</th>
		    <th>Outros</th>
		 </tr>
		<tr>
		<?php foreach($tasks as $tasks) { ?>
		    <td><?php echo $tasks->name ?></td>
		    <td><?php echo $tasks->completed ?></td>
		    <td>
		    	<a href="<?php echo URL_BASE .'pages/details/'. $tasks->id ?>" class="btn btn-success">Visualizar</a>
		    	<a href="<?php echo URL_BASE .'pages/edit/'. $tasks->id ?>" class="btn btn-primary">Editar</a>
		    	<a href="<?php echo URL_BASE .'pages/delete/'. $tasks->id ?>" class="btn btn-danger">Excluir</a>
		    </td>
		</tr>
		<?php } ?>
		</table>
</div>
