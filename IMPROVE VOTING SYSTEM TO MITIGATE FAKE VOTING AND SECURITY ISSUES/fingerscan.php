
<!DOCTYPE html>
<html>
<head>

    <title>Finger Scan</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>


    <div>
      <img src="images/Fingerprint.jpg" alt="" height="260" width="227" style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px"; >
    </div>
    
    <div>
        <div><h3 style="color: #1186e7; text-align: center;">Scan Your Finger </h3><br></div>
    </div>  

    <div>
    <form action="boothselect.php" method="post">
                            

            <input type="uniqueid" name="uniqueid"required style="border-radius: 6px; border-width: 1px; border-color: #1186e7; margin-left:41%;">                        
                        
            <button type="submit" class="button" style=" font-weight: bold;">Submit</button>                    
                        
    </form>
    </div>


</body>  

<style>
    
.button {
  background-color: white; 
  color: #1186e7; 
  border: 2px solid #1186e7;
  border-radius: 7px;
}

.button:hover {
  background-color: #1186e7;
  color: white;
}
</style>  
</html>

  

