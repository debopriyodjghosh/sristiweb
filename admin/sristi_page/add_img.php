
<?php
include_once 'header.php';
?>
<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'db.php'; 
     
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $prj_catagory = $_POST['prj_catagory'];
    $prj_name = $_POST['prj_name'];
    #$img="";
    
    echo"$prj_name $prj_catagory";
    
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            //$fileName = basename($_FILES['files']['name'][$key]); 
            $img = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $img; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$prj_catagory."','".$prj_name."','".$img."', NOW()),"; 
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
            $insert = $conn->query("INSERT INTO image_db (prj_catagory, prj_name, img, author) VALUES $insertValuesSQL"); 
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
<legend><h2>Add Project Images:</h2></legend>
	Project Category:
    <select  name="prj_catagory" >
		<option >~~SELECT Catagory~~</option>
		<option value="Paridhan">Paridhan</option>
		<option  value="Shikshan">Shikshan</option>
		<option value="Udvaban">Udvaban</option>
		<option  value="Sabuj Sankalpa">Sabuj Sankalpa</option>
		<option  value="Food Drive">Food Drive</option>
		<option  value="Event">Event</option>
	  </select> <br>
	  
	Project Name:
	<select  name="prj_name" >
		<option >~~SELECT Project~~</option>
		<?php
		include_once 'db.php';
		$sql = "SELECT * FROM project_details ";
			$result = $conn->query($sql);

			while($row = $result->fetch_array()) {
				echo "<option value='".$row["prj_name"]."'>".$row["prj_name"]."</option>";
			} 
				
		?>
		

	  </select> <br><br>
    
          
       ADD Images: Please select image as size 570*350    <br>
        
    <input type="file" name="files[]" multiple > <br>
    
   
                                       
    
    <input type="submit" name="submit" value="Add Images">
</form>