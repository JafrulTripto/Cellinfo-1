<?php include 'Includes/Veriables.php';  ?>
<?php

	if (isset($_POST["submit"])) {
        
        $name = $_POST['Name'];
	$password = $_POST['Password'];
	$email = $_POST['Email'];
	$cpass = $_POST['Cpass'];
	$gender = $_POST['gender'];
    $service = $_POST['Radio'];
    $image = $_FILES['image']['name'];
        $target= "Images/".basename($_FILES['image']['name']);
	//$checkbox= $_POST['cbox'];
	
		if (strlen($name)<=6) {
		    $nameErr="minimum 6 character";
        }
		  else if (preg_match('/[^a-zA-Z\d]/', $password) ||strlen($password)<=6) {
			     $passErr="Length must be 6 and should contain a character";
          }
		      else if ($password!= $cpass) {
			     $cpassErr="Password doesn't match";
			
              }
              else if(!isset($_POST['cbox'])){
            
			     $checkErr="Please check the checkbox";
		              
          }
                
        else{
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        include 'Database.php';
        }
        
	}



?>
