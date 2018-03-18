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


  <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>

    .wow:first-child {
      visibility: hidden;
    }
    .section--blue {
  background-color: #ffffff;
}
.section--purple {
  background-color: #ffffff;
}
.col-md-9 {
    width: 75%;
    float: right;
}
.banner {
 
    height: 250px;
    min-height: 0px;

  }
  .intro-para.text-center.quote {
    margin-top: 9%;
}

.bg-color {

    min-height: 0;
    height: 250px;
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
     select {
    /* margin-right: 55px; */
    /* border-radius: 12px; */
    font-size: 20px;
    padding: 7px;
    border: 3px solid #0f800e;
    margin-right: -5px;
}
 .b {
    /* padding-top: 50px; */
    margin-top: 40px;
    width: 100%;
    height: 50px;
    border-radius: 5px;
    border: none;
    background-color: #0f800e;
    color: white;
}
      
    /*  input[type=search] 
      {
          margin-left: -6%;
          -webkit-appearance: none;
          height: 10%;
          border: solid white;
          border-radius: 15px;
          background: rgba(34, 31, 29, 0);
      }*/
    input#one {
    /* border: 9px aquamarine; */
    /* border-radius: 5%; */
    border: 3px solid #0f800e;
    /* border-radius: 12px; */
    width: 30%;
    height: 45px;
    font-size: 20px;
    margin-right: -5px;
}
input#sub {
    font-size: 20px;
    /* padding: 7px; */
    padding-left: 30px;
    padding-right: 20px;
    padding-top: 7px;
    padding-bottom: 7px;
    /* border-radius: 12px; */
    border: none;
    background-color: #0f800e;

}
      form {
        color: black;
        }
    .intro-para form
    {
      margin-top: 30px;
    }
  i.fa.fa-search {
    margin-left: -10%;
    background-color: #0f800e;
    /* border: 1px solid white; */
    border-radius-left: 12px;
    border-radius-left: 12px;
    border-left-radius: 12px;
    /* color: black; */
    /* border: 1px solid white; */
    color: black;
}
    ul.nav.navbar-stacked
    {
      background-color: black;
    }

    .nav>li>a:hover {
      background-color: black;
    }
    #a
    {
      padding: 20px;
    }
    .footer
    {
      margin-top: 0%;
    }
    button .button {
    height: 50px;
    /* margin-top: 2px; */
    padding-top: -7px;
}
i.fa.fa-search {
   
    font-size: 25px;
   
}
div#service {
    background-color: #eee4e4;
    height: auto;
    /* padding-top: 20px; */
    margin-top: 40px;
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
   
  <?php
		$conn = mysqli_connect('localhost','root','','warehouse');
      //require 'conn.php';
      $qy="select distinct city from warehouseregisteration as wr join warehousebranches as wb on(wr.wid=wb.warehouseid)";
      $result=mysqli_query($conn,$qy);
     
  ?>
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
              <div class="intro-para text-center quote"> 
                
                 <form method="POST">
                    <div class="row">
                        <select id="dropdown1" name="city">

                      <?php 
                      while($row3=mysqli_fetch_assoc($result))
                      {
                         ?>


                           <option value="<?php echo $row3['city']; ?>">
                             <?php echo $row3['city']; ?>
                           </option>

                         <?php   
                      }
                      ?>
                       
                        </select>
                
                         <input type="text" id="one" name="product" placeholder="Required number of blocks">
                         <input type="submit" id="sub" value="search" name="search">
                     
              
                     <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </form>
                <script type="text/javascript">
                  $(document).ready(function()
                  {
                      $("#sub").click(function(e)
                      {
                        var city=$('#dropdown1').val();
                        var product=$('#one').val();
                        $.ajax({
                                  type: "POST",
                                  data:{city:city,product:product},
                                  url:"farmersearch.php",
                                  success: function(data)
                                  {
                                      $("#abc").html(data);
                                  }
                              });
                              e.preventDefault();
                      });
                    });
                </script>
                
              </div>
                
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="container" id="service">
   <div class="row">
    
      <div class="col-md-3 col-sm-3 xol-xs-3" id="a">
        <ul class="nav navbar-stacked">
            <li style="padding-left: 20px;color: white"><h4 style="color: white">Space Available</h4></li>
            &nbsp;&nbsp;&nbsp;<input type="radio" id="space" name="htl" value="htl"> High-To-Low<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" id="space1" name="htl" value="lth"> Low-To-High
            <br><br><br>
			<script>
				$(document).ready(function(){
					$("#space").focus(function(e)
                      {
                        var value=$(this).val();
						var city=$('#dropdown1').val();
                        var product=$('#one').val();
						console.log(value);
                        $.ajax({
                                  type: "POST",
                                  data:{city:city,product:product,htl:value},
                                  url:"farmersearch.php",
                                  success: function(data)
                                  {
                                      $("#abc").html(data);
                                  }
                              });
                              e.preventDefault();
                      });
				
				});
				$(document).ready(function(){
					$("#space1").focus(function(e)
                      {
                        var value=$(this).val();
						var city=$('#dropdown1').val();
                        var product=$('#one').val();
						console.log(value);
                        $.ajax({
                                  type: "POST",
                                  data:{city:city,product:product,htl:value},
                                  url:"farmersearch.php",
                                  success: function(data)
                                  {
                                      $("#abc").html(data);
                                  }
                              });
                              e.preventDefault();
                      });
				
				});
			</script>
             <li style="padding-left: 20px;color: white"><h4 style="color: white" >Types Of Warehouse</h4></li>
             &nbsp;&nbsp;&nbsp;<input type="radio" id="wtype1" name="wtype" value="bond"> Bonded<br>
            &nbsp;&nbsp;&nbsp;<input type="radio" id="wtype2" name="wtype" value="non"> Non-Bonded<br>
            <br><br><br>
			<script>
				$(document).ready(function(){
					$("#wtype1").focus(function(e)
                      {
                        var value=$(this).val();
						var htl=$('#space').val();
						var city=$('#dropdown1').val();
                        var product=$('#one').val();
                        $.ajax({
                                  type: "POST",
                                  data:{city:city,product:product,wtype:value,htl:htl},
                                  url:"farmersearch.php",
                                  success: function(data)
                                  {
                                      $("#abc").html(data);
                                  }
                              });
                              e.preventDefault();
                      });
				
				});
				$(document).ready(function(){
					$("#wtype2").focus(function(e)
                      {
                        var value=$(this).val();
						var htl=$('#space').val();
						var city=$('#dropdown1').val();
                        var product=$('#one').val();
						console.log(value);
                        $.ajax({
                                  type: "POST",
                                  data:{city:city,product:product,htl:htl,wtype:value},
                                  url:"farmersearch.php",
                                  success: function(data)
                                  {
                                      $("#abc").html(data);
                                  }
                              });
                              e.preventDefault();
                      });
				
				});
			</script> 
      </div>
<div id="abc">
      <?php

      $query="select * from warehouseregisteration as wr join warehousebranches as wb on(wr.wid=wb.warehouseid)";
      $rs=mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($rs))
      {
         ?>
        
      <div class="col-md-9 col-sm-9 col-xs-9" id="abc">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4" id="a">
            <?php
              $id=$row['wbranchid'];
              $query1="select * from warehouseimages where wbranchid=$id";
              $res=mysqli_query($conn,$query1);
              $row1=mysqli_fetch_assoc($res);
            ?>
      
             <img src="<?php echo "uploadimg/".$row['wname']."/images/".$row1['images'];?>" class="img-responsive" style="width: 100%;height: 140px;border-radius: 5px;" >
          </div>
          <div class="col-md-5 col-sm-5 col-xs-5" id="a">
            <h3><?php echo $row['wname']; ?></h3>
            <br>
            <div class="row">
              <div class="col-md-1">
                <i class="fa fa-phone" aria-hidden="true" style="color: #666161;font-weight: 600;"></i>
              </div>
              <div class="col-md-10">
                <p style="color: #666161;font-size:15px;"><?php echo $row['contact']; ?></p>
                
              </div>
            </div>
            
           
             <div class="row">
              <div class="col-md-1">
                <i class="fa fa-bank" aria-hidden="true" style="color: #666161;font-weight: 600;"></i>
              </div>
              <div class="col-md-10">
                <p style="color: #666161;font-size:15px;"><?php echo $row['block_name'].",". $row['street_name'].",".$row['area'];?>|more..</p>
                
              </div>
            </div>
             <div class="row">
              <div class="col-md-1">
                <i class="fa fa-space-shuttle" aria-hidden="true" style="color: #666161;font-weight: 600;"></i>
              </div>
              <div class="col-md-10">
                <p style="color: #666161;font-size:15px"><?php echo $row['wservices']; ?></p>
                
              </div>
            </div>
           

          </div>
          <div class="col-md-3 col-sm-3 col-xs-3" id="a">
            <a href="single.php?id=<?php echo $row['wbranchid']; ?>"><button type="submit" class ="b">Get Deal &nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true" ></i></button></a>

          </div>
        </div>
      </div>

         <?php
      }
     ?>
   </div>
     

      <!--   <div class="col-xs-7 col-sm-2 col-md-2 sidebar sidebar-left sidebar-animate sidebar-md-show">
        <ul class="nav navbar-stacked">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div> -->


    </div> 
      
    </div>
   
   

  <div class="clearfix"></div>
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
