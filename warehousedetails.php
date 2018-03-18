<?php
	//session_start();
	//require 'conn.php';
	$conn = mysqli_connect('localhost','root','','warehouse');
	$wid = 3;
	$qry = "SELECT * FROM warehouseregisteration where wid=$wid";
	$rs1 = mysqli_query($conn, $qry);
	$fetch1 = mysqli_fetch_assoc($rs1);
?>
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
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/site.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    .banner {
 
    height: 250px;
    min-height: 0px;

  }
  table {
    font-family: serif;
    font-size: 17px;
}
 .modal-content {
    border: 4px solid green;
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
          
            <div class="col-md-8">
               <h1 style="    /* text-align: center; */
    margin-bottom: -30px;
    font-size: 26px;
    /* letter-spacing: 3px; */
    margin-top: 20%;
    color: #9c9797;"><?php echo $fetch1['wname']; ?></h1>
            </div>
            <div class="col-md-4">
         <h2  style="font-size: 20px;margin-top: 60%;color: #0f800e; float:right;">Welcome <?php echo $fetch1['wownername']; ?></h2>

            </div>
             
              
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<div class="container">
 

  <ul class="nav nav-tabs" style="margin-top: 30px;">
    <li class="active"><a data-toggle="tab" href="#home">Farmer Details</a></li>
    <li><a data-toggle="tab" href="#menu1">Shopkeeper Details</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br>
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Product</th>
         <th>Weight(in Kg)</th>
        <th>Address</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
	 <?php
		$qry2 = "SELECT * FROM farergoodsrents where warehouseid = $wid";
		$rs2 = mysqli_query($conn,$qry2);
		while($fetch2= mysqli_fetch_array($rs2))
		{	
			
	 ?>
      <tr>
        <td>
			<?php 
				$fid = $fetch2['farmerid'];
				$frs = mysqli_fetch_assoc(mysqli_query($conn, "SELECT fname,fcontact FROM farmer WHERE fid=$fid"));
				echo $frs['fname'];
			?>
		</td>
        <td><?php echo $frs['fcontact']; ?></td>
        <td><?php echo $fetch2['fgname']; ?></td>
        <td><?php echo $fetch2['fgweight']; ?></td>
        <td><?php echo $fetch2['fgpickupaddress']; ?></td>
        <td><?php 
				if($fetch2['fgisaccepted']==0)
					echo "Not Accepted";
				else
					echo "Accepted";
			?>
		</td>
        <td><a href="" data-target="#myModal" data-toggle="modal">view more..</a></td>
      </tr>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <p style="text-align: center;font-size: 40px;letter-spacing: 5px;
                font-family: cursive;
                color: black;">Farmer Details</p>
            </hr>
           
          </div>
          <br>
        
        <img src="<?php echo "images/".$fetch1['wname']."/rent/".$fetch2['fgproductimage']; ?>" width="250px" height="150px" style="margin-left: 30%;">
        <br>
        <div class="modal-body">
            <table class="table">

              <tbody>
                <tr>
                  <td style="font-weight: bold;">
                    Name
                  </td>
                  <td>
                    <?php echo $frs['fname']; ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;"> 
                    Contact number
                  </td>
                  <td>
                    <?php echo $frs['fcontact']; ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;"> 
                    Address
                  </td>
                  <td>
                    <?php echo $fetch2['fgpickupaddress']; ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Product Name
                  </td>
                  <td>
                    <?php echo $fetch2['fgname']; ?>
                  </td>
                </tr>
                <tr>
                  	<td style="font-weight: bold;">
                  	Weight
               	 	</td>
                	<td>
                	  <?php echo $fetch2['fgweight']; ?>
                	</td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    No. Of Blocks
                  </td>
                  <td>
                    <?php echo $fetch2['fgnormal']+$fetch2['fgcold']; ?>
                  </td>
                </tr>
				<tr>
                  <td style="font-weight: bold;">
                    No. Of Blocks
                  </td>
                  <td>
                    <?php 
						if($fetch2['fgnormal']==0)
							echo  "Cold";
						else
							echo "Normal";
					?>
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    No. Of Days
                  </td>
                  <td>
                    <?php echo $fetch2['no_of_days']." days"; ?>
                  </td>
                </tr>
                <!--<tr>
                  <td style="font-weight: bold;">
                    Expected Amount(for product)
                  </td>
                  <td>
                    10,000 Rs
                  </td>
                </tr>-->
                <tr>
                  <td style="font-weight: bold;">
                    Available Time 
                  </td>
                  <td>
                    <?php echo $fetch2['fgcontacttime']; ?>
                  </td>
                </tr>

              </tbody>
            </table>
        </div>
	   </div>
    </div>
</div>
	  <?php
	  	}
	  ?>
  </table>
    </div>


    <div id="menu1" class="tab-pane fade">
      <br>
        <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Product</th>
         <th>Weight(in Kg)</th>
        <th>City</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>NO</td>
        <td><a href="" data-target="#shopmyModal" data-toggle="modal">view more..</a></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>NO</td>
        <td><a href="">view more..</a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>NO</td>
        <td><a href="">view more..</a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>NO</td>
        <td><a href="">view more..</a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>july@example.com</td>
        <td>NO</td>
        <td><a href="">view more..</a></td>
      </tr>
    </tbody>
  </table>
    </div>
  
  </div>
</div>


<div class="modal fade" id="shopmyModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <p style="text-align: center;font-size: 40px;letter-spacing: 5px;
                font-family: cursive;
                color: black;">Shopkeeper Details</p>
          
           
          </div>
          <br>
        
        
        <div class="modal-body">
          <div class="row">
            <table class="table">

              <tbody>
                <tr>
                  <td style="font-weight: bold;">
                    Name
                  </td>
                  <td>
                    Urvashi Meena
                  </td>
                </tr>
                  <tr>
                    <td style="font-weight: bold;"> 
                    Email
                  </td>
                  <td>
                    urvashimeena1998@gmail.com
                  </td>
                  </tr>
                  
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Phone Number
                  </td>
                  <td>
                    8739905549
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;"> 
                    Address
                  </td>
                  <td>
                    965,kalka mata road,Ganesh nagar,pahada,udaipur,Rajasthan
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Product Name
                  </td>
                  <td>
                    Potato
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                  Weight
                </td>
                <td>
                  20kg
                </td>
           
                <tr>
                  <td style="font-weight: bold;">
                    Available Time 
                  </td>
                  <td>
                    3 pm-6pm
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->

      </div>
      
    </div>
  </div>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <p style="text-align: center;font-size: 40px;letter-spacing: 5px;
                font-family: cursive;
                color: black;">Farmer Details</p>
            </hr>
           
          </div>
          <br>
        
        <img src="img/potatoes.jpg" width="250px" height="150px" style="margin-left: 30%;">
                 <br>
        <div class="modal-body">
          <div class="row">
            <table class="table">

              <tbody>
                <tr>
                  <td style="font-weight: bold;">
                    Name
                  </td>
                  <td>
                    Urvashi Meena
                  </td>
                </tr>
                  <tr>
                    <td style="font-weight: bold;"> 
                    Email
                  </td>
                  <td>
                    urvashimeena1998@gmail.com
                  </td>
                  </tr>
                  
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Phone Number
                  </td>
                  <td>
                    8739905549
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;"> 
                    Address
                  </td>
                  <td>
                    965,kalka mata road,Ganesh nagar,pahada,udaipur,Rajasthan
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Product Name
                  </td>
                  <td>
                    Potato
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                  Weight
                </td>
                <td>
                  20kg
                </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    No. Of Blocks
                  </td>
                  <td>
                    5
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    No. Of Days
                  </td>
                  <td>
                    45 days
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Date Of Storing Product
                  </td>
                  <td>
                    05/11/2017
                  </td>

                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Sell/Rent
                  </td>
                  <td>
                    Sell
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Expected Amount(for product)
                  </td>
                  <td>
                    10,000 Rs
                  </td>
                </tr>
                <tr>
                  <td style="font-weight: bold;">
                    Available Time 
                  </td>
                  <td>
                    3 pm-6pm
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->

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