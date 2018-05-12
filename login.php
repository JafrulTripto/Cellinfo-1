<?php

include 'includes/DB.php';



if(isset($_POST["login"])){
    
    
    $email = $_POST["Email"];
    $pass = $_POST["Password"];
    
    $query = "SELECT Email,Password,Image FROM user WHERE ( ( Email = '$email' ) AND ( Password = '$pass' ) )"; 
    
    $sql = mysqli_query($con, $query);
    
    if(!$sql){
        echo "query failed";
    }
    $new_email= $new_pass= $image = " ";
    while($row = mysqli_fetch_assoc($sql)){
        print_r($row);
        
        $new_email = $row['Email'];
        $new_pass = $row['Password'];
        $image = $row['Image'];
        
    }
    
    if(strcmp($new_email,$email)!==0 && strcmp($new_pass, $pass)!==0){

            echo "login failed";
        }
    else {
        $_SESSION['Email']=$image;
    }
   echo "<img src='Images/".$_SESSION['Email']."'>";
}

?>