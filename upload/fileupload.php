<?php     
	if (isset($_POST['submit'])) {
		$name = $_FILES['image']['name'];  // yo image ra name FILES le line syntax matra ho
		$filetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file("$filetemp", "upload-images/".$name);
		echo "you have sucessfully uploaded the image";
		echo $_FILES['image']['name'];
	}

?>

<form method = "POST" enctype="multipart/form-data">
	<input type = "file" name = "image">
	<input type = "submit" name = "submit">
</form>


<!-- file choose garda kheri file ko name k xa files vanekoo array ho --->