
<?php


   // if($_SESSION["isLogin"]!=true)
//    {
//        header("location:login.php");
//    }
//
//    else
//    {
//
//        $username=$_SESSION["name"];

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
<style>
 .left-top
 {
 	float:right;
	color:#CCCCCC;
	margin-top: 12px;
	font-weight:400;
	font-size: 24px;
	margin-right: 6px;
 }
 th,td
{
    padding: 10px;
    margin: 5px;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
   
    color: black;
}
thead
{
    border-bottom: 2px solid black;
}
</style>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin panel</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Change Profile picture</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Edit profile</a></li>
						<li class="m_2"><a href="adminlogoutprocess.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<h2 class="left-top">Welcome <?php //echo $username; ?></h2>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Warehouse details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="" id="pwd1">Warehouse List</a>
                                </li>
								 <li>
                                    <a href="" id="pwd2">Warehouse transaction</a>
                                </li>
								 
                            </ul>



<script type="text/javascript">
    // jQuery('a.query-link').on('click', function(e){ 
     $(document).ready(function() 
     {
        $("a#pwd1").on('click', function(e)
        {
          
              $.ajax({

                        type: "GET",
                        url:"wlist.php",
                        success: function(data)
                        {
                            $("#page-wrapper").html(data);
                        }

                    });



                    e.preventDefault();
        });




        $("a#pwd2").on('click', function(e)
        {
           $.ajax({

                type:"GET",
                url:"wblist.php",
                success:function(data)
                {
                    $("#page-wrapper").html(data);
                }
            });
            e.preventDefault();

        });

     });


</script>




                        </li>
                       
					   <li>
                            <a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;Farmer details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="" id="farmdet">Farmers List</a>
                                </li>
								 <li>
                                    <a href="" id="farmtrans">Farmers transaction</a>
                                </li>
						
                            </ul>
                        </li>
						
	<script type="text/javascript">
		$(document).ready(function() 
     	{
        	$("a#farmdet").on('click', function(e)
        	{
              $.ajax({
                        type: "POST",
                        url:"flist.php",
                        success: function(data)
                        {
                            $("#page-wrapper").html(data);
                        }
                    });
                    e.preventDefault();
        });
        $("a#farmtrans").on('click', function(e)
        {
           $.ajax({

                type:"POST",
                url:"ftlist.php",
                success:function(data)
                {
                    $("#page-wrapper").html(data);
                }
            });
            e.preventDefault();
        });
     });
	</script>
                       <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Shopkeeper details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="" id="shopdet">Shopkeepers List</a>
                                </li>
								 <li>
                                    <a href="" id="shoptrans">Shopkeeper transactions</a>
                                </li>
								 
                            </ul>
                        </li>
                    </ul>
	<script type="text/javascript">
		$(document).ready(function() 
     	{
        	$("a#shopdet").on('click', function(e)
        	{
              $.ajax({
                        type: "POST",
                        url:"slist.php",
                        success: function(data)
                        {
                            $("#page-wrapper").html(data);
                        }
                    });
                    e.preventDefault();
        	});
        	$("a#shoptrans").on('click', function(e)
        	{
           		$.ajax({
                	type:"POST",
                	url:"stlist.php",
                	success:function(data)
                	{
                   		$("#page-wrapper").html(data);
                	}
            	});
            e.preventDefault();
        	});
     	});
	
	</script>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>45%</strong></h5>
                      <span>New Orders</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1019</strong></h5>
                      <span>New Visitors</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1012</strong></h5>
                      <span>New Users</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Profit Today</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      <div class="col_1">
		    
	
		    <div class="col-md-4 span_8">
		       <div class="activity_box">
		        <div class="scrollbar" id="style-2">
                   <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-thumbs-up text-info icon_13"> </i>  </div>
	                 <div class="col-xs-3 activity-img"><img src='images/5.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">Lorem Ipsum</a> liked <a href="#">random</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
	  			    <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-comment text-info"></i> </div>
	                 <div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">simply random</a> liked <a href="#">passages</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-check text-info icon_11"></i></div>
	                 <div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">standard chunk</a> liked <a href="#">model</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row1">
	                 <div class="col-xs-1"><i class="fa fa-user text-info icon_12"></i></div>
	                 <div class="col-xs-3 activity-img"><img src='images/4.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">perspiciatis</a> liked <a href="#">donating</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                     </div>
	  		        </div>
		          </div>
		    </div>
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Browser Stats</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
                        <li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
                        <li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
                        <li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
                        <li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
                        <li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
                        <li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
	  </div>


    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
//}
?>