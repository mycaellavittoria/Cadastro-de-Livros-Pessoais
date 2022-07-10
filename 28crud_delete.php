 <?php

//Conexão com o banco de dados		
require_once 'db_connect.php';

require_once 'header.php'; 
		
		
//Mensagem
include_once 'mensagem.php';


if(isset($_POST['btn-deletar'])):
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$sql="DELETE FROM livro WHERE  id=$id";
	
	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Excluido com sucesso!";
		header('Location: ../home.php');
	else:
		$_SESSION['mensagem'] = "Erro ao excluir!";
		header('Location: ../home.php');
	endif;
endif;	



?>

<?php include_once 'footer.php';?>
