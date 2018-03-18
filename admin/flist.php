			<p style="    
					font-size: 50px;
				    text-align: center;
				    padding-top: 20px;
				    font-weight: bold;
				    letter-spacing: 3px;
				    text-shadow: 6px 5px 10px grey;
			">Farmers List</p>
			<br><br><br>
			<table class="table table-striped" border="1px" cellpadding="5px" cellspacing="1px" style="margin:auto">
				<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Contact Number</th>
					<th>Email</th>
					<th>Address</th>
					
					<th></th>
				
				</tr>
				</thead>
				<tbody>
					<?php
						 $conn = mysqli_connect("localhost","root","","warehouse");
						 $query="select * from farmer";
						 $result=mysqli_query($conn,$query);
                 		 while ($row = mysqli_fetch_assoc($result)) 
                         {
                         	?>
				                <tr>
									<td><?php echo $row['fid']; ?></td>
									<td><?php echo $row['fname']; ?></td>
									<td><?php echo $row['fcontact']; ?></td>
									<td><?php echo $row['femail']; ?></td>
									<td><?php echo $row['fblock'].','.$row['fstreetname'].','.$row['farea'].','.$row['fcity'].','.$row['fdistrict'].','.$row['state'];?><br /><?php echo "Pincode:".$row['fpincode']; ?></td>
									<td><a href="">Delete</a></td>
								
									
								</tr>

                         <?php
                          } 

						

					?>
				
				
				</tbody>
			</table>
       