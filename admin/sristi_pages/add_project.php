<?php
// INIT
session_start();

?>
<?php
// THROW USER TO LOGIN PAGE IF NOT SIGNED IN
// YOU MIGHT WANT TO DO THIS DIFFERENTLY IF PLANNING TO USE PRETTY URL
$_ADMIN = is_array($_SESSION['user']);
if (!$_ADMIN && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="login") {
  header('Location: ../login.php');
  die();
}
?>

<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'db.php'; 
     
    // File upload configuration 
    $targetDir = "project_image/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $prj_catagory = $_POST['prj_catagory'];
    $prj_name = $_POST['prj_name'];
    $prj_date = $_POST['prj_date'];
    $place = $_POST['place'];
    $thumb_image = $_POST['thumb_image'];
    $short_desc = $_POST['short_desc'];
    $long_desc = $_POST['long_desc'];

	
	
    
    echo $prj_name;
   
    echo $thumb_image;
    
    
    
    
    
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $thumb_image = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $thumb_image; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$prj_catagory."','".$prj_name."', '".$prj_date."', '".$place."', '".$thumb_image."', '".$short_desc."', '".$long_desc."',  NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO project_details (prj_catagory, prj_name, prj_date, place, thumb_image, short_desc, long_desc, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
     
    // Display status message 
    echo $statusMsg; 
} 
?>


<form action="" method="post" enctype="multipart/form-data">
<legend><h2>Add Project Details:</h2></legend>
	Project Category:
    <select  name="prj_catagory" >
		<option value="null" selected disabled >--SELECT Catagory--</option>
		<option value="Paridhan">Paridhan</option>
		<option  value="Shikshan">Shikshan</option>
		<!--<option value="Udvaban">Udvaban</option>
		<option  value="Sabuj Sankalpa">Sabuj Sankalpa</option>
		<option  value="Food Drive">Food Drive</option>-->
		<option  value="Event">Event</option>
	  </select> <br>
	Project Name:<input type="text" name="prj_name"> <br>
    Project Date:<input type="date" name="prj_date"> <br>
    Project Place:<input type="text" name="place"> <br>
    Short Description:<input type="text" name="short_desc"><br>
    Long Description:<input type="text" name="long_desc"><br>
    
          
       ADD Images: Please select image as size 570*350    
        
    <input type="file" name="files[]" multiple > <br>
    
   
                                        
    
    <input type="submit" name="submit" value="UPLOAD">
</form>


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
					</tr>
				  </thead>
				<?php
				$i=0;
				while($row = mysqli_fetch_array($result)) {
				?>
				<tbody>
				<tr>
					<td><?php echo $row["prj_catagory"]; ?></td>
					<td><?php echo $row["prj_name"]; ?></td>
					<td><?php echo $row["prj_date"]; ?></td>
					<td><?php echo $row["place"]; ?></td>
					<td><?php echo $row["thumb_image"]; ?></td>
					
					<td><?php echo $row["uploaded_on"]; ?></td>

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
