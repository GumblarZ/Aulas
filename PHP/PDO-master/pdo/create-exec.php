<?php 

include './conexao.php';

	$conn = getConnection();

	$sql = "INSERT INTO `produtos`(`nome`, `descrisao`) VALUES ('arroz', 'comida nativa do brasil')";

	if ($conn->exec($sql)) {
		echo "Salvoi com sucesso";
	}else{
		echo "deu ruim";
	}


