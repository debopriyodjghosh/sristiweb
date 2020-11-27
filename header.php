<?php
require_once('config.php');
?>
<!DOCTYPE html>


<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Shibpur Sristi</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width">


	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>

<body>


	<section class="top-bar">
		<div class="container">

			<div class="left-text pull-left">
				<p><span>Reg. No. :</span> <b>S/2L 26147 of 2014-15</b>, Under WB Societies Act XXVI of 1961</p>
			</div> <!-- /.left-text -->

			<div class="social-icons pull-right">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div> <!-- /.social-icons -->
		</div>
	</section> <!-- /.top-bar -->

	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="index.html">
					<img src="img/resources/logo.png" alt="Awesome Image" />
				</a>
			</div>
			<div class="header-right-info pull-right clearfix">
				<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-interface-2"></i>
						</div>
					</div>
					<div class="content">
						<h3>EMAIL</h3>
						<p><b>info@shibpursristi.org</b></p>
					</div>
				</div>
				<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-telephone"></i>
						</div>
					</div>
					<div class="content">
						<h3>Call Now</h3>
						<p><b>8820328618</b></p>
					</div>
				</div>
				<div class="single-header-info">
					<!-- Modal: donate now Starts -->
					<!-- <a class="thm-btn" data-toggle="modal" href="#modal-donate-now">Donate Now</a>-->

					<!-- <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                  <div class="modal-dialog style-one" role="document">
	                    <div class="modal-content">-->
					<!--color: #ffffff !important;
						background-color: #7266ba;
						border-color: #7266ba;
						font-size: 14px;
						padding: 10px;
						background: #167cbc;-->
					<style>
						.razorpay-payment-button {
							border-radius: 30px;
							display: inline-block;
							background-color: #167cbc;
							color: #fff;
							font-size: 12px;
							font-family: 'Raleway', sans-serif;
							text-transform: uppercase;
							font-weight: bold;
							padding: 12px 35px;
							border: 2px solid transparent;
							transition: all .3s ease;
						}
					</style>

					<form action="charge.php" method="POST">
						<!-- Note that the amount is in paise = 50 INR -->
						<script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $razor_api_key; ?>" data-amount="10000" data-buttontext="Donate Now" data-name="Sristi" data-description="Donation" data-image="https://your-awesome-site.com/your_logo.jpg" data-prefill.name="" data-prefill.email="" data-theme.color="#167cbc"></script>
						<input type="hidden" value="Hidden Element" name="hidden">
					</form>
					<!--<form action="http://hasan.themexlab.com/new/charity-home-html/contact.html" method="post">-->
				                	
				                    <!--Form Portlet-->
					<!--<div class="form-portlet">
				                    	<h3>Donation Amount</h3>
				                        
				                        <div class="row clearfix">
				                        	<div class="form-group col-xs-12 clearfix">
				                            	
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-1" name="sel-amount">
				                                    <label for="amount-1">$10</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" checked="" id="amount-2" name="sel-amount">
				                                    <label for="amount-2">$25</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-3" name="sel-amount">
				                                    <label for="amount-3">$50</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-4" name="sel-amount">
				                                    <label for="amount-4">$100</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-5" name="sel-amount">
				                                    <label for="amount-5">$150</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-6" name="sel-amount">
				                                    <label for="amount-6">$200</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	OR
				                                </div>
				                                
				                            </div>
				                            
				                            <div class="form-group col-xs-12">
				                            	
				                                <input type="text" placeholder="Other Amount" value="" name="other-amount">
				                                
				                            </div>
				                            
				                        </div>
				                    </div>
				                    
				                    <hr>-->
				                    
				                    <!--Form Portlet-->
					<!--<div class="form-portlet">
				                    	<h3>Billing Information</h3>
				                        
				                        <div class="row clearfix">
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Card Number <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Card Number" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Security Code (CVC) <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Security Code" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Name <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="First Name" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Email <span class="required">*</span></div>
				                                <input type="email" required="" placeholder="Email" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Phone <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Phone" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Address <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Address 1" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">City <span class="required">*</span></div>
				                                <select>
				                                	<option>City</option>
				                                    <option>City Name</option>
				                                    <option>City Other</option>
				                                </select>
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Zip / Postal Code <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Zip Code" value="" name="name">
				                            </div>
				                    
						                    <hr>
						                    
						                    <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Donate Now</button></div>
				                            
				                        </div>
				                    </div>
				                    
				                    <hr>-->
				                    
				                    <!--Form Portlet-->
					<!--  <div class="form-portlet">
				                    	<h3>Online Payment Information</h3>
				                        
				                        <div class="payment-option-logo"><img alt="" src="img/resources/payment-logos.png" class="img-responsive"></div>
				                        <br>
				                    </div>
				                    
				                </form>
				            </div>
	                      </div>
	                    </div>
	                  </div>
	                </div> -->
					<!-- Modal: donate now Ends -->
				</div>
			</div>
		</div>
	</header> <!-- /.header -->


	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation">
				<div class="nav-header">
					<ul>
						<li class="dropdown">
							<a href="index.php">Home</a>
													</li>

						<li class="dropdown">
							<a href="#">Project</a>
							<ul class="submenu">
								<li><a href="paridhan.php">Paridhan</a></li>
								<li><a href="shikshan.php">Shikshan</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="event.php">Events</a>
							
						</li>
						<li>
							<a href="gallery.php">Gallery</a>
							
						</li>
						<li><a href="about.php">About us</a></li>

						<li class="dropdown">
							<a href="membership.php">Join Us</a>
							
						</li>

						<li>
							<a href="#">Login</a>
						</li>


						<li><a href="contact.php">Contact</a></li>

					</ul>

				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<!--<div class="search-box pull-right">
				<form action="#">
					<input type="text" placeholder="Search...">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>-->
		</div>
	</nav> <!-- /.mainmenu-area -->