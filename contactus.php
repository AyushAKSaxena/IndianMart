<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor Education Bootstrap Theme</title>
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
    border: 50px solid rgb(15,128,14);
     display: list-item; 
    margin-top: 80px;
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


div .image{
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
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
	</style>
    <script type="text/javascript">
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
  </script>
	<script>
		$(document).ready(function(){
			$(".services").mousein(function(){
				$(".col-xs-6").addClass("services-anim");
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
           
              <h1 style="text-align: center; margin-bottom: -30px;font-size: 50px;letter-spacing: 3px;    margin-top: 10%;color: #f1ebcf;">Contact Us</h1>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="container">

  <div class="text-border">
  <div class="panel panel-default">
    <div class="panel-heading">Contact Us Now!!</div>
    <div class="panel-body">
      
      <form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Subject:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Name:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Message:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
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
       <script src="dist/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  </body>
</html>