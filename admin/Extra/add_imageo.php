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
    $category = $_POST['category'];
    $project_category = $_POST['project_category'];
    $project_name = $_POST['project_name'];
    echo $category;
    echo $project_category;
    echo $project_name;
    
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            //$fileName = basename($_FILES['files']['name'][$key]); 
            $fileName = date('m-d-Y_hia')."_". basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."','".$category."','".$project_category."','".$project_name."', NOW()),"; 
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
            $insert = $conn->query("INSERT INTO images (file_name, category, project_category, project_name, uploaded_on) VALUES $insertValuesSQL"); 
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




    <!-- Bootstrap -->
    
  <body>
    
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Add Project</a></li>
            <li role="presentation"><a href="#">Manage</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
        
      </div>

      <div class="jumbotron">
        <h1>Gallery Admin Panel</h1>
        <p class="lead">Please give an unique no according to project image when you are going to Upload image</p>
        <form action="" method="post">
        <input type="submit" class="btn btn-lg btn-success" name="submit2" value="show all">
        </form>
      </div>
      
      
     <div class ="row">
       <div class="col-lg-6">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group input-group-lg">
              
              <input type="text" class="form-control" placeholder="Enrollment no" aria-describedby="sizing-addon1" name="category">
            </div><br>
            
            
            <div class="input-group input-group-lg">
              
              <input type="file" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="files[]" multiple>
            </div><br>
            
            
            
            <select type="text" class="form-control" id="categoryName" placeholder="category" name="project_category" >
											<option value="">~~SELECT Category~~</option>
											<?php 
											include_once 'db.php';
											$sql = "SELECT * FROM category ";
													$result = $conn->query($sql);

													while($row = $result->fetch_array()) {
														echo "<option value='".$row[1]."'>".$row[2]."</option>";
													} // while
													
											?>
										  </select> <br>
            <div class="input-group input-group-lg">
              
              <input type="text" class="form-control" placeholder="Project Name" aria-describedby="sizing-addon1" name="project_name">
            </div><br>
            
                <input type="submit" class="btn btn-primary" name="submit" value="Add Images">
            
        </form>
        </div>
        <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-lg">
              
              <input type="text" class="form-control" placeholder="Enrollment no" aria-describedby="sizing-addon1" name="category">
            </div><br>
            <input type="submit" class="btn btn-primary" name="submit1" value="search">
        </form>
        </div>
       <br>
       <hr>
       <br>
      </div> 
<section>
  
  

<hr>
<div class="row">
<?php
// Include the database configuration file
include_once 'db.php';
if(isset($_POST['submit1'])){
    
    $category = $_POST['category'];
// Get images from the database SELECT * FROM images ORDER BY id DESC 
$query = $conn->query("SELECT * FROM `images` WHERE category = $category");

if($query->num_rows > 0){
    $count=1;
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        $project_name = $row["project_name"];
        $project_category = $row["project_category"];
        
?>
    
    
       
       <div class="col-md-4">
        <div class="thumbnail">
          <a href="<?php echo $imageURL; ?>" target="_blank">
            <img src="<?php echo $imageURL; ?>" alt="Lights" style="width:100%;height:350px;">
            
          </a>
        </div>
        <p><?php echo $project_name; ?></p><br>
        <p><?php echo $project_category; ?></p>
      </div>
<?php if($count%3==0){ ?>
</div><div class="row">
<?php } ?>
    


<?php 
    $count++;    
    }
}else{ ?>
    <p>No image(s) found...</p>
<?php } } ?> 

</div>

<div class="row">

<?php
// Include the database configuration file
include_once 'db.php';
if(isset($_POST['submit2'])){
    
    //$category = $_POST['category'];
// Get images from the database SELECT * FROM images ORDER BY id DESC 
$query = $conn->query("SELECT * FROM images ORDER BY id DESC");

if($query->num_rows > 0){
    $count=1;
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    
    <div class="col-md-4">
        <div class="thumbnail">
          <a href="<?php echo $imageURL; ?>" target="_blank">
            <img src="<?php echo $imageURL; ?>" alt="Lights" style="width:100%;height:350px;">
            
          </a>
        </div>
      </div>
      
      
      <?php if($count%3==0){ ?>
        </div><div class="row">
        <?php } ?>  
   
<?php 
$count++;
}
}else{ ?>
    <p>No image(s) found...</p>
<?php } } ?> 


<?php
include_once 'footer.php';
?>
</section>