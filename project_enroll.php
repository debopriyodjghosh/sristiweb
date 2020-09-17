<section class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					
					
					<?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM `images` WHERE category = '10'");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = 'https://www.shibpursristi.org/web/uploads/'.$row["file_name"];
                            
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