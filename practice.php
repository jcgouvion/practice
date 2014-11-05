<?php
    $a = 'jumped over';
    $b = ' lazy dog';
    $c = 'quick brown fox';
    $d = 'The';
	
	//echo $d. ' '  .$c. ' ' .$a. $b;



$table = 'pages';
$fields = 'id, title, content';
$page_id = 5;


//$query ='SELECT statement with the fields specified in $fields from the table specified in $table where the id is $page_5//
$query = "SELECT ".$fields.' '."FROM ".$table.'  '."WHERE id= ".$page_id;
echo $query;
?>