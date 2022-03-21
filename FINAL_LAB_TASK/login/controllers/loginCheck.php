<?php
if(isset($_REQUEST['mLogin'])){

    include ('../models/database.php');
		
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username != null && $password != null){
        
       
    $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
     $result = mysqli_query($con,$sql);
     
     if(mysqli_num_rows($result))
    {
        header('location: ../views/home.php');
    }
    else {
        echo "not ok";

    }
            // setcookie('m_status', 'true', time()+4600, '/');
            //header('location: ../m_views/m_Home.php');
        
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}

?>