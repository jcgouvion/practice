<?php
    $d = $_GET["input"];
	if($d == "Monday"){
		echo "Today is monday. The worse day of the week";
	} elseif($d == "Tuesday"){
		echo "Today is Tuesday";
	} elseif($d == "Wednesday"){
		echo "Today is hump day";
		} elseif($d == "Thursday"){
		echo "Today is thirsty thursday";
		} elseif ($d == "Friday"){
		echo "Today is friday. The end of the work week!";
	} 
	else{
	echo "You did not enter a day of the week";
	}
?>