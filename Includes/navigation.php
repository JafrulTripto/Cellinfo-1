 <?php
include "includes/Header.php";
?>
       <nav class="navbar navbar-expand-sm navbar-light bg-white mb-5 border border-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="Home1.php">Cellinfo</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-secondary">
                        <a class="dropdown-item" href="#">Service 1</a>
                        <a class="dropdown-item" href="#">Service 2</a>
                        <a class="dropdown-item" href="#">Service 3</a>
                        <a class="dropdown-item" href="#">Service 4</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                
            </ul>
           
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item dropdown"><?php
                    session_start();
                    if(isset($_SESSION['Email'])){
                        
                        //echo '<a class="nav-link" href="Form.php">'.$_SESSION['Email']. '</a>'; 
                        echo '
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">'.'<img id="images" src="Images/'.$_SESSION["Email"].'"></a>
                    <div class="dropdown-menu bg-white">
                        <a class="dropdown-item" href="post.php">Create post</a>
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="logout.php">Log out</a>
                        
                    </div>'
                            ;
                
                     }  
                        else{
                            
                            
                            echo '<a class="nav-link" href="Form.php">Sign In</a>';
                        }
                    
                        ?>
                </li>
            </ul>
                
            <form class="form-inline my-2">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                <button class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
    </nav>
