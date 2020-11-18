<?php 

	include './conexao.php';

	$con = getConnection();

	$sql = 'UPDATE `produtos` SET `nome`= :nome ,`descrisao`= :descr WHERE `id` = :id';

	$descrisao = "comida famosa na italia ";
	$nome = "macarrao";
	$id = 3;

	$stmt = $con->prepare($sql);
	$stmt->bindParam(':nome' , $nome);
	$stmt->bindParam(':descr' , $descrisao);
	$stmt->blindParam(':id' ,$id);

	if ($stmt->execute()) {
		echo "atualizado com sucesso";
	}else{
		echo "erro";
	}

	read();