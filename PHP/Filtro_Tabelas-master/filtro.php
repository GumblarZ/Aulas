<?php 
	
	$busca = $_GET["busca"];
	$mercadoria = $_GET["mercadoria"];
	$valmax = $_GET["val-max"];
	$valmin = $_GET["val-min"];
	$ordenar = $_GET["ordenar"];
	$coluna = $_GET["coluna"];

	//filtro do valor
	

	if ($valmax && $valmin) {
		$filtroValor = "valor BETWEEN ".$valmin." AND ".$valmax; 
		
	}elseif ($valmax) {
		$filtroValor = "valor <= ".$valmax;
		
	}elseif ($valmin) {
		$filtroValor = "valor >= ".$valmin;
		
	}else{
		$filtroValor = "valor >= 0";
	}

	//filtro do tipo de mercadoria
	switch ($mercadoria) {
		case 'Todo o Tipo':
			$filtroMer = " ";
			break;
		case 'Entregada':
			$filtroMer = "`entrega` = 1 AND";
			break;
		case 'Entrega Pendente':
			$filtroMer = "`entrega` = 0 AND";
			break;		
	}

	//filtro de busca
	if ($filtroMer != isset($filtroMer) || $filtroValor != isset($filtroValor)) {

		$busca = "nome LIKE '".$busca."%'";

	}else{

		$busca = "nome LIKE '".$busca."%' AND";
	  
	}
	
	//filtro de ordenagem 
	$ordenar == "Crescente" ? $order = "ORDER BY ".$coluna." ASC" : $order = "ORDER BY ".$coluna." DESC";
	
	//comando sql
	$comando = "SELECT nome,compra,valor,entrega FROM `compra` INNER JOIN Cliente on compra.ID_cliente = Cliente.ID where ".$busca." ".$filtroMer." ".$filtroValor." ".$order.";";
	


 ?>