
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <nav class="navbar navbar-light bg-light">
  <form class="form-inline">

    <a href="result.php" target="_blank"><button class="btn btn-sm btn-outline-secondary" type="button">Result</button></a>
    <h4 style="color:blue;margin-left: 650px;;">Authority Login</h4>
  </form>
  <div class="login-container">
    <form action="authority.php" method="POST">
      <input type="text"  placeholder="Username" name="name"required style="border-radius: 6px; border-width: 1px; border-color: #cccccc;">
      <input type="password" placeholder="Password" name="password"required style="border-radius: 6px; border-width: 1px; border-color: #cccccc;">
      <button type="submit" class="btn btn-sm btn-outline-secondary">Login</button>
      
    </form>
  </div>
</nav>
    </head>
    <body>
        <div class="container">
            <div class="Login-box">
            <div class="row">
                <div class="col-md-6">
                    <h2>Voter Login</h2>
                    <form action="logininsert.php" method="post">
                        <div class="form group">
                            <label>Voter Name</label>
                            <input type="text" name="name" class="form-control" required>

                        </div>
                        <div class="form group">
                            <label>Voter ID</label>
                            <input type="voterid" name="voterid" class="form-control" required>

                        </div>
                        
                        
                        
                       <br><button type="submit" class="btn btn-sm btn-outline-secondary">Login</button>
                       
                        

                    </form>

                </div>
                <div class="col-md-6">
                    <h2>Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form group">
                            <label>Voter Name</label>
                            <input type="text" name="name" class="form-control" required>

                        </div>
                        <div class="form group">
                            <label>Voter ID</label>
                            <input type="voterid" name="voterid" class="form-control" required>

                        </div>
                        <div class="form group">
                            <label>Constitution ID</label>
                            <input type="constitutionid" name="constitutionid" class="form-control" required>

                        </div>
                        <div class="form group">
                            <label>Booth ID</label>
                            <input type="boothid" name="boothid" class="form-control" required>

                        </div>
                        <br><button type="submit" class="btn btn-sm btn-outline-secondary">Register</button>
                        

                    </form>

                </div>

            </div>
            </div>

        </div>
    </body>
</html>

