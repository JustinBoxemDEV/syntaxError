<?php
	$db = mysqli_connect("server.sandhoofd.nl", "battle", "Battle2017!", "bots");
	$msg = "";

	if (isset($_POST['addEvent'])) {
		$target = "../images/".basename($_FILES['image']['name']);

		$name = mysqli_real_escape_string($db, $_POST['name']);
		$image = $_FILES['image']['name'];
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$date_start = mysqli_real_escape_string($db, $_POST['date_start']);
		$date_end = mysqli_real_escape_string($db, $_POST['date_end']);


		$sql = "INSERT INTO events (name, image, description, date_start, date_end) VALUES ('$name', '$image', '$description', '$date_start', '$date_end')";
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
	<title>Event adding</title>
</head>
<body>
<div id="content">

	<form method="POST" action="addEvent.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="text" name="name" placeholder="name"></text>
		</div>
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<textarea name="description" rows="10" cols="70"></textarea>
		</div>
		<div>
			<input type="datetime-local" name="date_start">
		</div>
		<div>
			<input type="datetime-local" name="date_end">
		</div>
		<div>
			<button type="submit" name="addEvent">Plaats portfolio project</button>
		</div>
	</form>

</div>
</body>
</html>