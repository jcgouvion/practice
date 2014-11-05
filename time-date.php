<!DOCTYPE html>
<html>
	<body>
		<?php
    $date = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	
	$hours = date("h");
	$minutes = date("m");
	$seconds = date("s");
	$day = date("N");
	
    	echo date("l g : i : s");
?>
	</body>
</html>



