<?php
include_once 'header.php';
?>


<?php
include_once 'db.php';
if(isset($_POST['submit']))
{	 
	 $cat_id = $_POST['cat_id'];
	 $cat_name = $_POST['cat_name'];
	 $author = $_POST['author'];
	 print_r($_POST);
	 //echo $uname;
	 //echo $time;
	 
	 $sql = "INSERT INTO category (cat_id,cat_name,author)
	 VALUES ('$cat_id','$cat_name','$author')";
	 if (mysqli_query($conn, $sql)) {
		header("Location:gallery.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	 
	 /*$city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);*/
}
?>
<section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Add Category</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" action="" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Category ID</label>
                <input class="form-control" id="name" type="text" name="cat_id" placeholder="Category ID" required="required" data-validation-required-message="Please enter Category ID.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Category Name</label>
                <input class="form-control" id="text" type="text" name="cat_name" placeholder="Category Name" required="required" data-validation-required-message="Please enter Category Name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Author</label>
                <input class="form-control" id="text" type="text" name="author" placeholder="Category Name" required="required" data-validation-required-message="Please enter Author.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" name="submit">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Category Listing</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <?php
				include_once 'db.php';
				$result = mysqli_query($conn,"SELECT * FROM category");
				if (mysqli_num_rows($result) > 0) {
				?>
				  <table class="table">
				  
				  <thead class="thead-dark">
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">CAtegory ID</th>
					  <th scope="col">Category Name</th>
					  <th scope="col">Added by</th>
					</tr>
				  </thead>
				<?php
				$i=0;
				while($row = mysqli_fetch_array($result)) {
				?>
				<tbody>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["cat_id"]; ?></td>
					<td><?php echo $row["cat_name"]; ?></td>
					<td><?php echo $row["author"]; ?></td>
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
		  
		  
        </div>
      </div>

    </div>
  </section>
<?php
include_once 'footer.php';
?>
