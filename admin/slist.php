			<p style="    
					font-size: 50px;
				    text-align: center;
				    padding-top: 20px;
				    font-weight: bold;
				    letter-spacing: 3px;
				    text-shadow: 6px 5px 10px grey;
			">Shopkeepers List</p>
			<br><br><br>
			<table class="table table-striped" border="1px" cellpadding="5px" cellspacing="1px" style="margin:auto">
				<thead>
				<tr>
					<th>ID</th>
					<th>Shop Name</th>
					<th>Owner Name</th>
					<th>Contact Number</th>
					<th>Email</th>
					<th>Address</th>
					
					<th></th>
				
				</tr>
				</thead>
				<tbody>
					<?php
						 $conn = mysqli_connect("localhost","root","","warehouse");
						 $query="select * from shopkeeper";
						 $result=mysqli_query($conn,$query);
                 		 while ($row = mysqli_fetch_assoc($result)) 
                         {
                         	?>
				                <tr>
									<td><?php echo $row['sid']; ?></td>
									<td><?php echo $row['shopname']; ?></td>
									<td><?php echo $row['sownername']; ?></td>
									<td><?php echo $row['scontact']; ?></td>
									<td><?php echo $row['semail']; ?></td>
									<td><?php echo $row['sblock'].','.$row['sstreet'].','.$row['sarea'].','.$row['scity'].','.$row['sdistrict'].','.$row['sstate'];?><br /><?php echo "Pincode:".$row['spincode']; ?></td>
									<td><a href="">Delete</a></td>
								
									
								</tr>

                         <?php
                          } 

						

					?>
				
				
				</tbody>
			</table>
       