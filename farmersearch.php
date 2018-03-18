<?php

//require 'conn.php';
$conn = mysqli_connect('localhost','root','','warehouse');
$city=$_REQUEST['city'];
if(isset($_REQUEST['product']))
{
	$product=$_REQUEST['product'];
	$query="select * from warehouseregisteration as wr join warehousebranches as wb on(wr.wid=wb.warehouseid) where Lower(city)='$city' and (normal_storage_block_av+cold_storage_block_av) > $product";
}
else
{
	$query="select * from warehouseregisteration as wr join warehousebranches as wb on(wr.wid=wb.warehouseid) where Lower(city)='$city'";
}
if(isset($_REQUEST['wtype']))
{
	if($_REQUEST['wtype']=='bond')
		$wtype = "bonded";
	else if($_REQUEST['wtype']=="non")
		$wtype = "nonbonded";
	$query .= " and wtype='$wtype' ";
}
if(isset($_REQUEST['htl']))
{
	if($_REQUEST['htl']=='htl')
	{
		$space = "DESC";
	}
	else
	{
		$space = "ASC";
	}
	$query = $query." ORDER BY (normal_storage_block_av+cold_storage_block_av) ".$space;
}

$rs1=mysqli_query($conn,$query);

$count=mysqli_num_rows($rs1);

if($count>0)
{


		 while($row = mysqli_fetch_assoc($rs1))
      {
         ?>
     
             <div class="col-md-9 col-sm-9 col-xs-9" >
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
  


}
else
{
	?>
	<h1>NO WAREHOUSE FOUND</h1>

	<?php
}
?>




	