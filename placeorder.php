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
	  .textboxes
	  {
	  	width: 90%;
		padding: 5px;
		margin: 10px 5% 0px 5%;
		border: 1px solid #e2d9d9;
		border-radius: 3px;
	  }
	  .forming
	  {
	  	margin: 50px auto;
	  	/*border: 1px solid #000000;*/
		padding: 10px;
		padding-bottom: 20px;
		box-sizing: border-box;
		box-shadow: 0px 0px 30px grey;
	  }
	  .textbox-button
	  {
	  	width: 90%;
		padding: 5px;
		margin: 10px 5% 10px 5%;
	    height: 45px;
		border-radius: 3px;	
	  }
	  .textbox-button:hover
	  {
	  	letter-spacing: 3px;
	  	transition: all 0.3s ease-in;
	  }
	  .textboxes:focus
	  {
	  	border-color: #00FF00;
	  	}
		input:focus + .floating-label,
		input:not(:focus):valid + .floating-label
		{
		top: -60px;
    	bottom: 10px;
    	left: 30px;
    	font-size: 11px;
    	opacity: 1;
		}
		#warehouseimg
		{
				
		    margin-top: 4.5%;
		    border: 1px solid #beb9b9;
		    height: auto;
		    padding-top: 30px;
    		padding-left: 55px;
		    border-radius: 3px;
		    margin-left: 70px;
		}
		textarea:focus + .floating-label1,
		textarea:not(:focus):valid + .floating-label1
		{
		top: -90px;
    	bottom: 10px;
    	left: 33px;
    	font-size: 11px;
    	opacity: 1;
		}
		.floating-label {
			position: relative;
			pointer-events: none;
			left: 39px;
			top: -30px;
			transition: 0.2s ease all;
		}
		.floating-label1 {
		    position: relative;
    		pointer-events: none;
    		left: 39px;
    		top: -60px;
    		transition: 0.2s ease all;
		}
		.spacing
		{
			margin-top: 10px;
			margin-bottom: 20px;
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
           
              <h1 style="text-align: center; margin-bottom: -30px;font-size: 50px;letter-spacing: 3px;    margin-top: 10%;color: #f1ebcf;">Place Your Order</h1>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
       
        <div class="modal-body">
          <p>Your Order has been placed successfully placed</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="redirect()" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
	<div class="container">
	
		<div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
			<form method="post" action="" enctype="multipart/form-data">
			<fieldset class="forming">
				<h2 align="center">Complete the details</h2>
				<p style="text-align:left; margin-left:30px; font-weight:bold; ">Normal Storage</p>
						<div>

							<input type="text" name="npname" class="textboxes" required />
							<span class="floating-label">Product Name</span>
						</div>
					
						<div>
							<input type="text" name="nweight" class="textboxes" required/>
							<span class="floating-label">Weight of Product(in kg)</span>
						</div>
						<div>
								<textarea class="textboxes" name="ndetails" required></textarea>
								<span class="floating-label1">Details of your product</span>
						</div>
						<div>
								<input type="file"  name="nimage" class="textboxes" required/>
								<span class="floating-label1">Product image</span>
						</div>
						<p style="text-align:left; margin-left:30px; font-weight:bold; ">Cold Storage</p>
						<div>

							<input type="text" name="cpname" class="textboxes" required />
							<span class="floating-label">Product Name</span>
						</div>
					
						<div>
							<input type="text" name="camount" class="textboxes" required/>
							<span class="floating-label">Weight of Product(in kg)</span>
						</div>
						<div>
								<textarea class="textboxes" name="cdetails" required></textarea>
								<span class="floating-label1">Details of your product</span>
						</div>
						<div>
								<input type="file" name="cimage" class="textboxes" required/>
								<span class="floating-label1">Product image</span>
						</div>
					
						<div>
							<textarea class="textboxes" required name="address"></textarea>
							<span class="floating-label1">Pickup Address</span>
						</div>
							
						
							 
							<select name="dropdown" class="textboxes spacing">
								<option>--Type of storing--</option>
								<option  value="1" id="sell">Sell</option>
								<option  value="2" >Rent</option>
								<option  value="3">Advanced Booking</option>
							</select>
							<script type="text/javascript">
								$(document).ready(function() 
	 							 {
								  	$('select[name="dropdown"]').change(function() 
								  	{
								  		if($(this).val()=='2' || $(this).val()=='3' )
								  		{
								  			 var dynamicBranchesHTML = '<div><input type="number" name="numdays" class="textboxes" required/><span class="floating-label1">Number Of Days</span></div>';

								  				 $('.dynamic-rent').html(dynamicBranchesHTML);

								  		}
								  		else if($(this).val()=='1')
								  		{
								  			var dynamicBranchesHTML ='<div><input type="number" name="expamount" class="textboxes" required/><span class="floating-label1">Expected amount</span></div>';

								  			 $('.dynamic-rent').html(dynamicBranchesHTML);
								  		}	
								  		
								  	});
								  
								  		
								  



								 });
							</script>
							<div class="dynamic-rent">
						
							</div>
						
							<select name="time" class="textboxes spacing">
								<option>--Available Time Slot--</option>
								<option value="9am-1pm">9am-1pm</option>
								<option value="1pm-5pm">1pm-5pm</option>
								<option value="5pm-9pm">5pm-9pm</option>
							</select>
						
							<input type="submit" class="btn textbox-button btn-success" value="Proceed">
				</fieldset>
			</form>
		</div>
		<div class="col-lg-5 col-sm-5 col-md-5" id="warehouseimg">
			<img src="img/bg-banner.jpg" width="90%" height="90%">
			<br>
			<br>
			<hr>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p style="font-size: 15px;font-weight:bold;color: black;">Description</p>
					<p>Warehouse Worker job summary. Perform an array of functions that may include receiving and processing incoming stock and materials, picking and filling orders from stock, packing and shipping orders, or managing, organizing and retrieving stock in the warehouse.</p>

					<p style="font-size: 15px;font-weight:bold;color: black;">Address:-</p>
					<p>D- 19/20 1st Floor Rajiv Chowk, Rajiv Chowk, D Block, Connaught Place, New Delhi, Delhi 110001</p>

					<p style="font-size: 15px;font-weight:bold;color: black;">Opening Time:-</p>
					<p>9 am</p>

					<p style="font-size: 15px;font-weight:bold;color: black;">Closing Time:-</p>
					<p>10 pm</p>

					
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="drop">
		</div>
	</div>
	
	
	
	<?php
	require 'conn.php';

	$npname=$_REQUEST['npname'];
	$nweight=$_REQUEST['nweight'];
	$ndetails=$_REQUEST['ndetails'];
	$nimage=$_FILES['nimage']['name'];
	$nimagetmp=$_FILES['nimage']['tmp_name'];

	$cpname=$_REQUEST['cpname'];
	$camount=$_REQUEST['camount'];
	$cdetails=$_REQUEST['cdetails'];
	$cimage=$_FILES['cimage']['name'];
	$cimagetmp=$_FILES['cimage']['tmp_name'];
	$address=$_REQUEST['address'];
	$dropdown=$_REQUEST['dropdown'];
	$normal_storage_block=$_GET['normal'];
	$cold=$_GET['cold'];
	
	if($dropdown==1)
	{
		$a='sell';
		$expamount=$_REQUEST['expamount'];
		
	}
	elseif ($dropdown==2)
	{
		$a='rent';
		$numdays=$_REQUEST['numdays'];
	}
	elseif($dropdown==3)
	{
		$a='advanced';
		$numdays=$_REQUEST['numdays'];
	}
	$time=$_REQUEST['time'];
	$qry="select * from warehouseregisteration where wid='2'";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);

	$wname=$row['wname'];

	if($a=='sell')
	{
		 move_uploaded_file($nimagetmp,"uploadimg/$wname/sell/$nimage");
	  $query="INSERT INTO farergoodssell(warehouseid,wbranchid,fgweight,fgname,fgpickupaddress,fgstoragetype, fgisaccepted, fgcontacttime,fgdetail,fgproductimage,fgiscompleted,amount,normal_storage_block,cold_storage_block,expamount) VALUES (2,10,$nweight,'$npname','$address','Normal storage',0,'$time','$ndetails','$nimage',0,0,$normal_storage_block,0,$expamount)";

	 $rs= mysqli_query($conn,$query);

	    move_uploaded_file($cimagetmp,"uploadimg/$wname/sell/$cimage");

	   $query1="INSERT INTO farergoodssell(warehouseid,wbranchid,fgweight,fgname,fgpickupaddress,fgstoragetype, fgisaccepted, fgcontacttime,fgdetail,fgproductimage,fgiscompleted,amount,normal_storage_block,cold_storage_block,expamount) VALUES (2,10,$camount,'$cpname','$address','Cold storage',0,'$time','$ndetails','$cimage',0,0,0,$cold,$expamount)";

	 $rs1 = mysqli_query($conn,$query1);

	 if($rs=='TRUE'  && $rs1 == 'TRUE')
	 {	

	 	
	 	 // echo '<script> $("#myModal").modal("show");</script>';

	 	 ?>
	 	 <script type="text/javascript">
	 	 	alert("Your order has been placed");
	 	 			window.location.href="index.php";
	 	 </script>


 <?php
	}
	}
	else
	{
		  move_uploaded_file($nimagetmp,"uploadimg/$wname/rent/$nimage");
	 $query="INSERT INTO farergoodsrents(warehouseid,wbranchid,fgweight,fgname,fgpickupaddress,fgstoragetype, fgisaccepted, fgcontacttime,fgdetail,fgproductimage,fgiscompleted,amount,normal_storage_block,cold_storage_block,numdays) VALUES (2,10,$nweight,'$npname','$address','Normal storage',0,'$time','$ndetails','$nimage',0,0,$normal_storage_block,0,$numdays)";

	  mysqli_query($conn,$query);

	    move_uploaded_file($cimagetmp,"uploadimg/$wname/rent/$cimage");

	   $query1="INSERT INTO farergoodsrents(warehouseid,wbranchid,fgweight,fgname,fgpickupaddress,fgstoragetype, fgisaccepted, fgcontacttime,fgdetail,fgproductimage,fgiscompleted,amount,normal_storage_block,cold_storage_block,numdays) VALUES (2,10,$camount,'$cpname','$address','Cold storage',0,'$time','$ndetails','$cimage',0,0,0,$cold,$numdays)";

	   mysqli_query($conn,$query);
	}

	

	
?>

</body>
</html>

