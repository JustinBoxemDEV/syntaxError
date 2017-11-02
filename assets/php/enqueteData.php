<?php
include 'functions.php';

$enquete = new Enquete;
$array = $enquete->getEnqueteResults();
//var_dump($array);
foreach($array as $dataResult => $value){
	foreach ($value as $key => $value2) {
		//var_dump($value2);
		switch ($key) {
		case 'name':
			echo "Naam: " . $value2;
			echo "<br>";
			echo "<br>";
		break;
		case 'opinion':
			echo "Mening: " . $value2;
			echo "<br>";
			echo "<br>";
		break;
	}
	}
}