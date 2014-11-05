<?php
$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
	echo "<p>We've seen all kinds of weather this month.</p>" .$weather[0] . ' ' .$weather[2];
	echo "<p>At the beginning of the month, we had $weather[4] and $weather[6]</p>";
	echo "<p>Then came $weather[2] with a few $weather[3] and some more $weather[1]</p>";
	echo "<p>At least we didn't get any $weather[4] or $weather[5]</p>";
	
	
?>

<?
$format = "we've seen all kinds of weather this month.</br>
At the beginning of the month, we had %s and %s.<br/>
Then came %s with a few %s and some %s. <br/>
At least we didn't get any %s or %s.";
printf($format, $weather[0], $weather[1], $weather[2], $weather[3], $weather[4], $weather[5], $weather[6]);
?>

