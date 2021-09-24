<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="javascript.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<header>
    <nav class="navbar">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
        <div class="navbar-header">
          <img src="images/logo.png" class="logo animate__animated animate__backInLeft" alt="NOT FOUND">
          <h1 id="name" class="animate__animated animate__backInLeft">Made4You</h1>
        </div>
        </div>


        <div class="col-lg-4 menu">
            <ul>
              <li><a href="home.php" class="animate__animated animate__fadeIn">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <li><a href="description.php" class="animate__animated animate__fadeIn" >Services</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <li><a href="user.php" class="animate__animated animate__fadeIn">Users</a></li>
            </ul>
        </div>
        </div>
      </div>
      </div>
    </nav>
    </header>

<section>
<div class="container" style="margin-top: 50px;">
		<div class="row log">
			<div class="col-lg-6">
				<img src="images/cf.png" alt="NOT FOUND" width="500px" height="500px">
			</div>
			<div class="col-lg-6" >
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center><h2>Contact Form</h2></center>
						<h4 style="text-align: center;"><q>we would love to hear it from you on your query</q></h4>
					</div> 
				<div class="panel-body" >
						<form method="post" action="">
							<div class="form-group">
								<input type="text" id="FullName" name="FullName" class="form-control" placeholder="name" required="required">
							</div>
							<div class="form-group">
								<input type="text" id="PhoneNumber" name="PhoneNumber" class="form-control" placeholder="phone number" required="required" >
							</div>
              <div class="form-group">
								<input type="text" id="Email" name="Email" class="form-control" placeholder="email" required="required">
							</div>
              <div class="form-group">
								<input type="text" id="Message" name="Message" class="form-control" placeholder="write your message here...." required="required">
							</div>
              <div class="panel-footer">
							<div class="form-group">
								<button style="background-color:#337ab7; text-align:center; color:white; width:500px;" type="submit" name="submit" class="send" >SUBMIT</button>
							</div>
              </div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php
      if(isset($_POST['submit'])){
     	$FullName = $_POST['FullName'];
       $PhoneNumber = $_POST['PhoneNumber'];
       $Email = $_POST['Email'];
       $Message= $_POST['Message'];
       if(!empty($FullName) || !empty($PhoneNumber) || !empty($Email) || !empty($Message))
       {
         $con=mysqli_connect("localhost","root","","tie");
         if(mysqli_connect_error())
         {
           die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
         } else {
           $SELECT = "SELECT Email From contactus Where Email = ? Limit 1";
           $INSERT = "INSERT Into contactus (FullName, PhoneNumber, Email, Message) values(?, ?, ?, ?)";
   
           $stmt = $db->prepare($SELECT);
           $stmt->bind_param("s", $Email);
           $stmt->execute();
           $stmt->bind_result($Email);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
           if($rnum==0)
           {
             $stmt->close();
   
             $stmt = $db->prepare($INSERT);
             $stmt->bind_param("siss", $FullName, $PhoneNumber, $Email, $Message);
             $stmt->execute();
        ?>
        <script>
          alert("Thank You for Contacting");
        </script>
             <?php
           
           }
           else{
             echo "already exists";
           }
           $stmt->close();
           $db->close();
         }
       }
         else{
               echo "all fields requires";
               die();
         }
        }
     ?>  


<footer class="foo">
		<center>
		<p>Copyright @ Made4You. All Rights Reserved  |  Contact Us: +91 90000 00000</p>
		<a href="#" class="fab fa-facebook"></a>
		<a href="#" class="fab fa-twitter"></a>
		<a href="#" class="fab fa-google"></a>
		<a href="#" class="fab fa-instagram"></a>
		<a href="#" class="fab fa-yahoo"></a>
	</center></footer>
</body>
</html>