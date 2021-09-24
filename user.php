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
            
            </ul>
        </div>
        </div>
      </div>
      </div>
    </nav>
    </header>
    <body class="sectionuser">

      <nav class="nav main-nav myheader sticky" id="myheader1">
      
    </nav>
    <br><br><br><br>
<section >
    <!___________________search bar____________________________--->
    <div class="srch">
		<form class="navbar-form" method="post" name="user-form">
			
				<input class ="form-control" type="text" name="search" placeholder="Search User" required="">
				<button  type="submit" name="submit" class="btn btn-default">
				<span>Search</span>	
					
				</button>
			
			</form>
			<form class="navbar-form" method="post" name="form1">
			
				<input class ="form-control" type="text" name="ID" placeholder="Enter ID" required="">
				<button  type="submit" name="submit" class="btn btn-default">Delete	
					
				</button>
			<br>
			</form>
	</div>

        <h2 style="text-align:center; color:white;">LIST OF USERS</h2>
        <br>
       <div class="users"> <?php
        	if(isset($_POST['submit']))
            {
                $q=mysqli_query($db,"SELECT * from `contactus` where FullName like '%$_POST[search]%' ");
                if(mysqli_num_rows($q)==0)
                {
                    echo "Sorry! User not found. try searching again.";
                }
                else{

                    echo "<table border-color:1px solid black;width:100%'>";
                    echo "<tr >";
                    echo "<th>"; echo "ID"; echo "</th>";
                    echo "<th>"; echo "FullName"; echo "</th>";
                    echo "<th>"; echo "PhoneNumber"; echo "</th>";
                    echo "<th>"; echo "Email"; echo "</th>";
                    echo "<th>"; echo "Message"; echo "</th>";
                    echo "</tr>";
                    while($row=mysqli_fetch_assoc($q))
                    {
                        echo "<tr>";
                        echo "<td>"; echo $row['ID']; echo "</td>";
                        echo "<td>"; echo $row['FullName']; echo "</td>";
                        echo "<td>"; echo $row['PhoneNumber']; echo "</td>";
                        echo "<td>"; echo $row['Email']; echo "</td>";
                        echo "<td>"; echo $row['Message']; echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                }

            }
            /*if button is pressed*/
            else{
                 $res=mysqli_query($db,"SELECT * FROM `contactus`  ORDER BY `contactus`.`FullName` ASC;");
        echo "<table border-color:2px solid black;width:100%'>";
        echo "<tr style='background-color:#2e964ce6;'>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "FullName"; echo "</th>";
        echo "<th>"; echo "PhoneNumber"; echo "</th>";
        echo "<th>"; echo "Email"; echo "</th>";
        echo "<th>"; echo "Message"; echo "</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row['ID']; echo "</td>";
            echo "<td>"; echo $row['FullName']; echo "</td>";
            echo "<td>"; echo $row['PhoneNumber']; echo "</td>";
            echo "<td>"; echo $row['Email']; echo "</td>";
            echo "<td>"; echo $row['Message']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    if(isset($_POST['submit1']))
        {
            
                mysqli_query($db,"DELETE FROM `contactus` WHERE `ID`= '$_POST[ID]';");
                ?>
                   <script type="text/javascript">
                    alert("Delete Successful.");
                   </script>
                <?php
            }
       
  ?>
   </div>
        </section><br><br><br><br><br><br>
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