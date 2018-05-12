<?php include "Includes/DB.php"; ?>

<?php


    $query = "INSERT INTO user(Name,Password,Email,Gender,Service,Image) ";
    $query .= "VALUES ('$name','$password','$email','$gender','$service','$image')";

    $result = mysqli_query($con, $query);

    if(!$result){
        die('Query Failed'.mysqli_error());
                }

        
?>