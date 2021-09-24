<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="javascript.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>MADE4YOU</title>
</head>
<body>
<header>
    <nav class="navbar">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
        <div class="navbar-header">
          <img src="images/logo.png" class="logo animate__animated animate__backInLeft" alt="NOT FOUND">
          <h1 id="name" class="animate__animated animate__backInLeft">Made4You</h1>
        </div>
        </div>


        <div class="col-lg-3 menu">
            <ul>
              <li class="animate__animated animate__fadeIn"><a href="description.php">Services</a></li>
            </ul>
        </div>
        </div>
      </div>
      </div>
    </nav>
    </header>

  <div class="row">
    <div class="col-lg-12">
    <p style="font-size:30px; font-weight:bold; padding:30px 30px 30px 30px;">M4Y  is a digital service provider that aims to provide software,
designing and marketing solutions to individuals and
businesses. At M4Y, it is believed that service and quality is the
key to success. Founded and Funded by Graphic designers
from Jahirathu Junction, M4Y has now set a new path towards
Digital Solutions.
</p>
    </div>
  </div>

  <div class="animate__animated animate__fadeInDownBig"><center>What We provide</center></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="jumbotron animate__animated animate__fadeInLeft">
          <center><i class="fas fa-code"></i></center><br>
          <center><h2>Development</h2></center>
          <p>Collaboration of best digital designs, front-end UI and CSS and
            back end programming minds in the region. We create websites that convert visitors into
            customers and a user experience.</p>
        </div>  
      </div>    
      <div class="row">
        <div class="col-md-6">
          <div class="jumbotron j1 animate__animated animate__fadeInRight">
            <center class="j1"><img src="images/consult.png" alt="NOT FOUND"></center>
            <center class="j1"><h2>Consultancy</h2></center>
            <p class="j1">We have industry-specific experts who offer professional advice, guidance, and actionable solutions to businesses experiencing issues they can't deal with in-house.</p>
          </div>
        </div>  
      </div>      
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-md-offset-2">
  <div class="container">
    <div class="jumbotron animate__animated animate__fadeInUp">
      <center><span class="glyphicon glyphicon-facetime-video"></span></center><br>
      <center><h2>Vedios</h2></center>
      <p> videos created with original designs, drawings, illustrations or computer-generated effects that have been made to move in an eye-catching way using any number of artistic styles.</p>
    </div>      
  </div>
</div>
</div>   
<div class="detail">
  <a href="description.php"><button type="button" class="btn btn-primary">WANT TO SEE MORE<br>Click Here.....</button></a>
</div><br><br>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-fd1c6d58-7d47-451b-9c39-373be31a6fb0"></div>
  <footer class="foo">
      <center>
      <p>Copyright @ Made4You. All Rights Reserved  |  Contact Us: +91 90000 00000</p>
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-google"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-yahoo"></a>
    </center>
  </footer>

  <script>
    $(document).ready(function()
    {
      $("li").mouseenter(function()
      {
        $("li").css("font-size", "40px");
      });
      $("li").mouseleave(function()
      {
        $("li").css("font-size", "30px");
      });
    });

  </script>
</body>
</html>