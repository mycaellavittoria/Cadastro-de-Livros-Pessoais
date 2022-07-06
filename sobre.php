
    <?php
		//Conexão com o banco de dados		
		require_once 'db_connect.php';

		require_once 'header.php'; 
		
		
		//Mensagem
		include_once 'mensagem.php';
	?>



    <div class="container">
        <div class="row">


            <blockquote>
                O site de cadastro de livros pessoais tem como objetivo simplificar e modificar a forma que o usuário realiza o controle de suas leituras do dia a dia. Podendo assim fazer a gestão de controle dos seus livros, utilizando as opções: Quero ler, lendo e
                favorito para classificar seus livros, semelhante a uma estante organizadora de livros.

                </br>
                </br>
                <div class="livros">
                    <img src="img/estante.png" class="itemlivro">
                    <img src="img/estante2.png" class="itemlivro">
                    <img src="img/estante3.png" class="itemlivro">
                </div>



            </blockquote>
            <p> </p>
        </div>
    </div>

    <?php include_once 'footer.php';?>
