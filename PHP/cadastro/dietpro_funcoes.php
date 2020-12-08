<?php 
//formatador de data
function teste ($dataNascimento){
    $dataNascimento = strtotime ($dataNascimento);
}

// conversor de data para inteiro 
function quebra_data($data,$tipo){
    $d = explode("-",$data);
    switch ($tipo){
        case 'a':
            $d = intval($d[0]);
            break;
        case 'm':
            $d = intval($d[1]);
            break;
        case 'd':
            $d = intval($d[2]);
            break;
    }
    
    return $d;
}

// calculador de idade
function idade($nascimento){
    if (date('m') >= quebra_data($nascimento,'m')){
		if (date('d') >= quebra_data($nascimento,'d')){       
           $nacimento = quebra_data($nascimento,'a');
	   	   $nascimento = intval($nascimento);
           $idade = date('Y') - $nascimento; 
		}
	    elseif(date('d') < quebra_data($nascimento,'d')){
	       $nascimento = quebra_data($nascimento,'a');
           $idade = date('Y') - $nascimento -1;
	    }
    } 

    else {
        $nascimento = quebra_data($nascimento,'a');
        $idade = date('Y') - $nascimento - 1;
    }
    return $idade;
}

function imc($peso,$altura){
	$imc = $peso/($altura*$altura);
	return $imc;
}

//taxa metabolica basal
function tmb($peso,$nascimento,$sexo){
	$idade = idade($nascimento);
	if($sexo == "masculino"){
		if($idade >= 10 && $idade < 18){
		$tmb = (17.5 * $peso)+651;
	}
	if($idade >= 18 && $idade < 30){
		$tmb = (15.3 * $peso) + 679;
	}
	if($idade >= 30 && $idade < 60){
		$tmb = (11.6 * $peso) + 879;
	}
	if($idade >= 60){
		$tmb = (13.5 * $peso) + 487;
	}
	}

	if($sexo == "feminino"){
		if($idade >= 10 && $idade < 18){
		$tmb = (12.2 * $peso)+ 746;
		}
		if($idade >= 18 && $idade < 30){
		$tmb = (14.7 * $peso) + 496;
		}
		if($idade >= 30 && $idade < 60){
		$tmb = (8.5 * $peso) + 829;
		}
		if($idade >= 60){
		$tmb = (10.5 * $peso) + 596;
		}
	
	}
	return $tmb;
}

//nivel de atividade fisica
function naf ($sexo,$atividade,$horas){
//trata as horas
	$h = explode(":",$horas);
	$hr = $h[0];
	$mn = $h[1];
	$horas = intval($hr) + (intval($mn)/60);
//caca a formula de naf
	if($sexo == 'feminino'){
		switch($atividade){
		case 'C. ao leito':
			$naf = 1.27;
			break;
		case 'leve':
			$naf = 1.56;
			break;
		case 'moderada':
			$naf = 1.64;
			break;
		case 'intensa':
			$naf = 1.82;
			break;
		case 'idoso':
			$naf = 1.52;
			break;
		}
	}
	if($sexo == 'masculino'){
		switch($atividade){
			case 'C. ao leito':
				$naf = 1.27;
				break;
			case 'leve':
				$naf = 1.55;
				break;
			case 'moderada':
				$naf = 1.78;
				break;
			case 'intensa':
				$naf = 2.1;
				break;
			case 'idoso':
				$naf = 1.51;
				break;
		}
	}	
//pega a hora e multiplica o naf

	$naf = $naf*$horas;
	return $naf;
}
//calculo de vet
function vet($tmb,$naf){
	$vet = $tmb*$naf;
	return $vet;
}





