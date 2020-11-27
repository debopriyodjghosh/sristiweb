<?php
include "header.php";
?>







<div class="row">
  <?php
  // Include the database configuration file
  include_once 'db.php';
  if (isset($_POST['submit'])) {

    $prj_name = $_POST['prj_name'];
    #echo $prj_name;
    // Get images from the database SELECT * FROM images ORDER BY id DESC 
    $query = $conn->query("SELECT * FROM image_db WHERE prj_name = '$prj_name'");

    if ($query->num_rows > 0) {
      $count = 1;
      while ($row = $query->fetch_assoc()) {

        //////change in server with https://www.shibpursristi.org/web/uploads/
        $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/uploads/' . $row["img"];
        $prj_name = $row["prj_name"];
        $prj_catagory = $row["prj_catagory"];

  ?>



        <div class="col-md-4">
          <div class="thumbnail">
            <a href="<?php echo $imageURL; ?>" target="_blank">
              <img src="<?php echo $imageURL; ?>" alt="Lights" style="width:100%;height:350px;">
            </a>
          </div>
        </div>
        <?php
        if ($count % 3 == 0) {
            echo '</div> <div class="row">';
        }

        $count++;
      }
    } else { 
        echo "<p>No image(s) found...</p>";
    }
  }
        ?>

</div>





<?php
include "footer.php";
?>