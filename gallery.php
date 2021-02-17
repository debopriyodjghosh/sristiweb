<?php
include 'header.php';
?>



	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Gallery</h2>
					<ul class="breadcumb">
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Gallery Style Two</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section full-width pb_2">
    	<div class="auto-container">
            
            <!--Filter-->
            <div class="filters">
            	<ul class="filter-tabs style-one clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".child">Child</li>
                    <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                    <li class="filter" data-role="button" data-filter=".sponsorship">Sponsorship</li>
                    <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>
                </ul>
            </div>
            
        </div>
        
        <div class="images-container" style="margin: 0 2rem;">
            <div class="filter-list clearfix">
                
                <div class="row">
  <?php
  // Include the database configuration file
  include_once 'db.php';
  

   
    // Get images from the database SELECT * FROM images ORDER BY id DESC 
    $query = $conn->query("SELECT * FROM image_db ORDER BY author DESC");

    if ($query->num_rows > 0) {
      $count = 1;
      while ($row = $query->fetch_assoc()) {

        //////change in server with https://www.shibpursristi.org/web/uploads/
        $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/uploads/' . $row["img"];
        

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
 
?>

</div>

             
                
            </div>
        </div>
    </section>
    


<?php
include 'footer.php';
?>
	