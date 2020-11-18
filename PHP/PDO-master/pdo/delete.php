<?php 
	
	
	include './read-stmt.php';

	$con = getConnection();

	read();
	
	$id = 4;
	
	$sql = 'DELETE FROM `produtos` WHERE `id` = '.$id;

	

	$stmt = $con->prepare($sql);
	

	if ($stmt->execute()) {
		echo "deletado com sucesso";
	}else{
		echo "erro";
	}