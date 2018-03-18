<?php
	session_start();
	$con = mysqli_connect("localhost","root","","warehouse");
	if(isset($_REQUEST['submit']))
	{
		$shopname = $_REQUEST['shopname'];
		$ownername = $_REQUEST['ownername'];
		$contact = $_REQUEST['contact'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$block = $_REQUEST['block'];
		$street = $_REQUEST['street'];
		$area = $_REQUEST['area'];
		$city = $_REQUEST['city'];
		$district = $_REQUEST['district'];
		$state = $_REQUEST['state'];
		$pin = $_REQUEST['pin'];
		$qry = "INSERT INTO shopkeeper(shopname,sownername, scontact, semail, spassword, scity, sdistrict, sstate, sstreet, spincode, sblock, sarea) VALUES ('$shopname','$ownername','$contact','$email','$password','$city','$district','$state','$street','$pin','$block','$area')";
		$rs = mysqli_query($con,$qry);
		$_SESSION['ownername'] = $ownername;
		$_SESSION['email'] = $email;
		header("location:index1.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopkeeper Registeration</title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/libs/animate.css">
  <link rel="stylesheet" href="css/site.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    .banner {
 
    height: 250px;
    min-height: 0px;

  }
  .btn-default {
    color: #f5f5f5;
    background-color: #191818;
    border-color: #ccc;
    width: 100%;
    height: 50px;
}
  .text-border {
    border: 0px solid rgb(15,128,14);
    margin-top: 80px;
    box-shadow: 0px 0px 30px #323030;
}

.btn.btn-default:hover {
	background-color: #191818;
    letter-spacing: 7px;
    transition: all 0.3s ease-in;
    font-weight: bold;
    color: white;
}
  .bg-color {

    min-height: 0;
    height: 250px;
}

    /*.wow:first-child {
      visibility: hidden;
    }*/
    .section--blue {
  background-color: #ffffff;
}
.section--purple {
  background-color: #ffffff;
}

.panel
{
	padding: 40px;
}

		.services-anim
		{
			animation-duration: 3s;
		}
    .navbar-fixed-top.scrolled {
        background-color: black !important;
        transition: background-color 200ms linear;
      }
      .navbar-default .navbar-brand {
        color: #0f800e;
    }
    .btn-trial a {
    background-color: #0f800e;
  }
     
      .text-border {
 
      width: 55%;
      margin-left: 22.5%;
      }
      .navbar-fixed-top.scrolled .nav-link {
        color:#555;
      }
      .navbar-default .navbar-nav > li > a {
          color:#f4f4f4;
         
      }
    .navbar-default {
          background-color: rgba(248, 248, 248, 0);
          border-color: rgba(231, 231, 231, 0);
          
      }
	  .btn-personal
	  {
	  	width: 100%;
		background: #000000;
	  }
	  h3
	  {
	  	margin-top: 10px;
		margin-bottom: 10px;
		border-bottom: 1px solid black;
	  }
	</style>
    <script type="text/javascript">
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
  </script>
  </head>
  <body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">IndianMart</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Features</a></li>
          <li><a href="#organisations">Organisations</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li>
          <li class="btn-trial"><a href="#footer">Free Trail</a></li>
        </ul>
        </div>
      </div>
    </div>
   
  
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
           
              <h1 style="text-align: center; margin-bottom: -30px;font-size: 50px;letter-spacing: 3px;    margin-top: 10%;color: #f1ebcf;">Shopkeeper Registration</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="container">

  <div class="text-border">
  <div class="panel panel-default">
    <div class="panel-heading" style="font-size:24px;text-align:center;">Register Here!!</div>
    <div class="panel-body">
      
      <form action="shopkeeperRegistration.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="shopname">Shop Name</label>
            <input type="text" class="form-control" id="shopname" name="shopname"/>
          </div>
		  <div class="form-group">
            <label for="ownername">Owner Name</label>
            <input type="text" class="form-control" id="ownername" name="ownername"/>
          </div>
          <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact"/>
          </div>
          <div class="form-group">
            <label for="email">Email Id</label>
            <input type="email" class="form-control" id="email" name="email"/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"/>
          </div>

          <div class="form-group">
            <label for="block">Block number</label>
            <input type="text" class="form-control" id="block" name="block"/>
          </div>
		  <div class="form-group">
            <label for="street">Street Name</label>
            <input type="text" class="form-control" id="street" name="street"/>
          </div>
		  <div class="form-group">
            <label for="area">Area</label>
            <input type="text" class="form-control" id="area" name="area"/>
          </div>
		  <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city"/>
          </div>
		  <div class="form-group">
            <label for="district">District</label>
            <input type="text" class="form-control" id="district" name="district"/>
          </div>
		  <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state"/>
          </div>
		  <div class="form-group">
            <label for="pin">Pin Code</label>
            <input type="text" class="form-control" id="pin" name="pin"/>
          </div>
		  
          <input type="submit" class="btn btn-default" name="submit" value="Submit"/>
</form>
    </div>
  </div>
</div>
</div>

   <footer class="footer">
    <div class="container">
      <div align="center">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt="">logo</a></div>
        <span class="copyright">Copyright By Urvashi & Ayush
         All Rights Reserved</span>
        
        </div>
    </div>
</footer>
    	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  </body>
</html>