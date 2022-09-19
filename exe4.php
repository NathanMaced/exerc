<?php 

$a = 23;
$b = 10;
$c = 50;

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
	}


?>