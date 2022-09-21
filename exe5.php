<?php 

	$sexo = 2;
	$altura = 190;
	$alturaMa = 0;
	$alturaMe = 100;
	$altura2=$altura;
	$media = 0;
	$total = 0;
	$cont = 0;

	for($i=0; $i<5; $i++){
		switch($sexo){
			case 1:
				echo "Você escolheu Masculino <br>";
			break;
		
			case 2:
				echo "Você escolheu Feminino <br>";
				$total++;
				$cont = $altura2 + $cont;
				$media = $cont/$total;
			break;
			
			default:
				echo "Opcão inválida <br>";
			break;
		}
		if($sexo == 1){
			if($altura2>$alturaMa){
				$alturaMa=$altura2;
			}
			if($altura2<$alturaMe){
				$alturaMe=$altura2;
			}
		
		}else{
			if($altura2>$alturaMa){
				$alturaMa=$altura2;
			}
			if($altura2<$alturaMe){
				$alturaMe=$altura2;
			}
		}
	}
	echo "Altura maior".$alturaMa."<br>";
	echo "Altura menor".$alturaMe."<br>";
	echo "A média de altura das mulheres: ".$media;
	echo "O homem mais velho :";
	echo "A mulher mais nova: ";
 ?>