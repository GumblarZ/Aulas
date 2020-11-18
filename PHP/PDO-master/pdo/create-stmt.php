<?php  
	include './conexao.php';

	$conn = getConnection();

	$sql = 'INSERT INTO `produtos`(`nome`, `descrisao`) VALUES (?,?)';

	$comida = 'pizza';
	$descrisao = 'comida criada na grecia antiga e muito popular na italia';

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1 , $comida);
	$stmt->bindParam(2 , $descrisao);
	

	if($stmt->execute()){
		echo "salvo";
	}else{
		echo 'deu ruim';
	}