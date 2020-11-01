
<?php
	include 'project_slider.php';
	
	?>
	
	<section class="event-feature sec-padding bg-color-fa pb_60">
		<div class="container">
		        <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM initiatieve ORDER BY uploaded_on DESC");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = 'https://www.shibpursristi.org/web/project_image/'.$row["file_name"];
                                $date = $row["date"];
                                $place = $row["place"];
                                $title = $row["title"];
                                $category = $row["category"];
                                $description = $row["description"];
                                $short_description = $row["short_description"];
                                $enrollment_no = $row["enrollment_no"];
                            
            	?>
			<div class="row">
				<div class="col-sm-12">
	              <div class="event border-1px mb_30">
	                <div class="row">
						  <div class="col-sm-5">
							<div class="event-thumb">
							  <div class="thumb">
								<img class="full-width" src="<?php echo $imageURL; ?>" alt="">
							  </div>
							</div>
						  </div>
	                    <div class="col-sm-7">
							<div class="event-content p_20 pl_0">
							  <h3 class="event-title"><a href="#"><?php echo $title; ?></a></h3>
							  <ul class="event-held list-inline font-13 mb_20">
								<li class="text-555"><i class="fa fa-clock-o"></i> <?php echo $date; ?></li>
								<li class="text-555"> <i class="fa fa-map-marker"></i>  <?php echo $place; ?></li>
							  </ul>
							  <p class="mb_20"> <?php echo $short_description; ?></p>
							 
								  <div class="accrodion-grp" data-grp-name="faq-accrodion">
												<div class="accrodion">
													<div class="accrodion-title">
														<h4>
															<span class="decor">
																<span class="inner"></span>
															</span>
															<span class="text text-thm">Read More</span>
														</h4>
													</div>
													<div class="accrodion-content">
														<p><?php echo $description; ?></p>
													
													</div>
												</div>
								  
								  </div>
								  <form action="image.php" method="post">
								      <input id="prodId" name="enrollment_no" type="hidden" value="<?php echo $enrollment_no; ?>">
								  <button type="submit" class="btn btn-primary" name="submit">
                                          See Images
                                        </button>
                                    </form>
								  <!--test-->
								  
								  
								  
								  <!--test-->
							</div>
	                    </div>
	                </div>
	                <!--start-->
	                <!--end-->
	            </div>
				
	        </div>
	        <?php }
            }else{ ?>
                <p>No image(s) found...</p>
            <?php } ?>
    	       
		</div>
		
	</section>
	<!--<div class="accrodion-grp" data-grp-name="faq-accrodion">
												<div class="accrodion">
													<div class="accrodion-title">
														<h4>
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          Launch demo modal
                                        </button>
														</h4>
													</div>
													<div class="accrodion-content">
														//<?php
                                                    	//include 'project_slider.php';
                                                    	
                                                    	//?>
													
													</div>
												</div>
								  
								  </div>-->
	