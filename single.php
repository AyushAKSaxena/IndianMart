<?php
	$conn = mysqli_connect("localhost","root","","warehouse");
	$wid = $_REQUEST['wid'];
	$query = "SELECT * from warehouse WHERE wid=$wid";
	$rs = mysqli_query($conn,$query);
	$fetch = mysqli_fetch_assoc($rs);
	$total = $fetch['normal_storage'] + $fetch['cold_storage'];
	$block = $total/200;
	$ns = round($fetch['normal_storage']/$block);
	$cs = round($fetch['cold_storage']/$block);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warehouse Details</title>
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


  .bg-color {

    min-height: 0;
    height: 250px;
}

    /*.wow:first-child {
      visibility: hidden;
    }*/
    .navbar-fixed-top.scrolled {
        background-color: black !important;
        transition: background-color 200ms linear;
      }
      .navbar-default .navbar-brand {
        color: #0f800e;
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
	  .img-ware
	  {
		margin-top: 64px;
	  }
	  .table-made
	  {
		width: 110%;
		padding-top: 10%;
		padding-right: 10%;
		padding-left: 6%;
	  }
	  .table-m th
	  {
	  	padding: 10px;
		color: #006600;
	  }
	  .table-m td
	  {
	  	width: 60%;
	  	padding: 10px;
	  }
	  img:hover
	  {
		box-shadow: 0px 0px 70px #464545;
	  }
	  .table-m:hover
	  {
	  	box-shadow: 0px 0px 70px #464545;
	  }
	  .btn-place
	  {
	  	margin-top: 20px;
		margin-left: 6%;
		padding: 10px;
	  }
	  .any
	  {
	  	border: 1px #003300;
	  }
	  .selecting
	  {
	  	margin: auto;
	  	margin-top: 40px;
	  }
	  .selecting td
	  {
	  	border: 1px solid black;
	  	width: 50px;
		height: 30px;
		text-align: center;
	  }
	  .selecting .spaces td:hover
	  {
		background: #009900;
	  }
	  .selecting .spaces td a:hover
	  {
	  	text-decoration: none;
	  }
	  .any-normal
	  {
	  	background: #003300;
	  }
	  .any-ref
	  {
	  	background: #999999;
	  }
	  .selecting .head th
	  {
	  	color: #000000;
		text-align: left;
		padding: 20px;
		font-size: 24px;
	  }
	  .selecting th
	  {
	  	color: #000000;
		text-align: center;
	  }
	  .btn-place a
	  {
	  	text-decoration: none;
		color: #000000;
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
           
              <h1 style="text-align: center; margin-bottom: -30px;font-size: 50px;letter-spacing: 3px;    margin-top: 10%;color: #f1ebcf;">Warehouse Details</h1>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="container">
		<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
			<img src="img/a.jpg" width="100%" height="340px" class="img-ware">
		</div>
		<div class="col-sm-7 col-xs-12 col-md-7 col-lg-7">
			<div class="table-made">
			<table class="table-m" cellpadding="5" cellspacing="2" border="1px solid black">
				<tr>
					<th>Name</th>
					<td><?php echo $fetch['wname']; ?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?php echo $fetch['block_name'].','.$fetch['street_name'].','.$fetch['area'].','.$fetch['city'].','.$fetch['district'].','.$fetch['state'].'<br>Pincode: '.$fetch['pincode']; ?></td>
				</tr>
				<tr>
					<th>City</th>
					<td><?php echo $fetch['city']; ?></td>
				</tr>
				<tr>
					<th>Contact No.</th>
					<td><?php echo $fetch['contact']; ?></td>
				</tr>
				<tr>
					<th>Email ID</th>
					<td><?php echo $fetch['wemail']; ?></td>
				</tr>
				<tr>
					<th>Normal Storage Available</th>
					<td><?php echo $fetch['normal_storage']; ?></td>
				</tr>
				<tr>
					<th>Cold Storage Available</th>
					<td><?php echo $fetch['cold_storage']; ?></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container">
		<table class="selecting">
			<tr class="head"><th colspan="20">Book Your Space</th></tr>
			<tr>
				<td colspan="2"></td>
				<td style="cursor:pointer" class="any-normal"><a class="any"></a></td>
				<td><i class="fa fa-angle-right" aria-hidden="true"></i></td>
				<th colspan="2">Filled</td>
				<td colspan="2"></td>
				<td style="cursor:pointer"><a class="any"></a></td>
				<td><i class="fa fa-angle-right" aria-hidden="true"></i></td>
				<th colspan="2">Available</td>
				<td colspan="2"></td>
				<td style="cursor:pointer" class="any-ref"><a class="any"></a></td>
				<td><i class="fa fa-angle-right" aria-hidden="true"></i></td>
				<th colspan="2">Refrigerated</td>
				<td colspan="2"></td>
			</tr>
			<tr class="spaces">
			<?php 
				$count = 0;
				for($i=0;$i<ns; $i++,$count++)
				{	
			?>
				<td style="cursor:pointer" class="any-normal"><a class="any"> a</a></td>
				<?php
					if($count%20==0)
					{
					?>
						</tr>
						<tr class="spaces">
					<?php
					}
				}
				for($i=0;$i<cs;$i++;$count++)
				{	
				?>
					<td style="cursor:pointer" class="any-normal"><a class="any"> a</a></td>
				<?php
					if($count%20==0)
					{
					?>
						</tr>
						<tr class="spaces">
					<?php
					}
				}
				?>
				</tr>
			<tr class="spaces">
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
			</tr>
			<tr class="spaces">
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
			</tr>
			<tr class="spaces">
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
			</tr>
			<tr class="spaces">
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
			</tr>
			<tr class="spaces">
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
			</tr>
			<tr class="spaces">
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
				<td style="cursor:pointer"><a class="any"> a</a></td>
			</tr>
		</table>
	</div>
	<div class="container">
		<button type="submit" class="btn btn-success btn-place"><a href="placeorder.php">Place Your Order <i class="fa fa-angle-double-right"></i></a> </button>
	</div>
</body>
</html>
