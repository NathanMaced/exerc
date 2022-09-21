<?php 

$nome = "Maria";
$idade = 23;
$valor = 2;

	switch ($valor) {
			//masculino
			case 1 :
			break;

			//feminino
			case 2 :
			break;

			default:
			echo "Opção inválida";
			break;
	}

	if($idade <25 && $valor ==2){
		echo $nome. " ACEITA";
	}else{
		echo $nome. " NÃO ACEITA";
	}



?>