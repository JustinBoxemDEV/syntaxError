<?php
include 'functions.php';

$product = new Products;
$array = $product->getProductsDB();
$image = " ";
//var_dump($array);
foreach($array as $dataResult => $value){
	foreach ($value as $key => $value2) {
		//var_dump($value2);
		switch ($key) {
		case 'product':
			echo "Product: " . $value2;
			// echo "<br>";
			// echo "<br>";
		break;
		case 'image':
			$image = $value2;
			echo "<img src='../images/".$image." 'width='200px' 'height='200px'><br>";
			// echo "<br>";
			// echo "<br>";
		break;
	}

	}
}