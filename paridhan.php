
<?php
	include 'header.php';
	?>



<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>PARIDHAN</h2>
					<ul class="breadcumb">
						<li><a href="index.php">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Paridhan Details</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
</section>


<section class="event-feature sec-padding bg-color-fa">
		<div class="container">
			<div class="row">
	          <div class="col-sm-12">
	            <div class="featured-causes">
	              <div class="row">
	                <div class="col-sm-12">
	                  <div class="thumb">
	                    <img class="full-width" src="img/causes/paridhan-cover.jpg" alt="">
	                    
	                  </div>
	                </div>
	                <div class="col-sm-12">
	                  <div class="causes-details clearfix p_30">
	                   
	                    <h2 class="text-black mb_20">Clothes For All</h2>
	                    <p class="font-16">Clothing is one of the most important human needs. According to ‘Maslow’s Hierarchy ‘clothing is a physiological need, that is mandatory for every human being to live. The right to adequate clothing, or the right to clothing, is recognized as a human right in various international human rights instruments; this, together with the right to food and the right to housing, are parts of the right to an adequate standard of living as recognized under Article 11 of the International Covenant on Economic, Social and Cultural Rights (ICESCR). The right to clothing is similarly recognized under Article 25 of the Universal Declaration of Human Rights (UDHR).</p>
	                    <div class="row mt_30">
	                    	<div class="col-sm-5">
	                    		<p class="font-16 mt_5">There are millions of children in our country who doesn’t have access to adequate clothing. In rural areas kids doesn’t get enough clothes during winter which causes fever and cold, sometimes death. Slums are also heavily affected in winter season, and lack of warm clothes made things worst for them.</p>
	                    	</div>
	                    	<div class="col-sm-7 brder-left-3">
	                    		<p class="p-title font-16 mt_15"> ”Paridhan” means “Vastra” in Sanskrit which in english is “clothing”. We started distributing clothes among slum kids back in 2015. Back then we don’t have any kind of brand name or proper initiative, but in 2016 we decided to make a brand out of it. Thus we started the initiative under the brand name of “Paridhan”.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam harum corrupti assumenda sunt eaque, praesentium quod incidunt consequuntur dolorem maiores, neque mollitia perferendis unde.</p>
	                    	</div>
	                    </div>
	                    <div class="pull-left">
		                    <a class="thm-btn btn-xs" href="donate.php">Donate Now</a>
	                    </div>
	                    <div class="pull-right">
		                    <h6>Help us by share:</h6>
		                    <ul class="social">
								<li><a href="https://www.facebook.com/sristii2013"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/shibpursristi14"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCLhhn_H9iWcwSTI4MalAa-w"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://www.linkedin.com/company/shibpur-sristi/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.instagram.com/shibpursristi/"><i class="fa fa-instagram"></i></a></li>
							</ul>	                    	
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
		</div>
</section>




	
	
<section class="sec-padding about-content full-sec">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-5 col-md-12">
					<div class="full-sec-content">
						<div class="sec-title style-two">
							<h2>How We Work</h2>
							<span class="decor">
								<span class="inner"></span>
							</span>
						</div>
						
						<p>A detailed survey report about their condition of clothing, their needs, economic conditions etc will be made. The overall survey report will be a key document for us and other organizations to understand the overall scenario and we will also suggest organizations to act accordingly. We also have decided that, we will visit them twice or more in a year to make sure that their condition is uplifting on a subsequent basis. We may not be able to solve the overall problem but at least some of them will surely be benefitted, as our continuous support and encouragement will always be with them.</p>
						<br>
						<a href="about.php" class="thm-btn">Read More</a>
					</div><br><br>
				</div>
				<div class="col-md-7 hidden-md text-right">
					<img src="img/resources/hww-paridhan.jpg" alt="Awesome Image"/>
				</div>
			</div>
		</div>
</section>


<!--<section class="overlay-white sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project text-center">
					<h3>Save Children From Hunger</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Became a part of the world lorem ipsum</h2>
					<p>To Provide basic materials like food and clothes to the marginalised section of our country and Driving a socio-economic movement among the privileged section of the society for contributing towards sustainable development of those who are unprivileged.</p>
					<a href="#" class="thm-btn">Donate Now</a>
                    <a href="membership.php" class="thm-btn inverse">Join Us</a>
				</div>
			</div>
		</div>
</section>-->
	
<!--landing-->

<?php
	include 'landing_section.php';
	?>
<!--landing-->
	
<!--dynamic div start-->
<!--slider-->
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
            	    $query = $conn->query("SELECT * FROM image_db WHERE prj_catagory = 'Paridhan'");
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
<!--list-->
<section class="event-feature sec-padding bg-color-fa pb_60">
		<div class="container">
		        <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM project_details where prj_catagory='Paridhan' ORDER BY prj_date DESC");//edit needed for pagination, use limit
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/project_image/'.$row["thumb_image"];
                                $prj_date = $row["prj_date"];
                                $place = $row["place"];
                                $prj_name = $row["prj_name"];
                               #$prj_category = $row["prj_category"];
                                $long_desc = $row["long_desc"];
                                $short_desc = $row["short_desc"];

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
															<span class="thm-btn inverse btn-xs" style="cursor: pointer;">Read More</span>
														</h5>
													</div>
													<div class="accrodion-content">
														<p><?php echo $long_desc; ?></p>
													
													</div>
												</div>
								  
								  </div>
								  
								 <form action="image.php" method="post">
								      <input id="prodId" name="prj_name" type="hidden" value="<?php echo $prj_name; ?>">
								  <button type="submit" class="thm-btn btn-xs" name="submit">
                                          See Images
                                        </button>
                                    </form>
								 
							</div>
	                    </div>
	                </div>
	                     </div>
	        </div>
		</div><?php }
            }else{ ?>
                <p>No image(s) found...</p>
            <?php } ?>
</section>
<!--dynamic div end-->
		
	<?php
	include 'footer.php';
	?>