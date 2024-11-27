<?php
				include_once 'db.php';
				$result = mysqli_query($conn,"SELECT * FROM project_details");
				if (mysqli_num_rows($result) > 0) {
				?>
				
				
				  <table class="table">
				  
				  <thead class="thead-dark">
					<tr>
					  <th scope="col">Project Catagory</th>
					  <th scope="col">Project Name</th>
					  <th scope="col">DATE</th>
					  <th scope="col">PLACE</th>
					   <th scope="col"> Thumb Image</th>
						<th scope="col">UPLOADED ON</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
									
					</tr>
				  </thead>
				<?php
				$i=0;
				while($row = mysqli_fetch_assoc($result)) {
				    ?>
				  <pre><?php  print_r($row) ;?></pre>
				  
				<tbody>
				<tr>
					<td><?php echo $row["prj_catagory"]; ?></td>
					<td><?php echo $row["prj_name"]; ?></td>
					<td><?php echo $row["prj_date"]; ?></td>
					<td><?php echo $row["place"]; ?></td>
					<td><?php echo $row["thumb_image"]; ?></td>
					
					<td><?php echo $row["uploaded_on"]; ?></td>
					<td><a href="edit.php"?email=<?php echo $row["email"]; ?>>EDIT</a></td>

				</tr>
				</tbody>
				<?php
				$i++;
				}
				?>
				</table>
				 <?php
				}
				else{
					echo "No result found";
				}
				?>
				
				<?php
include_once 'footer.php';
?>

<!-- 
 
		include_once 'db.php';
		$sql = "SELECT * FROM category ";
				$result = $conn->query($sql);

				while($row = $result->fetch_array()) {
					echo "<option value='".$row[1]."'>".$row[2]."</option>";
				} // while
				
		?>
		
		
		<select type="text" class="form-control" id="categoryName" placeholder="Product Name" name="enrollment_no" >
											<option value="">~~SELECT Project~~</option>
											
											include_once 'db.php';
											$sql = "SELECT * FROM images ";
													$result = $conn->query($sql);

													while($row = $result->fetch_array()) {
														echo "<option value='".$row[4]."'>".$row[6]."</option>";
													} // while
													
											?>
										  </select> <br>
		#<td><?php echo $row["short_desc"]; ?></td>
					#<td><?php echo $row["long_desc"]; ?></td>
					
					
					#<th scope="col">SHORT DESCRIPTION</th>
					#<th scope="col">DESCRIPTION</th>
	-->
