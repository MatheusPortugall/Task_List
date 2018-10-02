<div class="container">
		<form action="<?php  echo URL_BASE . 'pages/save' ?>" method="POST">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
         <input type="hidden" name="id" value="<?php echo $tasks->id ?>">
	    	<div class="form-group">
			  	<label >Nome</label>
			    <input type="text" class="form-control" name="name" value="<?php  echo $tasks->name ?>">
		 	</div>

			<div class="form-group">
				<label >Descrição</label>
			    <input type="text" class="form-control" name="description" value="<?php  echo $tasks->description ?>">
			</div>

			<div class="form-group">
				<label for="deadline">Prazo</label>
			    <input type="datetime-local" class="form-control" name="deadline">
			    <small class="form-text text-muted">Prazo limite para entrega da tarefa.</small>
			</div>

			<div class="form-group">
				<label>Prioridade</label>
				<select class="form-control" name='priority'>
					<option value="Muito Alta"> Muito Alta</option>
			   		<option value="Alta">Alta</option>
			   		<option value="Média">Média</option>
			   		<option value="Baixa">Baixa</option>
			    </select> 
			    <small class="form-text text-muted">Nível de prioridade: Muito Alta, Alta, Média ou Baixa.</small>
			</div>
			
			<div class="form-group">
				<label>Concluída</label>
				<select class="form-control" name='completed'>
					<option value="Não">Não</option>
					<option value="Sim">Sim</option>
				</select>
			    <small class="form-text text-muted">Se a tarefa foi concluída ou não.</small>
		    </div>
		    
	    	<button type="submit" class="btn btn-success">Cadastrar tarefa</button>

		</form>
	</div> 