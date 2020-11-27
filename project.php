
<?php
	include 'project_slider.php';
	
	?>
	
	<section class="event-feature sec-padding bg-color-fa pb_60">
		<div class="container">
		        <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM project_details ORDER BY uploaded_on DESC");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

							//change in server with https://www.shibpursristi.org/website/admin/sristi_page/project_image
                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/project_image/'.$row["thumb_image"];
                                $prj_date = $row["prj_date"];
                                $place = $row["place"];
                                $prj_name = $row["prj_name"];
                               #$prj_category = $row["prj_category"];
                                $long_desc = $row["long_desc"];
                                $short_desc = $row["short_desc"];
                                #$enrollment_no = $row["enrollment_no"];
                            
            	?>
			<div class="row">
				<div class="col-sm-12">
	              <div class="event border-1px mb_30">
	                <div class="row">
						  <div class="col-sm-5">
							<div class="event-thumb">
							  <div class="thumb">
							      
							  <?php echo '<center><img  src='.$imageURL.'></center>';?>
								<!--<img class="full-width" src="<?php #echo $imageURL; ?>" alt="image_not_found">-->
							  </div>
							</div>
						  </div>
	                    <div class="col-sm-7">
							<div class="event-content p_20 pl_0">
							  <h3 class="event-title"><a href="#"><?php echo $prj_name; ?></a></h3>
							  <ul class="event-held list-inline font-13 mb_20">
								<li class="text-555"><i class="fa fa-clock-o"></i> <?php echo $prj_date; ?></li>
								<li class="text-555"> <i class="fa fa-map-marker"></i>  <?php echo $place; ?></li>
							  </ul>
							  <p class="mb_20"> <?php echo $short_desc; ?></p>
							 
								  <div class="accrodion-grp" data-grp-name="faq-accrodion">
												<div class="accrodion">
													<div class="accrodion-title">
														<h5>
															<span class="decor">
																<span class="inner"></span>
															</span>
															<span class="text text-thm" style="cursor: pointer;">Read More</span>
														</h5>
													</div>
													<div class="accrodion-content">
														<p><?php echo $long_desc; ?></p>
													
													</div>
												</div>
								  
								  </div>
								  
								  <form action="image.php" method="post">
								      <input id="prodId" name="prj_name" type="hidden" value="<?php echo $prj_name; ?>">
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
	        
    	       
		</div><?php }
            }else{ ?>
                <p>No image(s) found...</p>
            <?php } ?>
		
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
	