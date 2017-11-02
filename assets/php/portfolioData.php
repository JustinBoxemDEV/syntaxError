<?php
include 'functions.php';

$portfolio = new Portfolio;
$array = $portfolio->getPortfolioData();
$imageurl = " ";
//var_dump($array);
foreach($array as $dataResult => $value){
	foreach ($value as $key => $value2) {
		//var_dump($value2);
		switch ($key) {
		case 'project':
			echo "Project: " . $value2;
			echo "<br>";
			echo "<br>";
		break;
		case 'image':
			$imageurl = $value2;
			echo "<img src='../images/".$imageurl." 'width='300px' 'height='300px'>";
			//echo "<img src='../images/".$value2."'>";
			echo "<br>";
			echo "<br>";
		break;
		case 'short':
			echo "Beschrijving: " . $value2;
		break;
	}
	}
}