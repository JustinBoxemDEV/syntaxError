<?php
include 'functions.php';
$json = file_get_contents("https://graph.facebook.com/botsbattle2017/feed?access_token=EAACEdEose0cBAB83fl6H43rYIH7RcZAmd72LfhxLhHLq4nl4z1QgNcswinjlSkUpgmUV554luHMHozXlww9BKNhtt4OjZCu1E2ZCZBmu1YI3ExDSJYLzIrOXjfxhrFeIVkUftLNRTSACfPUhuE8YluJ8EwyKZCtRYOU5R4fxp5UZBYi2wUcEbb8E3TR5CFVZCoZD");
$jsonresult = json_decode($json, true);


foreach ($jsonresult as $key => $value) {
	foreach ($value as $key2 => $array) {
		if(is_array($array)) {
			foreach ($array as $key3 => $value3) {
		 	# ... 
			if($key3 == "message") {
	 			echo $value3 . "<br>";
	 		 	}
			}
		}

		# code...
	}
	# code...
}


