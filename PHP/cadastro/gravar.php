<?php
$nome = $_POST["nome"];
$nascimento = $_POST["nascimento"];
$sexo = $_POST["sexo"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];

$con = mysqli_connect("localhost","root","","testephp");
mysqli_query($con,"insert into cliente(nome,nascimento,sexo) values('$nome','$nascimento','$sexo')");
/*include 'dietpro_funcoes.php';
echo "<br>".$nome;
echo "<br>".$nascimento;
echo "<br>".$sexo;
echo "<br>".$altura;
echo "<br>".$peso;
echo "<br>";

echo $idade = idade($nascimento);

echo "<br> idade:".$idade;
echo "<br> imc: ".imc($peso,$altura);
echo "<br> tmb: ".$tmb = tmb($peso,$nascimento,$sexo);
$atividade = 'C. ao leito';
$horas = '2:30';
echo "<br> naf: ".$naf = naf($sexo,$atividade,$horas);
echo "<br> vet: ".vet($tmb,$naf);



//testando a consulta
<?php
$con = mysqli_connect("localhost","root","","testephp");
mysqli_query($con,"SELECT * FROM cliente");
?>
<table>
	<tr>
		<td>Nome</td>
		<td>Nascimento</td>
		<td>Sexo</td>
		<td>ID</td>
	</tr>
	<?php while ($dado = $con - > fetch_array() ) { ?>
		<tr>
			<td><?php echo $dado["nome"]; ?></td>
			<td><?php echo $dado["nascimento"]; ?></td>
			<td><?php echo $dado["sexo"]; ?></td>
			<td><?php echo $dado["id"]; ?></td>
		</tr>
	<?php	} ?>
</table>
*/
?>