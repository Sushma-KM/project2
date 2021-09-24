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
  <title>Description</title>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
        <div class="navbar-header">
          <img src="images/logo.png" class="logo animate__animated animate__backInLeft" alt="NOT FOUND">
          <h1 id="name" class="animate__animated animate__backInLeft">Made4You</h1>
        </div>
        </div>


        <div class="col-lg-8 menu">
            <ul>
              <li><a href="home.php" class="animate__animated animate__fadeIn">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li><a href="#section1" class="animate__animated animate__fadeIn">Development</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li><a href="#section3" class="animate__animated animate__fadeIn">Consultancy</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li><a href="#section2" class="animate__animated animate__fadeIn">Vedios</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li><a href="contact.php" class="animate__animated animate__fadeIn">Contact Us</a></li>
            </ul>
        </div>
        </div>
      </div>
      </div>
    </nav>
    </header>
   <a><section id="section1"></a>
    <div class="row">
      <div class="col-lg-12">
        <div class="ss">
          <div class="outer">
            <div class="des">
              <center><h1>DEVELOPMENT</h1><prev>Grow Your Business
                with our unique service.
              </prev></center>

            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="dev_para">Project development is the process and the facility of planning, organizing, coordinating, and controlling the resources to accomplish specific goals. The process takes a transportation improvement from concept through construction. It has six phases; initiation, definition, design, development,implementation  and delivery process begins with planning studies and ends with a constructed project.</p>
  </section>

  <a><section id="section3"></a>
    <div class="row">
        <div class="col-lg-7 ">
            <img src="images/consultancy.jpg" class="consult_pic" alt="NOT FOUND" width="800px">
        </div>
      <div class="col-lg-5 consult_para">
         <p>A project management consultant brings specialized knowledge and skills that empower businesses to make informed decisions throughout the lifecycle of a project, from the planning stage to completion.Project management consultants are not only responsible for implementing project management plans for the successful execution of projects, but they are also accountable for delivering projects on time, within the budget and resources allocated.</p>
      </div>
    </div>
  </section> 
  


  
   <a><section id="section2"></a>
    <div class="row">
        <div class="col-lg-7 vedio">
            <video autoplay loop muted width="800px">
                <source src="images/vedio.mp4" type="video/mp4">
            </video>
        </div>
      <div class="col-lg-5 vedio_para">
         <p>Create visually compelling progress reports that inform your clients with Video The responsive design means clients can view  video across any device, regardless of size or operating system with ease.
          How you're distributing your video content is important, so don't miss it out in your brief. The production of your video will change dramatically depending on whether it's to be viewed on website.The entire production and planning process of video content depends on your ultimate goals, so make sure you're confident about what you want to achieve.</p>
      </div>
    </div>
  </section> 
 

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-fd1c6d58-7d47-451b-9c39-373be31a6fb0"></div>
  
 

 <div class="row">
      <div class="col-lg-12">
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
      </div>
  </div>
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