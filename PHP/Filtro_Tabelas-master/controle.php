<?php 
	include_once "conexao.php";
	$sql = "select * from Cliente";
	$resul = mysqli_query($con,$sql);
//verifica se tem registro dos clientes
	if ($resul) {
			echo "<table>";
			echo "<tr>
			 		<th>ID</th>
			 		<th>Nome</th>
			 		<th>E-mail</th>
			 		<th>Telefone</th>
			 		<th>Cep</th>
 				</tr>";
			while ($row = mysqli_fetch_array($resul)) {
				echo "<tr>
				 		<td>".$row[0]."</td>
				 		<td>".$row[1]."</td>
				 		<td>".$row[2]."</td>
				 		<td>".$row[3]."</td>
				 		<td>".$row[4]."</td>
 					</tr>";
			}
			echo "</table>";
		
	}else{
		echo "n ha dados";
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>controle</title>
</head>
<body>
	<form >
		busca por cliente:
		<input type="text" name="busca">
		<br>

		mercadoria:
		<select name="mercadoria">
			<option>Todo o Tipo</option>
			<option>Entregada</option>
			<option>Entrega Pendente</option>
		</select>
		<br>

		Valor da mercadoria entre:
		<br>
		Max:
		<input type="int" name="val-max">
		Min:
		<input type="int" name="val-min">
		<br>

		Ordenar por ordem
		<select name="ordenar">
			<option>Crescente</option>
			<option>Decrecente</option>
		</select>

		da coluna 
		<select name="coluna">
			<option>Compra</option>
			<option>Valor</option>
		</select>

		<br>
		<input type="submit" value="pesquisar">
	</form>
</body>
</html>

<?php 

	//retorno
	if ($_GET) {
		
			include_once 'filtro.php';

			//tabela 2 
			$resul = mysqli_query($con,$comando);
			if ($resul) {
			 	echo "<table>";
					echo "<tr>
					 		<th>Nome</th>
					 		<th>Mercadoria</th>
					 		<th>Valor</th>
					 		<th>Entregue</th>
		 				</tr>";
					while ($row = mysqli_fetch_array($resul)) {
						$Pendente = $row[3];
						$Pendente == 1 ?$Pendente = "Entregue" : $Pendente = "Pendente";
						echo "<tr>
						 		<td>".$row[0]."</td>
						 		<td>".$row[1]."</td>
						 		<td>".$row[2]."</td>
						 		<td>".$Pendente."</td>
						 		
		 					</tr>";
					}
					echo "</table>";
			 } 

	}
 ?>

 