<?php
	session_start();
	
	$con = mysqli_connect("localhost","root","","warehouse");
	if(isset($_REQUEST['fsubmit']))
	{
		$contact = $_REQUEST['floginid'];
		$password = $_REQUEST['floginpsw'];
		$qry = "SELECT * FROM farmer WHERE fcontact='$contact' and fpassword='$password'";
		$rs = mysqli_query($con,$qry);
		$num = mysqli_num_rows($rs);
		if($num==1)
		{
			$_SESSION['fcontact']=$contact;
			$fet = mysqli_fetch_assoc($rs);
			$_SESSION['fname']=$fet['fname'];
			header("location:single.php");
		}
		else
		{
			echo '<script>alert("Incorrect Username Or Password");';
			echo 'window.location.href="index.php";</script>';
		}
	}
	if(isset($_REQUEST['ssubmit']))
	{
		$email = $_REQUEST['sloginid'];
		$password = $_REQUEST['sloginpsw'];
		$qry = "SELECT * FROM shopkeeper WHERE semail='$email' and spassword='$password'";
		$rs = mysqli_query($con,$qry);
		$num = mysqli_num_rows($rs);
		if($num==1)
		{
			$_SESSION['semail']=$email;
			$fet = mysqli_fetch_assoc($rs);
			$_SESSION['sname']=$fet['sownername'];
			header("location:single.php");
		}
		else
		{
			echo '<script>alert("Incorrect Username Or Password");';
			echo 'window.location.href="admin/index.php?id=2";</script>';
		}
	}
	if(isset($_REQUEST['wsubmit']))
	{
		$email = $_REQUEST['wloginid'];
		$password = $_REQUEST['wloginpsw'];
		$qry = "SELECT * FROM warehouse WHERE wemail='$email' and wpassword='$password'";
		$rs = mysqli_query($con,$qry);
		$num = mysqli_num_rows($rs);
		if($num==1)
		{
			$_SESSION['wemail']=$email;
			$fet = mysqli_fetch_assoc($rs);
			$_SESSION['wname']=$fet['wownername'];
			header("location:single.php");
		}
		else
		{
			echo '<script>alert("Incorrect Username Or Password");';
			echo 'window.location.href="index.php";</script>';
		}
	}
?>