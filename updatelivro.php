<?php
//Iniciar  Sessão
session_start();

//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$titulo=mysqli_escape_string($connect,$_POST['titulo']);
	$nomeautor=mysqli_escape_string($connect,$_POST['nomeautor']);
	$isbn=mysqli_escape_string($connect,$_POST['isbn']);
	$situacao=mysqli_escape_string($connect,$_POST['situacao']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$sql="UPDATE livro SET titulo='$titulo', nomeautor='$nomeautor', isbn='$isbn', situacao='$situacao' WHERE  id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../home.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../home.php');
	endif;
endif;	





?>
