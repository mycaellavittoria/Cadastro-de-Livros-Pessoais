<?php include_once 'header.php';?>

<div class="row">
	<!--https://materializecss.com/grid.html-->
	<div class="col s12 m6 push-m3 ">
	<h3 class="light"> Novo Livro </h3>
	<form action="create.php" method="POST">
		<div class="input-field col s12">
			<input type="text" name="titulo" id="titulo">
			<label for="titulo"> Titulo</label>
		</div>
	
		<div class="input-field col s12">
			<input type="text" name="nomeautor" id="nomeautor">
			<label for="nomeautor"> Nome do Autor</label>
		</div>
		
		<div class="input-field col s12">
			<input type="text" name="isbn" id="isbn" min=13 max=13>
			<label for="isbn"> ISBN</label>
		</div>
			
		<div class="input-field col s12">
			<input type="number" name="ano" id="ano" min="4" max="4">
			<label for="ano"> Ano de Publicação</label>
			
		<div class="input-field col s12">
			<input type="text" name="categoria" id="categoria">
			<label for="categoria">Selecione a categoria:</label>
		</div>
		<button type="submit" name="btn-cadastrar" class="btn">Cadastrar Livros</button>
		<a href="cadastro.php" type="submit" class="btn green">Lista de livros</a>
	</form>
	
	</div>
</div>


<?php include_once '28crud_footer.php';?>

     
 
