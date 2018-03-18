			<p style="

				    font-size: 50px;
				    text-align: center;
				    padding-top: 20px;
				    font-weight: bold;
				    letter-spacing: 3px;
				    text-shadow: 6px 5px 10px grey;


			">Warehouse List</p>
			<br><br><br>
			<table class="table table-striped" border="1px" cellpadding="5px" cellspacing="1px" style="margin:auto">
				<thead>
				<tr>
					<th>ID</th>
					<th>Warehouse Name</th>
					<th>Owner Name</th>
					<th>email</th>

					<th>Warehouse Type</th>
					<th>Services</th>
					<th>Description</th>
					<th>Branches</th>
				
					<th></th>
				
				</tr>
				</thead>
				<tbody>
					<?php
						 require './conn.php';

						 $query="select * from warehouseregisteration";

						 $result=mysqli_query($conn,$query);

                 		 while ($row = mysqli_fetch_assoc($result)) 
                         {

                         	?>
				                <tr>
									<td><?php echo $row['wid']; ?></td>
									<td><?php echo $row['wname']; ?></td>
									<td><?php echo $row['wownername']; ?></td>
									<td><?php echo $row['wemail']; ?></td>
							
									<td><?php echo $row['wtype']; ?></td>
									<td><?php echo $row['wservices']; ?></td>
									<td><?php echo $row['wdescription']; ?></td>
									<td><a href="">Show Branches</a></td>
									<td><a href="">Delete</a></td>
								
									
								</tr>

                         <?php
                          } 

						

					?>
				
				
				</tbody>
			</table>
       