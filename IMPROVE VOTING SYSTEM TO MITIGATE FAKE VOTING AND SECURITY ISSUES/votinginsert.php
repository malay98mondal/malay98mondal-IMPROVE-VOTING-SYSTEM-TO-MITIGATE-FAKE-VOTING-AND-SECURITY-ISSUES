<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Vote Pannel</title>
  <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <a href="index.php"><button class="btn btn-sm btn-outline-secondary" type="button">HOME</button></a><br><br><br>
</head>
<body>

<?php
              session_start();
              include 'connection.php';
                
                
              
                $vote = $_POST['vote'];
                $boothid=$_POST['boothid'];
                $voterid= $_SESSION['voterid'];


                $sql = "INSERT INTO booth1insert(vote,boothid) values('$vote','$boothid')";

                if(mysqli_query($conn,$sql))
                  echo " <p class='mycss'>Thank You for voting! <br> Now you are a good citizen :)</p>";

                else
                  echo"<p class='mycss2'>something is wrong..</p>";


                $sql = "UPDATE voterregister SET status='1' where voterid= '$voterid'";



                if(mysqli_query($conn,$sql))
                  echo '<script>alert("Status Updated..")</script>';

                else
                  echo '<script>alert("Status Not Updated..")</script>';  
                            
                
              ?>

</body>

<style>
.mycss{
  text-align: center;
  font-size: 40px;
  color: green;
    border:1px solid #000;
    background: #ccc;
    margin-top: 200px;
    padding: 10px;
}

.mycss2{
  font-size: 40px;
  color: darkred;
    border:1px solid #000;
    background: #ccc;
    margin-top: 200px;
    padding: 10px;
}</style>
</html> 