<!DOCTYPE html>
 <html>

   <head>
      <title>VOTE RESULTS</title>
   </head> 


    <style>

      table, th, td {
      border:1px solid black;
      }
    </style>


<body>

           <?php

         include 'connection.php';

         $bjp= "SELECT count(vote) as 'bjp' from booth1insert where vote = 'B'";
         $res1=mysqli_query($conn, $bjp);
         $data1=mysqli_fetch_array($res1);

         $inc= "SELECT count(vote) as 'inc' from booth1insert where vote = 'I'";
         $res2=mysqli_query($conn, $inc);
         $data2=mysqli_fetch_array($res2);

         $ncp= "SELECT count(vote) as 'ncp' from booth1insert where vote = 'N'";
         $res3=mysqli_query($conn, $ncp);
         $data3=mysqli_fetch_array($res3);

         $shivsena= "SELECT count(vote) as 'shivsena' from booth1insert where vote = 'S'";
         $res4=mysqli_query($conn, $shivsena);
         $data4=mysqli_fetch_array($res4);
        


         ?>

   <h2>BOOTH 1</h2>

       <table style="width:100%">
         <tr>
           <th>Bharatiya Janata Party</th>
           <th>Indian National Congress</th>
           <th>Nationalist Congress Party</th>
           <th>Shiv Sena</th>
         </tr>

         <tr>
           <th><?php echo $data1['bjp']?></th>
           <th><?php echo $data2['inc']?></th>
           <th><?php echo $data3['ncp']?></th>
           <th><?php echo $data4['shivsena']?></th>
           
         </tr>


       </table>

        <?php

         include 'connection.php';

         $bjp= "SELECT count(vote) as 'bjp' from booth2insert where vote = 'B'";
         $res1=mysqli_query($conn, $bjp);
         $data1=mysqli_fetch_array($res1);

         $inc= "SELECT count(vote) as 'inc' from booth2insert where vote = 'I'";
         $res2=mysqli_query($conn, $inc);
         $data2=mysqli_fetch_array($res2);

         $ncp= "SELECT count(vote) as 'ncp' from booth2insert where vote = 'N'";
         $res3=mysqli_query($conn, $ncp);
         $data3=mysqli_fetch_array($res3);

         $shivsena= "SELECT count(vote) as 'shivsena' from booth2insert where vote = 'S'";
         $res4=mysqli_query($conn, $shivsena);
         $data4=mysqli_fetch_array($res4);
        


         ?>

   <h2>BOOTH 2</h2>

       <table style="width:100%">
         <tr>
           <th>Bharatiya Janata Party</th>
           <th>Indian National Congress</th>
           <th>Nationalist Congress Party</th>
           <th>Shiv Sena</th>
         </tr>

         <tr>
           <th><?php echo $data1['bjp']?></th>
           <th><?php echo $data2['inc']?></th>
           <th><?php echo $data3['ncp']?></th>
           <th><?php echo $data4['shivsena']?></th>
           
         </tr>
       </table>

</body>
</html>

