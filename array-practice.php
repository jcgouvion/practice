<?php
    $cars = array(
		array("volvo", 22, 18, 5),
		array("Benz", 8, 5, 12),
		array("Honda", 22, 20, 45),
		array("ford", 55, 10, 89),
		);
		echo $cars [0] [0].":  In stock: ".$cars [0] [1].", sold:  ".$cars[0] [2].", stolen in the last week: ".$cars[0] [3]." <br>";
		echo $cars [3] [0].":  In stock: ".$cars [3] [1].", sold: ".$cars [3] [2]." <br>";
?>

<?php
	$colors = array(
	"Red", "Blue", "Orange", "Pink", "Yellow", "Green");
	foreach($colors as $value) {
		echo "$value <br>";
	}
	
?>

<?php
for($i=0; $i<=30; $i++){
	echo "The number is" .$i. "<br>";
}


?>

