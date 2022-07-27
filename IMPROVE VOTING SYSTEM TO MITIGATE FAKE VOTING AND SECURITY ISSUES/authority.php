<?php 


include 'connection.php';

    
    $name=$_REQUEST['name'];
    $password=$_REQUEST['password'];
    
    $sql="SELECT * FROM authority WHERE name='$name' AND password='$password' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        //echo " You Have Successfully Logged in";
        header('location:authoritydisplay.php');
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
?>