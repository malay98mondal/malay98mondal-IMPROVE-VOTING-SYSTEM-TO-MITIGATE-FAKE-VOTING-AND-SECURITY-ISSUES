<!DOCTYPE html>
<html>
<head>
  <title>Select Booth</title>
</head>
<body>

  <center>
    <?php
    session_start();
    include 'connection.php';

    $scanid = $_POST['uniqueid'];
    $id= $_SESSION['voterid'];

    $ret=mysqli_query($conn,"SELECT * from voterregister where voterid='$id'");
    $result=mysqli_fetch_array($ret); 
    $msg=$result['uniqueid'];


    if ($msg == $scanid) {
      header('location:boothselect2.php');
        exit();
    }

    else
      echo '<script>alert("Your Fingerprint does not match..")</script>';
      echo "<p class='mycss2'>Please Try Again..</p>";
            
       
    ?>
    
  </center>

    
</body>

<style>
  .text{

    font-size: 30px;
    color: yellowgreen;

  }

    .mycss2{
          font-size: 40px;
         color: darkred;
    border:1px solid #000;
    background: #ccc;
    margin-top: 100px;
    padding: 10px;
    }
</style>
</html> 
