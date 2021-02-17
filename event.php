<?php
	include 'header.php';
	?>
	

	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Events</h2>
					<ul class="breadcumb">
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Events List</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>

<section class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="row">
				<div class="col-xs-10">
					<div class="sec-title text-left">
						<h2>Our Clicks</h2>
						<p>Take a look towards our effort</p>
						<span class="decor"><span class="inner"></span></span>
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					
					<?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM image_db WHERE prj_catagory = 'Event'");//change with event
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/uploads/'.$row["img"];
                            
            	    ?>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?php echo $imageURL; ?>" alt="">
							</div>
						</div>
					</div>
					
					<?php }
                    }else{ ?>
                        <p>No image(s) found...</p>
                    <?php } ?>
				</div>
			</div>
		</div>
	</section>
	

	
	
	
    <section class="event-feature sec-padding bg-color-fa pb_60">
		<div class="container">
		    
		    <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM project_details where prj_catagory ='Event' ORDER BY prj_date desc");//add where with event
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/project_image/'.$row["thumb_image"];
                                $prj_date = $row["prj_date"];
                                
                                $place = $row["place"];
                                $prj_name = $row["prj_name"];
                               #$prj_category = $row["prj_category"];
                                $long_desc = $row["long_desc"];
                                $short_desc = $row["short_desc"];
                                #$enrollment_no = $row["enrollment_no"];
                            
            	?>
			
				<div class="col-sm-6 col-md-4">
	              <div class="event border-1px mb_30" style="height: 500px">
	                <div class="row">
	                  <div class="col-sm-12">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <?php echo '<center><img  src='.$imageURL.'></center>';?>
	                      </div>
	                      
	                    </div>
	                  </div>
	                  <div class="col-sm-12">
	                    <div class="event-content p_20">
	                      <h4 class="event-title"><a href="#"><?php echo $prj_name; ?></a></h4>
	                      <ul class="event-held list-inline">
	                        <li class="text-555"><i class="fa fa-clock-o"></i> <?php echo $prj_date; ?></li>
	                        <li class="text-555"> <i class="fa fa-map-marker"></i> <?php echo $place; ?></li>
	                      </ul>
	                      <p class="mb_20"><?php echo $short_desc; ?></p>
												
								  <form action="image.php" method="post">
								      <input id="prodId" name="prj_name" type="hidden" value="<?php echo $prj_name; ?>">
								            <button type="submit" class="btn btn-primary" name="submit">
                                                 See Images
                                             </button>
                                    </form>
	                     
	                    </div>
	                  </div>
	                </div>
	              </div>
	          
				
	                
	        </div>
				
				<?php }
            }else{ ?>
                <p>No image(s) found...</p>
            <?php } ?>
			</div>
			
		</div>
	</section>


<?php
	include 'landing_section.php';
	?>

























    <?php
	include 'footer.php';
	?>