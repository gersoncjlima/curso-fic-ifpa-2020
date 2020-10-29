<?php 

	if(isset($_POST['campo_nome'])) {

		$nome = $_POST['campo_nome'];
		$sobrenome = $_POST['campo_sobrenome'];
		$cpf = $_POST['campo_cpf'];
		$endereço = $_POST['campo_endereco'];
		$telefone = $_POST['campo_telefone'];
		$email = $_POST['campo_email'];

		$sql = "INSERT INTO clientes(nome,sobrenome,cpf,endereco,telefone,email)VALUES('$nome','$sobrenome','$cpf','$endereco','$telefone','$email')";

		include "conexao.php";

		if(mysqli_query($con, $sql)) {

			header("Location:index.php?p=cc");

		} else {

			echo "Erro: ". $sql . "<br>" . mysql_error($con);
		}

		mysqli_close($con);

	} else {

		echo "Erro";

	}

?>