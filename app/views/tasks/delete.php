<div class="container">
	    <div class="form-group">
	    	<b>Deseja excluir esta tarefa?</b>
	    	<ul class="list-group">
				<li class="list-group-item"><b>Nome da tarefa: </b><?php  echo $tasks->name ?></li>
				<li class="list-group-item"><b>Descrição: </b><?php  echo $tasks->description ?></li>
				 <li class="list-group-item"><b>Completa: </b><?php  echo $tasks->completed ?></li>
			</ul>
		 	    <br>
	    	<a class="btn btn-danger" href="<?php echo URL_BASE."pages/delete/". $tasks->id ."/S" ?>">Excluir tarefa</a>
	       </div>

		</form>
	</div> 
