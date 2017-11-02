<?php
	$db = mysqli_connect("server.sandhoofd.nl", "battle", "Battle2017!", "bots");
	$msg = "";

	if (isset($_POST['addOpinion'])) {
		
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$opinion = mysqli_real_escape_string($db, $_POST['opinion']);


		$sql = "INSERT INTO enquete (name, opinion) VALUES ('$name', '$opinion')";
		

		if (mysqli_query($db, $sql)) {
			$msg = "Opinion added successfully";
		}else{
			$msg = "Failed to add Opinion";
		}
		echo $msg;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Opinion Add</title>
</head>
<body>
<div id="content">

	<form method="POST" action="addEnqueteResponse.php">
		<div>
			<input type="text" name="name" placeholder="Name"></text>
		</div>
		<div>
			<input type="text" name="opinion" placeholder="Reaction"></text>
		</div>
		<div>
			<button type="submit" name="addOpinion">Plaats mening</button>
		</div>
	</form>

</div>
</body>
</html>