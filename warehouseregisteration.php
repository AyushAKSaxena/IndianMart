<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warehouse Registeration</title>
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
           
              <h1 style="text-align: center; margin-bottom: -30px;font-size: 50px;letter-spacing: 3px;    margin-top: 10%;color: #f1ebcf;">Warehouse Registration</h1>
              
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
      
      <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="wname">Warehouse Name</label>
            <input type="text" class="form-control" id="wname" name="wname">
          </div>
s          <div class="form-group">
            <label for="owner">Warehouse Owner Name</label>
            <input type="text" class="form-control" id="owner" name="owner">
          </div>
          <div class="form-group">
            <label for="email">Email Id</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="services">Services</label>
            <input type="text" class="form-control" id="services" name="services" title="eg:-Warehouse On Hire,Logistic Service">
          </div>

          <div class="form-group">
            <label for="identity">Identity Image</label>
            <input type="file" class="form-control" id="identity" name="identity">
          </div>
          <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" id="desc" name="desc"></textarea>
          </div>
          <div class="form-group">
            <label for="wtype">Warehouse Type</label><br>
            <div class="col-lg-6"><input type="radio" id="wtype" name="wtype" value="bonded">Bonded</div>
            <div class="col-lg-6"><input type="radio" id="wtype" name="wtype" value="nonbonded">Non-Bonded</div>
          </div>
          <div class="form-group">
            <label for="pwd">How Many Branched You Have</label>
            <input type="text" name="branch" class="form-control" id="pwd1">
          </div>
          <div id="dynamic-branches">
		  </div>
          <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
</form>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
 $(document).ready(function() 
 {
    $("#pwd1").keyup(function() 
    {
      var no_of_branches = $(this).val();

      var dynamicBranchesHTML = '';

      for (var i = 0; i < no_of_branches;i++) {
        dynamicBranchesHTML+='<h3>Branch '+(i+1)+' Details</h3><div class="form-group"><label for="block'+i+'">Block no.</label><input type="text" class="form-control" id="block'+i+'" name="block'+i+'"></div><div class="form-group"><label for="street'+i+'">Street name</label><input type="text" class="form-control" id="street'+i+'" name="street'+i+'"></div><div class="form-group"><label for="area'+i+'">Area</label><input type="text" class="form-control" id="area'+i+'" name="area'+i+'"></div><div class="form-group"><label for="city'+i+'">City</label><input type="text" class="form-control" id="city'+i+'" name="city'+i+'"></div><div class="form-group"><label for="district'+i+'">District</label><input type="text" class="form-control" id="district'+i+'" name="district'+i+'"></div><div class="form-group"><label for="state'+i+'">State</label><input type="text" class="form-control" id="state'+i+'" name="state'+i+'"></div><div class="form-group"><label for="pin'+i+'">Pin Code</label><input type="text" class="form-control" id="pin'+i+'" name="pin'+i+'"></div><div class="form-group"><label for="stime'+i+'">Start Time</label><input type="text" class="form-control" id="stime'+i+'" name="stime'+i+'"></div><div class="form-group"><label for="etime'+i+'">End Time</label><input type="text" class="form-control" id="etime'+i+'" name="etime'+i+'"><div class="form-group"><label for="contact'+i+'">End Time</label><input type="text" class="form-control" id="contact'+i+'" name="contact'+i+'"></div><div class="form-group"><label for="stype'+i+'">Storage Type</label><br><div class="col-lg-6"><input type="checkbox" id="stype1'+i+'" name="stype'+i+'[]" value="normal">Normal Storage</div><div class="col-lg-6"><input type="checkbox" id="stype2'+i+'" name="stype'+i+'[]" value="cold"> Cold Storage</div></div><div class="form-group"><label for="agoods'+i+'">Allowed Goods</label><br><div class="col-lg-6"><input type="checkbox" id="agoods'+i+'" name="agoods'+i+'[]" value="perishable">Perishable</div><div class="col-lg-6"><input type="checkbox" id="agoods2'+i+'" name="agoods'+i+'[]" value="non-perishable"> Non-Perishable</div></div><div class="form-group"><label for="transport'+i+'">Do you have transport available?</label><br><div class="col-lg-6"><input type="radio" id="transport'+i+'" name="transport'+i+'" value="true">Yes</div><div class="col-lg-6"><input type="radio" id="transport'+i+'" name="transport'+i+'" value="false"> No</div></div><div class="form-group"><label for="nstorageb'+i+'">Normal Storage block </label><input type="text" class="form-control" id="nstorageb'+i+'" name="nstorageb'+i+'"></div><div class="form-group"><label for="nstorage'+i+'">Normal Storage block available</label><input type="text" class="form-control" id="nstorage'+i+'" name="nstorage'+i+'"></div><div class="form-group"><label for="cstorageb'+i+'">Cold storage block</label><input type="text" class="form-control" id="cstorageb'+i+'" name="cstorageb'+i+'"></div><div class="form-group"><label for="cstorage'+i+'">Cold storage block available</label><input type="text" class="form-control" id="cstorage'+i+'" name="cstorage'+i+'"></div><div class="form-group"><label for="blocksize'+i+'">Block Size(in metre cube)</label><input type="text" class="form-control" id="blocksize'+i+'" name="blocksize'+i+'"></div><div class="form-group"><label for="images'+i+'[]">Photos</label><br><input type="file" class="btn btn-success btn-personal" id="images'+i+'[]" name="images'+i+'[]" multiple>Upload Images</div>';
      }

      $('#dynamic-branches').html(dynamicBranchesHTML);
      console.log($(this).val());

  });
  });
</script>




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



<?php

  //require 'conn.php';
  $conn = mysqli_connect('localhost','root','','warehouse');
  if(isset($_REQUEST['submit']))
  {
    $wname = $_REQUEST['wname'];
    $owner = $_REQUEST['owner'];
    $email = $_REQUEST['email'];
    $services = $_REQUEST['services'];
    $identity=$_FILES['identity']['name'];
    $tempidentity=$_FILES['identity']['tmp_name'];
    $description=$_REQUEST['desc'];
    $wtype = $_REQUEST['wtype'];
    $branch = $_REQUEST['branch'];
	$qry = "INSERT INTO warehouseregisteration(wname, wownername, wemail, widentity, wtype, wservices, wdescription) VALUES ('$wname','$owner','$email','$identity', '$wtype', '$services', '$description');";
	$rs = mysqli_query($conn,$qry);
	mkdir("uploadimg/$wname");
	mkdir("uploadimg/$wname/images");
	mkdir("uploadimg/$wname/rent");
	mkdir("uploadimg/$wname/sell");	
	move_uploaded_file($tempidentity,"uploadimg/$wname/$identity");
	$query_id = mysqli_query($conn,"SELECT wid from warehouseregisteration where wemail='$email';");
	$wid = mysqli_fetch_assoc($query_id);
	$id = $wid['wid'];
	for($i=0; $i<$branch; $i++)
	{
		$block = $_REQUEST['block'.$i];
		$street = $_REQUEST['street'.$i];
		$area = $_REQUEST['area'.$i];
		$city = $_REQUEST['city'.$i];
		$district = $_REQUEST['district'.$i];
		$state = $_REQUEST['state'.$i];
		$pin = $_REQUEST['pin'.$i];
		$stime = $_REQUEST['stime'.$i];
		$etime = $_REQUEST['etime'.$i];
		$nstorageb = $_REQUEST['nstorageb'.$i];
		$nstorage = $_REQUEST['nstorage'.$i];
		$cstorageb = $_REQUEST['cstorageb'.$i];
		$cstorage = $_REQUEST['cstorage'.$i];
		$blocksize = $_REQUEST['blocksize'.$i];
		$contact = $_REQUEST['contact'.$i];
		$stype = $_REQUEST['stype'.$i];
		$stype1 = implode($stype,',');
		$agoods = $_REQUEST['agoods'.$i];
		$agoods1 = implode($agoods,',');
		$transport = $_REQUEST['transport'.$i];
		$qry1 = "INSERT INTO warehousebranches(warehouseid, city, state, street_name, pincode, block_name, area, start_time, end_time, storage_type, allowed_goods, transport, normal_storage_block, cold_storage_block, district, contact, block_size, normal_storage_block_av, cold_storage_block_av) VALUES ($id, '$city', '$state', '$street',$pin ,'$block' ,'$area' , '$stime', '$etime', '$stype1', '$agoods1', '$transport', $nstorageb, $cstorageb, '$district', '$contact', $blocksize, $nstorage, $cstorage)";
		$rs1 = mysqli_query($conn,$qry1);
		$rs2 = mysqli_query($conn, "SELECT wbranchid FROM warehousebranches where contact='$contact'");
		$fetch = mysqli_fetch_assoc($rs2);
		$wbid = $fetch['wbranchid'];
		foreach ($_FILES["images".$i]["error"] as $key => $error) {
    		if ($error == UPLOAD_ERR_OK) {
        		$tmp_name = $_FILES["images".$i]["tmp_name"][$key];
        		$name = basename($_FILES["images".$i]["name"][$key]);
    		    move_uploaded_file($tmp_name, "uploadimg/$wname/images/$name");
				$rs3 = mysqli_query($conn,"INSERT INTO warehouseimages(wbranchid, images) VALUES('$wbid', '$name')");
    		}
		}
	}
	$_SESSION['warehouseid']=$id;
  }
?>