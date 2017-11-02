<?php
include 'functions.php';

$event = new Events;
$array = $event->getEventData();
$imageurl = " ";
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
		case 'image':
			$imageurl = $value2;
			echo "<img src='../images/".$imageurl." 'width='300px' 'height='300px'>";
			echo "<br>";
			echo "<br>";
		break;
		case 'description':
			echo "Beschrijving: " . $value2;
			echo "<br>";
			echo "<br>";
		break;
		case 'date_start':
			echo "Begindatum: " . $value2;
			echo "<br>";
			echo "<br>";
		break;
		case 'date_end':
			echo "Einddatum: " . $value2;
			echo "<br>";
			echo "<br>";
		break;
	}
	}
}