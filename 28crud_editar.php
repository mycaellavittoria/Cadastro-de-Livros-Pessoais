<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="css/cabecalho.css">
</head>


<?php

//Conexão
include_once 'db_connect.php';

//Header
include_once 'header.php';

//Select com o id que veio da URL
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM livro WHERE id =  '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light"> Editar Livro </h3>
        <form action="updatelivro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="titulo" id="nome" value="<?php echo $dados['titulo']; ?>">
                <label for="titulo"> Titulo do Livro</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="nomeautor" id="nomeautor" value="<?php echo $dados['nomeautor']; ?>">
                <label for="nomeautor"> Nome do Autor </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="isbn" id="isbn"maxlength = "13" value="<?php echo $dados['isbn']; ?>">
                <label for="isbn"> ISBN </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="situacao" id="situacao" value="<?php echo $dados['situacao']; ?>">
                <label for="situacao"> Situacao</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="home.php" type="submit" class="btn red">Lista de livros</button>
        </form>

    </div>
</div>


<?php include_once 'footer.php'; ?>
