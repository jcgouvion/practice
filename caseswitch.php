<?php
$today = $_GET("D");
switch($today) {
	case "Monday":
		echo "Today is Monday. The worst day of the week";
		break;
	case "Tuesday":
		echo "Today is Tuesday. Taco Tuesday";
		break;
	case "Wednesday":
		echo "Today is hump day";
		break;
	case "Thursday":
		echo "Today is thirsty Thursday";
		break;
	case "Friday":
		echo "Today is Friday. The end of the work week";
		break;
	}
?>