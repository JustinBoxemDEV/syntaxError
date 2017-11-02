<?php
include 'functions.php';

$sponsor = new Sponsor;
$array = $sponsor->getDataFromDB();
$imageurl = " ";
$link = "";
//var_dump($array);
foreach($array as $dataResult => $value){
	foreach ($value as $key => $value2) {
		//var_dump($value2);
		switch ($key) {
		case 'image':
			$imageurl = $value2;
			// echo "<img src='../images/".$value2."'>";
			// echo "<br>";
			// echo "<br>";
		break;
		case 'link':
			$link = $value2;
			// echo "link: " . $value2;
			// echo "<br>";
			// echo "<br>";
		break;
	}

	}
	echo "<a href='".$link."'><img src='../images/".$imageurl." 'width='200px' 'height='200px'></a><br>";
}