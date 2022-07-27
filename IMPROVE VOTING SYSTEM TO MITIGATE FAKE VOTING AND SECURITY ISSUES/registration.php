<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
	<center>
		<?php
		include 'connection.php';

	    //$id = $_POST['id'];
		$name = $_POST['name'];
		$voterid = $_POST['voterid'];
        $constitutionid = $_POST['constitutionid'];
        $boothid = $_POST['boothid'];
        $uniqueid= rand(0,10000000);


		$sql = "INSERT INTO voterregister(name, voterid, constitutionid, boothid, uniqueid, status) values('$name','$voterid','$constitutionid','$boothid','$uniqueid',0)";
		
		if(mysqli_query($conn, $sql)){
			echo '<script>alert("Registration Successful..")</script>';

            echo "<p class='mycss'>Thank You for Registration!</p>";

		} else{
			echo '<script>alert("Already Registered User..")</script>';
			echo "<p class='mycss2'>Voter id Already Exist..</p>";

		}
		
		mysqli_close($conn);
		?>
		
	</center>
</body>

<style>
.mycss{
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
    margin-top: 100px;
    padding: 10px;
    }

</style>

</html>
