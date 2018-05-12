<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file"  name="image" >
		<input type="submit" name="submit" class="btn btn-primary mb-5" value="Confirm">
	</form>
</body>
</html>


<?php
	if (isset($_POST["submit"])) {
		
		$check = getimagesize($_FILES["image"]["tmp_name"]);
        
        if($check!== false){
            $image = $_FILES["image"]["tmp_name"];
            $imgcontent = addslashes(file_get_contents($image));
            
            
            
            $con= mysqli_connect('localhost','root','','test');
            
            $dateTime = date("Y-m-d H:i:s");
            
            $query = "INSERT INTO upload(image,date) ";
            $query .= "VALUES ('$imgcontent','$dateTime')";
            
            $result = mysqli_query($con, $query);
        }
 	}
	?>

