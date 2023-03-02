<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="style2.css">


      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="style1.css">

    
  </head>

  <body>
  <header>
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
              <a class="navbar-brand js-scroll-trigger" href="index.php" >
                  <img src="assets/images/logo.png" alt="logo" width="150">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link js-scroll-trigger active" href="index.php">HOME</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="services.html"> ABOUT US</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="contact.html">CONTACT</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </header>


<div class="register">
    <div class="container">
        <div class="register-right">
            <h3 class="register-heading">Patient Login</h3>
            <form class="form-group" method="POST" action="func.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email-ID: </label>
                            <input type="text" name="email" class="form-control" placeholder="enter email ID" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="password" class="form-control" name="password2" placeholder="enter password" required/>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <input type="submit" id="inputbtn" name="patsub" value="Login" class="btnRegister">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>