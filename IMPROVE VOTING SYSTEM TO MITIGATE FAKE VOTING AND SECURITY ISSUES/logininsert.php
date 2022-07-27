<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>booth2</title>
  <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
</head>

<style>
    
    .mycss2{
          font-size: 40px;
         color: darkred;
    border:1px solid #000;
    background: #ccc;
    margin-top: 100px;
    padding: 10px;
    }
</style>

<body>

<?php 


include 'connection.php';
session_start();

    
    $name=$_REQUEST['name'];
    $voterid=$_REQUEST['voterid'];
    $_SESSION['voterid']= $voterid;
    
    
    $sql="SELECT * FROM voterregister WHERE name='$name' AND voterid='$voterid' AND status= '0'";
    
   
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo "<br>"." You Have Successfully Logged in";
        header('location:fingerscan.php');
        exit();
    }
    else{
        echo "<p class='mycss2'> You Have Entered Incorrect Password</p>";
        echo "<p class='mycss2'>OR You have already gave your vote</P>" ;
        exit();
    }

    
        
?>

</body>



</html>  
    


