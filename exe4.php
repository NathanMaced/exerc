<?php 

$a = 1;
$b = 2;
$c = 3;

	if($a>$b){
		if($a>$c){
			echo $a."<br>";
			if($b>$c){
				echo $b."<br>";
				echo $c."<br>"; 
			}else{
				echo $c."<br>";
				echo $b."<br>";
			}
		}else{
			echo $c."<br>";
			echo $a."<br>";
			echo $b."<br>";
		}
	}else{
		if($b > $c){
			echo $b."<br>";
			if($c>$a){
				echo $c."<br>";
				echo $a."<br>";
			}
		}
	}


?>