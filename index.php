<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indian Mart</title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!--  <link rel="stylesheet" href="css/libs/animate.css"> -->
  <link rel="stylesheet" href="css/site.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>

    button#farmer {
    background-color: wheat;
    border: none;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    color: black;
    font-family: cursive;
    text-shadow: 2px 2px grey;
    font-size: 20px;
}
    button#shopkeeper {
    background-color: #09213f;
    border: none;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    color: white;
    font-family: cursive;
    text-shadow: 2px 2px grey;
    font-size: 20px;
}
.btn-green {
    background-color: #09ac09;
    color: #fff;
}

.btn-green:hover {
    background-color: black;
    color: #fff;
    letter-spacing: 3px;
     transition: all .3s ease-in;
}
button#Warehouse {
    background-color: #d5621e;
    border: none;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    color: black;
    font-family: cursive;
    font-weight: bold;
    text-shadow: 2px 1px white;
    font-size: 20px;
}
    .section--blue {
  background-color: #ffffff;
}
.section--purple {
  background-color: #ffffff;
}
div#ds {
    margin-top: 10px;
}

.modal-header .close {
    margin-top: -45px;
    /* margin-left: 3px; */
    margin-right: -20px;
    /* color: rgba(8, 94, 19, 0.98); */
}
button.close {
    opacity: 1;
    color: rgb(9, 172, 9);
    -webkit-appearance: none;
    padding: 0;
    font-size: 60px;
    text-shadow: 2px 2px black;
    cursor: pointer;
    background: 0 0;
    border: 0;
    /* font-size: 20px; */
}
.modal-content {
  border: 5px solid green;
}
div .image{
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
}
.close:hover {
    color: #073b12;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: 1;
}
.modal-content h4 {
    font-size: 1.3em;
    font-family: serif;
    font-weight: normal;
    letter-spacing: 1px;
    color: grey;
    text-align: center;
}


		.services-anim
		{
			animation-duration: 3s;
		}
    .navbar-fixed-top.scrolled {
        background-color: black !important;
        transition: background-color 200ms linear;
      }

      .navbar-fixed-top.scrolled .nav-link {
        color:#555;
      }
      .navbar-default .navbar-nav > li > a {
          color:#f4f4f4;
         
      }
      body { padding-right: 0 !important }
    .navbar-default {
          background-color: rgba(248, 248, 248, 0);
          border-color: rgba(231, 231, 231, 0);
		}
    .slideInLeft
    {
        -webkit-transition: 2s;
        transition: 2s;
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
    function farmermodalclose()
    {
      $.modal.close();
    }
    function shopkeepermodalclose()
    {
       $.modal.close();
    }
    function  warehousemodalclose()
    {
        $.modal.close();
    }
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
        <a class="navbar-brand" href="index.php">Indian<span>Mart</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="buyproduct.php">Associated Warehouse</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a data-target="#myModal" data-toggle="modal" style="cursor:pointer;">Signup</a></li>
          <li class="btn-trial"><a href="admin/login.php">Admin</a></li>
        </ul>
        </div>
      </div>
    </div>
   
    
  <div class="modal fade in" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <p style="text-align: center;font-size: 40px;letter-spacing: 5px;
                font-family: cursive;
                color: black;">Who Are You ?</p>
            </hr>
              <h4 class="modal-title">Select one of them</h4>
          </div>
         
        
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <button onClick="farmermodalclose()" data-dismiss="modal" id="farmer" data-target="#loginfarmer" data-toggle="modal">Farmer</button>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <button id="shopkeeper" data-target="#loginshopkeeper" data-dismiss="modal" data-toggle="modal" onClick="shopkeepermodalclose()">Shopkeeper</button>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <button onClick="warehousemodalclose()"  data-dismiss="modal" id="Warehouse" data-target="#loginwarehouse" data-toggle="modal">Warehouse</button>
            </div>
          </div>
        </div>
       
      </div>
      
    </div>
  </div>

<div class="modal fade in" id="loginfarmer" role="dialog">

    <div class="modal-dialog modal-sm">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form method="post" action="indexlogin.php">
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Contact Number" name="floginid" id="floginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Password" id="floginpsw" name="floginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-md-6" id="ds">
                        <a href="farmerRegistration.php">Sign up</a>
                     </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" onClick="userlogin()" name="fsubmit">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="loginshopkeeper" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm" action="indexlogin.php">
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Email ID" id="sloginid" name="sloginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Password" id="sloginpsw" name="sloginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-md-6">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-md-6" id="ds">
                        <a href="shopkeeperRegistration.php">Sign up</a>
                     </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" onClick="userlogin()" name="ssubmit">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="modal fade" id="loginwarehouse" role="dialog">

    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm" action="indexlogin.php">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="wloginid" name="wloginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="wloginpsw" name="wloginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                      </label>
                    </div>
                    </div>
                     <div class="col-md-6" id="ds">
                        <a href="warehouseregisteration.php">Sign up</a>
                     </div>
                  
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" name="wsubmit">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


   
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">Trust & Quality</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">Building The Smarter India</p>
                <p class="small-text">Best place to sell you product<br></p>
                <a href="aboutus.php" class="btn get-quote">See More about us..</a>
              </div>
                         <div class="mouse">
                            <a href="#service">
                             <i class="fa fa-long-arrow-down" style="font-size:18px;color:#5fcf80;;margin-top: 15px;"></i>
                             </a>
                             </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
	 <?php 

   include 'service.php';
   ?>
<section class="main-section client-part" id="client">
  <div class="container">
    <b class="quote-right wow fadeInDown delay-03"><i class="fa fa-quote-right"></i></b>
      <div class="row">
          <div class="col-lg-12">
              <p class="client-part-haead wow fadeInDown delay-05">It is important to bridge the gap between farmers and warehouses,ie buyers and sellers to create a better economy and income</p>
          </div>
        </div>
      <ul class="client wow fadeIn delay-05s">
       
                <h3 style="color:white;"> Our Motivation</h3>
                
            </a></li>
    </ul>
    </div>
</section>
<div class="container">

     <div class="row">
          <div class="col-lg-6 col-sm-7 wow fadeInLeft">
              <div class="contact-info-box address clearfix">
                  <h3><i class="fa fa-map-marker"></i>Address:</h3>
                  <span>Block-B,PDPU High rise hostel<br>Knowledge Corridor, Gandhinagar, Gujarat</span>
                </div>
                <div class="contact-info-box phone clearfix">
                  <h3><i class="fa fa-phone"></i>Phone:</h3>
                  <span>7521522345</span>
                </div>
                <div class="contact-info-box email clearfix">
                  <h3><i class="fa fa-pencil"></i>email:</h3>
                  <span>urvashimeena1998@gmail.com</span>
                </div>
              <div class="contact-info-box hours clearfix">
                  <h3><i class="fa fa-clock-o"></i>Hours:</h3>
                  <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> 10am - 2pm<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                  <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
          <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
              <div class="form">
                  
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
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