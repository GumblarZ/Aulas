<?php  

include './conexao.php';

function read(){
	$conn = getConnection();
	$sql = "SELECT * FROM `produtos`";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$result = $stmt->fetchAll();

	 foreach ($result as $value) {
		echo 'Desc: '.$value['descrisao'].'<br>';
	}

	return $result;

}

read();