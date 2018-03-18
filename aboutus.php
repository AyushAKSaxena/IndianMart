<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indian Mart</title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
    border: 50px solid rgb(15,128,14);
     display: list-item; 
    margin-top: 80px;
	}
  .bg-color {

    min-height: 0;
    height: 250px;
}

 
  

div .image{
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
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
	  .block
	  {
	  	margin-top: 30px;
		margin-left: 10px;
		margin-right: 10px;
		margin-bottom: 20px;
		clear: both;
		padding: 30px;
		box-shadow: 0px 0px 40px black;
	  }
	  .info-block
	  {
	  	margin-top: 30px;
		margin-bottom: 30px;
	  }
	  .info-block .personal:hover
	  {
	  	box-shadow: 0px 0px 30px grey;
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
           
                <h1 style="text-align: center; margin-bottom: -30px;font-size: 50px;letter-spacing: 3px;    margin-top: 10%;color: #f1ebcf;">About Us</h1>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="container">
		<div class="row">
			<div class="info-block col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h2 align="center" style="font-size:30px;">Our developing team</h2>
				<div class="col-lg-5 col-sm-10 col-xs-12 col-md-8 personal">
					<img src="img/a.jpg" width="70%" height="auto" style="margin:15% auto;">
					<h4>Name: Urvashi Meena</h4>
					<h4>Qualification: Backend Developer</h4>
				</div>
				<div class="col-lg-2">
				</div>
				<div class="col-lg-5 col-sm-10 col-xs-12 col-md-8 personal">
					<img src="img/a.jpg"  width="70%" height="auto" style="margin:15% auto;">
					<h4>Name: Ayush Saxena</h4>
					<h4>Qualification: Frontend Developer</h4>
				</div>
			</div>
		</div>
		<div>
			<h2 align="center" style="font-size:30px;">Our Motives</h2>
		</div>
		<div class="row block">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<div class="col-lg-5 col-sm-5 col-xs-12 col-md-8">
				<img src="img/bg-banner.jpg" width="100%" height="auto">
			</div>
			<div class="col-lg-7 col-sm-10 col-xs-12 col-md-7">
				<h2>For the Warehouses</h2>
				<p>We provide one of the best services for warehouses.
				   Here they can create their own database and display stored goods.
				   We help them to increase their business by connecting them to farmers and shopkeepers so that they
				   have greater profit without any middle person.
				   They can put all their branches into database and can manage them through along with all other requests
				   in the same interface provided to them.
				</p>
			</div>
		</div>
		</div>
		 <div class="row block">
		   <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<div class="col-lg-7 col-sm-10 col-xs-12 col-md-7">
				<h2>For the Farmers</h2>
				<p>
					Our web application's main concern is for farmers who want 
					to store their goods in the warehouses without any middleman.
					It will increase their profits and also gives them the 
					opportunity to search best warehouses according to minimum
					distance from them. They are also given an option of what is to be
					done with their product, ie, if they want to store on rent or want
					to sell it to warehouse.
				</p>
			</div>
			<div class="col-lg-5 col-sm-7 col-xs-12 col-md-5">
				<img src="img/bg-banner.jpg" width="100%" height="auto">
			</div>
		</div>
		</div>
		<div class="row block">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<div class="col-lg-5 col-sm-5 col-xs-12 col-md-8">
				<img src="img/bg-banner.jpg" width="100%" height="auto">
			</div>
			<div class="col-lg-7 col-sm-10 col-xs-12 col-md-7">
				<h2>For the Shopkeepers</h2>
				<p>
					Shopkeepers can buy products directly from the warehouses 
					and can search the product according to name of product or
					according to the location they are situtated. Shopkeepers will
					directly connect to warehouses without any third person interference
				</p>
			</div>
		</div>
		</div>
	</div>
   <footer class="footer">
    <div class="container">
      <div align="center">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt="">logo</a></div>
        <span class="copyright">Copyright By Urvashi & Ayush All Rights Reserved</span>
        
        </div>
    </div>
</footer>
    	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  </body>
</html>