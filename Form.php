<?php
include "includes/navigation.php";
?> 

<?php include 'FormValidation.php';?>
<?php include 'login.php';?> 

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Form</title>
	
</head>
<body>

<!-- navbar-->




<!-- Forms-->
<div class="container">
    <div class="row">
	<div class="container col-sm-5 mt-5 bg-light">
	
	<h1 class="mb-3 text-info">Sign up</h1>
	
	<form action="Form.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="Name">Name</label>
			<input class="form-control is-invalid" dara-target="#passHelp" type="text" name="Name" placeholder="Name">
			<small id="passHelp" class="form-text text-danger"><?php echo $nameErr; ?> </small>
		</div>
		<div class="form-group">
			<label for="Email">Email</label>
			<input class="form-control" type="text" name="Email" placeholder="Enter Email">
		</div>
		<div class="form-group">
			<label for="Password">Password</label>
			<input class="form-control" type="password" name="Password" placeholder="******" value="<?php if(isset($password) )echo $password;?>">
			<small id="passHelp" class="form-text text-danger"><?php echo $passErr; ?></small>
		</div>
		<div class="form-group">
			<label for="Cpass">Confirm Password</label>
			<input class="form-control" type="password" name="Cpass" placeholder="******" value="<?php if(isset($cpass)) echo $cpass; ?>">
			<small id="cpassHelp" class="form-text text-danger"><?php echo $cpassErr; ?></small>
		</div>
		<div class="form-group">
			<label for="Gender">Gender</label>
			<select class="form-control" id="gender" name="gender">
				<option>Male</option>
				<option>Female</option>
			</select>
			
		</div>
		<fieldset class="form-group">
			<legend>What are you this service using for?</legend>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="Radio" value="Personal" checked>Personal
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="Radio" value="Professional" autocomplete="off">Professional
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="Radio" value="Study" autocomplete="off">Study
				</label>
			</div>
		</fieldset>
		<div class="form-group">
			<label for="Message">Tell us about yourself</label>
				<textarea class="form-control" id="Message" rows="4"></textarea>
		</div>
		<div class="form-group">
			<label for="file">Upload</label>
			<input class="form-control-file" type="file" id="file" name="image">
			<small id="fileHelp" class="form-text text-muted">Max 3 mb.</small>

		</div>
		<div class="form-check mb-3">
			<label class="form-check-label d-inline">
				<input type="checkbox" class="form-check-input" name="cbox" value="itsChecked">I have read the <h5 class="d-inline text-danger">terms & conditions</h5>.
				
			</label>
			<small id="chkHelp" class="form-text text-muted"><?php echo $checkErr; ?></small>
		</div>
			
			<input type="submit" name="submit" class="btn btn-primary mb-5" value="Confirm">
	</form>
	</div>


	
	    <div class="container col-sm-5 mt-5 well">
	    <legend class="mb-3">Sign In</legend>
	    <form action="#" method="post">
		
		<div class="form-group">
			<label for="Email">Email</label>
			<input class="form-control" type="text" name="Email" placeholder="Enter Email">
		</div>
		<div class="form-group">
			<label for="Password">Password</label>
			<input class="form-control" type="password" name="Password" placeholder="******" value="<?php if(isset($password) )echo $password;?>">
			<small id="passHelp" class="form-text text-danger"><?php echo $passErr; ?></small>
		</div>
    <input type="submit" name="login" class="btn btn-success mb-5" value="Log In">
     </form>
    </div>
    </div>
    </div>

	
<?php 
include "Includes/Footer.php";
?>
