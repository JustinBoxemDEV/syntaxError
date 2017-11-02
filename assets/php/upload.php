<?php
	$db = mysqli_connect("server.sandhoofd.nl", "battle", "Battle2017!", "bots");
	$msg = "";

	if (isset($_POST['upload'])) {
		$target = "../images/".basename($_FILES['image']['name']);

		$name = mysqli_real_escape_string($db, $_POST['sponsorName']);
		$image = $_FILES['image']['name'];
		$link = mysqli_real_escape_string($db, $_POST['sponsorUrl']);


		$sql = "INSERT INTO sponsors (name, image, link) VALUES ('$name', '$image', '$link')";
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
	<title>Image Upload</title>
</head>
<body>
<div id="content">

	<form method="POST" action="upload.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="text" name="sponsorName" placeholder="Sponsor name"></text>
		</div>
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<input type="text" name="sponsorUrl" placeholder="Sponsor url"></text>
		</div>
		<div>
			<button type="submit" name="upload">Plaats sponsor</button>
		</div>
	</form>

</div>
</body>
</html>