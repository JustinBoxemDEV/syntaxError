<?php
	$db = mysqli_connect("server.sandhoofd.nl", "battle", "Battle2017!", "bots");
	$msg = "";

	if (isset($_POST['addProduct'])) {
		$target = "../images/".basename($_FILES['image']['name']);

		$product = mysqli_real_escape_string($db, $_POST['productName']);
		$image = $_FILES['image']['name'];

		$sql = "INSERT INTO campaign (product, image) VALUES ('$product', '$image')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo $msg;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Campagne Product Add</title>
</head>
<body>
<div id="content">

	<form method="POST" action="addProducts.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="text" name="productName" placeholder="productName"></text>
		</div>
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<button type="submit" name="addProduct">Plaats campagne product</button>
		</div>
	</form>

</div>
</body>
</html>