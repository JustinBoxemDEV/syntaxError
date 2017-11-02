<?php
	$db = mysqli_connect("server.sandhoofd.nl", "battle", "Battle2017!", "bots");
	$msg = "";

	if (isset($_POST['addProject'])) {
		$target = "../images/".basename($_FILES['image']['name']);

		$project = mysqli_real_escape_string($db, $_POST['projectName']);
		$image = $_FILES['image']['name'];
		$short = mysqli_real_escape_string($db, $_POST['projectDesc']);


		$sql = "INSERT INTO portfolio (project, image, short) VALUES ('$project', '$image', '$short')";
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
	<title>Portfolio Add</title>
</head>
<body>
<div id="content">

	<form method="POST" action="addPortfolio.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="text" name="projectName" placeholder="projectName"></text>
		</div>
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<textarea name="projectDesc" rows="10" cols="70"></textarea>
		</div>
		<div>
			<button type="submit" name="addProject">Plaats portfolio project</button>
		</div>
	</form>

</div>
</body>
</html>