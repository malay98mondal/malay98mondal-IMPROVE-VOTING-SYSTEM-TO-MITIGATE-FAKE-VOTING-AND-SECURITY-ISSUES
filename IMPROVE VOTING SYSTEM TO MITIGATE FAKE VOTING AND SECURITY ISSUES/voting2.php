


<!DOCTYPE html>
<html lang="en">

<html>
<head>

    <title>Voting</title>
    <link rel="stylesheet" type="text/css" href="voting.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
 

 



<nav  style="height: 120px" >
           <div class="nav-wrapper orange accent-3">
            <img src="images/e-voting-logo.png" alt="" height="110" width="340" style="padding-left: 250px; padding-top: 10px;"; >

              <div class="brand-logo center"><h3 style="color: black">Election Commission Of India</h3></div>

           </div>
        </nav>
    
    <br>

<main>
</head>
<body>



	
  <div class="container">
  
 
  <table>
    <h1>
  	
        <thead>
          <tr>
              <th>Election Symbol</th>
              <th>Party</th>
              <th>Candidate Name</th>
              <th>Vote</th>
          </tr>
        </thead>

        <tbody>
       
                

   
          <tr>
          	<td><img src="images/bjp.png" alt=" "height="42" width="42"></td>
          	<td>Bharatiya Janata Party</td>
            <td id="cand1">Manaj Tripathi</td>
            <form action="voting2insert.php" method="post">
            
              
               <td> <button id="vote1" input type="submit" class="btn waves-effect-light" name="vote" value="B" />
               <input type="hidden" name="boothid" value="2" />
               vote</button></td>
               <!-- <input type="submit" value="Send confirmation" />
                <input type="hidden" name="button_pressed" value="1" /> -->
              
            </td>

          
          <tr>
            <td><img src="images/cong.png" alt=" "height="42" width="42"></td>
            <td>Indian National Congress</td>
            <td id="cand2">Swapan deshai</td>
            
            <td> <button id="vote2" input type="submit" class="btn waves-effect-light" name="vote" value="I" />
               <input type="hidden" name="boothid" value="2" />
               vote</button></td>
           

          <tr>
            <td><img src="images/rsc.png" alt=" "height="42" width="42"></td>
            <td>Nationalist Congress Party</td>
            <td id="cand3">Dhruv Shetty </td>
            
            <td> <button id="vote2" input type="submit" class="btn waves-effect-light" name="vote" value="N" />
               <input type="hidden" name="boothid" value="2" />
               vote</button></td>


          <tr>
            <td><img src="images/shiv.png" alt=" "height="42" width="42"></td>
             <td>Shiv Sena</td>
            <td id="cand4">Rudra Sen</td>
            
            <td> <button id="vote2" input type="submit" class="btn waves-effect-light" name="vote" value="S" />
               <input type="hidden" name="boothid" value="2" />
               vote</button></td>
               </tr>
              
</form>
          
          
          
                        
                        
      </h1>
    </table>
  </div>
  
  </main>
        </tbody>
      </body>
      
        </html>
