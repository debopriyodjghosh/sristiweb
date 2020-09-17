<?php
include "header.php";
?>



    
    
    
    
    <div class="row">
<?php
// Include the database configuration file
include_once 'db.php';
if(isset($_POST['submit'])){
    
    $enrollment_no = $_POST['enrollment_no'];
    echo $enrollment_no;
// Get images from the database SELECT * FROM images ORDER BY id DESC 
$query = $conn->query("SELECT * FROM `images` WHERE category = $enrollment_no");

if($query->num_rows > 0){
    $count=1;
    while($row = $query->fetch_assoc()){
        $imageURL = 'https://www.shibpursristi.org/web/uploads/'.$row["file_name"];
        $project_name = $row["project_name"];
        $project_category = $row["project_category"];
        
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

</div>





<?php
include "footer.php";
?>