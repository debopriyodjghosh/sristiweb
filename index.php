 <?php
	include 'header.php';
	?>


<!--TOP image-->
<?php
	include 'topimg.php';
	?>
<!--reference-->
<section class="call-to-action">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="call-to-action-corner col-md-4"
                style="background-image: url(img/call-to-action/left-box-bg.jpg);">
                <a href="shikshan.php" class="single-call-to-action">
                    <!--<div class="icon-box">-->
                    <!--    <div class="inner-box">-->
                    <!--        <i class="flaticon-circle"></i>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="content-box">
                        <img src="img/Shikshan_white.png" />
                        <!--<h3>Shikshan</h3>-->
                        <p align="center">Shikshan doesn’t only mean Teaching, it also says education</p>
                        <!--<a href="shikshan.php" class="thm-btn inverse">Read More</a>-->
                    </div>
                </a>
            </div>
            <div class="call-to-action-center col-md-4"
                style="background-image: url(img/call-to-action/center-box-bg.jpg);">
                <a href="paridhan.php" class="single-call-to-action">
                    <!--<div class="icon-box">-->
                    <!--    <div class="inner-box">-->
                    <!--        <i class="flaticon-social"></i>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="content-box">
                        <img src="img/Paridhan_white.png" />
                        <!--<h3>Paridhan</h3>-->
                        <p align="center">Clothing is a physiological need, mandatory for every human being</p>
                        <!--<a href="paridhan.php" class="thm-btn inverse">Read More</a>-->
                    </div>
                </a>
            </div>
            <div class="call-to-action-corner col-md-4"
                style="background-image: url(img/call-to-action/right-box-bg.jpg);">
                <a href="event.php" class="single-call-to-action">
                    <!--<div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-medical"></i>
                        </div>
                    </div>-->
                    <div class="content-box">
                        <h3>Events</h3>
                        <p align="center">We also flagged off few priority programs and initiatives that counts </p>
                        <!--<a href="event.php" class="thm-btn inverse">Read More</a>-->
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



<!--Latest work-->

<section class="recent-causes sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Our Latest work</h2>
            <p>We have took this initiatives in last few months.</p>
            <span class="decor"><span class="inner"></span></span>
        </div>


        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4"> <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM project_details ORDER BY prj_date DESC LIMIT 1");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/project_image/'.$row["thumb_image"];
                                $prj_date = $row["prj_date"];
                                
                                $prj_name = $row["prj_name"];
                                $prj_con = $row["short_desc"];
                               
            	?>

                <div class="col-sm-12">
                    <div class="event border-1px mb_30">


                        <div class="causes sm-col5-center">
                            <div class="thumb">
                                <img class="rounded-circle" alt="" src="<?php echo $imageURL; ?>" alt="">
                                <div class="donate-piechart">
                                    <div class="piechart-block">

                                    </div>
                                </div>
                            </div>

                            <div class="causes-details clearfix">
                                <h4 class="title"><a href=""><?php echo $prj_name; ?></a></h4>
                                <ul class="about-causes list-inline clearfix">

                                </ul>
                                <p><?php echo substr($prj_con,0,70)."..."; ?></p>


                                <div>

                                    <form action="image.php" method="post"><input id="prodId" name="prj_name"
                                            type="hidden" value="<?php echo $prj_name; ?>">
                                        <a href="paridhan.php" class="thm-btn btn-xs"><i
                                                class="fa fa-angle-double-right text-white"></i> Read More</a>
                                        <a>
                                            <button type="submit" class="thm-btn inverse btn-xs" name="submit">View More
                                                Images</button>
                                    </form></a>
                                </div>
                                <?php }
                                
            }else{ ?>
                                <p>No image(s) found...</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4"> <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM project_details added ORDER BY prj_date DESC LIMIT 1,1");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/project_image/'.$row["thumb_image"];
                                $prj_date = $row["prj_date"];
                                
                                $prj_name = $row["prj_name"];
                                $prj_con = $row["short_desc"];
                               
            	?>

                <div class="col-sm-12">
                    <div class="event border-1px mb_30">


                        <div class="causes sm-col5-center">
                            <div class="thumb">
                                <img class="rounded-circle" alt="" src="<?php echo $imageURL; ?>" alt="">
                                <div class="donate-piechart">
                                    <div class="piechart-block">

                                    </div>
                                </div>
                            </div>

                            <div class="causes-details clearfix">
                                <h4 class="title"><a href=""><?php echo $prj_name; ?></a></h4>
                                <ul class="about-causes list-inline clearfix">

                                </ul>
                                <p><?php echo substr($prj_con,0,70)."..."; ?></p>


                                <div>

                                    <form action="image.php" method="post"><input id="prodId" name="prj_name"
                                            type="hidden" value="<?php echo $prj_name; ?>">
                                        <a href="paridhan.php" class="thm-btn btn-xs"><i
                                                class="fa fa-angle-double-right text-white"></i> Read More</a>
                                        <a>
                                            <button type="submit" class="thm-btn inverse btn-xs" name="submit">View More
                                                Images</button>
                                    </form></a>
                                </div>
                                <?php }
            }else{ ?>
                                <p>No image(s) found...</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <div class="col-sm-12 col-md-4 col-lg-4"> <?php
                    include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM project_details added ORDER BY prj_date DESC LIMIT 2,1");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){

                            $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/project_image/'.$row["thumb_image"];
                                $prj_date = $row["prj_date"];
                                
                                $prj_name = $row["prj_name"];
                                $prj_con = $row["short_desc"];
                               
            	?>

                <div class="col-sm-12">
                    <div class="event border-1px mb_30">


                        <div class="causes sm-col5-center">
                            <div class="thumb">
                                <img class="rounded-circle" alt="" src="<?php echo $imageURL; ?>" alt="">
                                <div class="donate-piechart">
                                    <div class="piechart-block">

                                    </div>
                                </div>
                            </div>

                            <div class="causes-details clearfix">
                                <h4 class="title"><a href=""><?php echo $prj_name; ?></a></h4>
                                <ul class="about-causes list-inline clearfix">

                                </ul>
                                <p><?php echo substr($prj_con,0,70)."..."; ?></p>


                                <div>

                                    <form action="image.php" method="post"><input id="prodId" name="prj_name"
                                            type="hidden" value="<?php echo $prj_name; ?>">
                                        <a href="paridhan.php" class="thm-btn btn-xs"><i
                                                class="fa fa-angle-double-right text-white"></i>Read More</a>
                                        <a>
                                            <button type="submit" class="thm-btn inverse btn-xs" name="submit">View More
                                                Images</button>
                                    </form></a>
                                </div>
                                <?php }
            }else{ ?>
                                <p>No image(s) found...</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>




</section>

<!-- | -->

<!--reference
<!--<section class="call-to-action">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="call-to-action-corner col-md-4"
                style="background-image: url(img/call-to-action/left-box-bg.jpg);">
                <div class="single-call-to-action">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-circle"></i>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Udvaban</h3>
                        <p>There are many variations of lorem <br>passagei of Lorem Ipsum availabl </p>
                        <a href="udvaban.html" class="thm-btn inverse">Read More</a>
                    </div>
                </div>
            </div>
            <div class="call-to-action-center col-md-4"
                style="background-image: url(img/call-to-action/center-box-bg.jpg);">
                <div class="single-call-to-action">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-social"></i>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Food Drive</h3>
                        <p>There are many variations of lorem <br>passagei of Lorem Ipsum availabl </p>
                        <a href="#" class="thm-btn inverse">Read More</a>
                    </div>
                </div>
            </div>
            <div class="call-to-action-corner col-md-4"
                style="background-image: url(img/call-to-action/right-box-bg.jpg);">
                <div class="single-call-to-action">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-medical"></i>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Events</h3>
                        <p>There are many variations of lorem <br>passagei of Lorem Ipsum availabl </p>
                        <a href="#" class="thm-btn inverse">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!--Timeline-->
<section class="sec-padding faq-home">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="sec-title style-two">
                    <h2>Know about us</h2>
                    <span class="decor">
                        <span class="inner"></span>
                    </span>
                </div>
                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>
                                <span class="decor">
                                    <span class="inner"></span>
                                </span>
                                <span class="text">Who we are? </span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <p>Sristi is the name of the organisation that we few students have started way back in 2013.We started our journey by aspiring to do social work with a view to empower the under-privileged.  </p>
                            
                            
                        </div>
                    </div>
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>
                                <span class="decor">
                                    <span class="inner"></span>
                                </span>
                                <span class="text">What we do? </span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <p> In our 5 years of journey, we have undertaken various initiatives like Shikshan to empower children living in extremely povertized localities by providing educational materials and support.</p>
                            <p> We also have taken a stand against the usage of plastic and re-used plastic bottles tub in our Sobuj Sankolpo initiative.Clothes drive aka. Paridhan was one of the key projects that we undertook from the very beginning and the most successful venture of ours.</p>
                            <p>Apart from promoting education and undertaking clothes drives we aim to undertake other programs as well, through which we would like to emphasize on awareness campaigns regarding cleanliness, sanitation as well as organizing health camps to cater to the needs of the people. We wish to expand our initiatives into rural Bengal very soon.</p>
                        </div>
                    </div>
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>
                                <span class="decor">
                                    <span class="inner"></span>
                                </span>
                                <span class="text">Why choose us? </span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            
                            <p>The sole motive of our initiative is to make a difference in the society. The organization is strongly committed towards spreading education, providing clothes and setting up sustainable development models along with consistent justice within society.</p>
                            <p>Education, Shelter and Clothes are the basic right of all humans and absolutely necessary for development that fosters economic equilibrium. Shibpur Sristi and all the constituents attached with our organization are greatly committed to the dissemination of Food, Clothes and educational materials among the unprivileged poor section, so that communities can keep on growing at a sustainable pace while improving the quality of life of even the most marginalized sectors of Indian society.</p>
                            <p>Thus, we hope to keep these things in mind while working in the field. We hope to work with conviction, sincerity and selflessness and optimism even in the face of despair.No matter how minute our contribution is, we plan to commit our time and efforts for the betterment of society.</p>
                        </div>
                    </div>
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>
                                <span class="decor">
                                    <span class="inner"></span>
                                </span>
                                <span class="text">What SRISTI stands for? </span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <p>The word Sristi in Bengali means creation, innovation. We certainly hope to ‘innovate’ to alleviate people from misery and present to the society a sustainable model of social work which can be implemented to resolve many issues that we face in our diverse country.

<p>Now what Sristi technically stands for:

<b>S</b>ervice,
<b>R</b>esponsibility,
<b>I</b>nnovation,
<b>S</b>ustainability,
<b>T</b>olerance,
<b>I</b>llumination.</p>
<p>Thus, we hope to keep these things in mind while working in the field. We hope to work with conviction, sincerity and selflessness and optimism even in the face of despair.No matter how minute our contribution is, we plan to commit our time and efforts for the betterment of society.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-md">
                <!--<img src="img/resources/about-1.jpg" alt="Awesome Image/>-->

                <iframe src="https://www.youtube.com/embed/CD0jD6wfL_M" width="40vw" height="315" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen id="youtube-video"></iframe>
            </div>


        </div>
    </div>
</section>



<!--Upcoming Event-->
<section class="event-feature sec-padding bg-color-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 md-col6-center">
                <h4 class="sec-color text-uppercase double-line line-left">Upcoming Event</h4>
                <div class="bx-event-carousel">
                    <div class="event">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="event-thumb">
                                    <div class="thumb">
                                        <img class="full-width" src="img/event/1.jpg" alt="">
                                    </div>
                                    <!--<ul class="event-date">
                                        <li class="date">28</li>
                                        <li class="month">Aug</li>
                                    </ul>-->
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="event-content">
                                    <h5 class="event-title"><a href="paridhan.php">Paridhan</a></h5>
                                    <ul class="event-held list-inline">
                                        <li class="text-555"><i class="fa fa-calendar"></i> September - October</li>
                                        <!--<li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>-->
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita
                                        perspiciatis soluta quidem, recusandae sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="event-thumb">
                                    <div class="thumb">
                                        <img class="full-width" src="img/event/1.jpg" alt="">
                                    </div>
                                    <ul class="event-date">
                                        <!--<li class="date">28</li>
                                        <li class="month">Aug</li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="event-content">
                                    <h5 class="event-title"><a href="event.php">Sobuj Sankalpa</a></h5>
                                    <ul class="event-held list-inline">
                                        <li class="text-555"><i class="fa fa-calendar"></i> June</li>
                                        <!--<li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>-->
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita
                                        perspiciatis soluta quidem, recusandae sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="event-thumb">
                                    <div class="thumb">
                                        <img class="full-width" src="img/event/1.jpg" alt="">
                                    </div>
                                    <ul class="event-date">
                                        <!--<li class="date">28</li>
                                        <li class="month">Aug</li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="event-content">
                                    <h5 class="event-title"><a href="#">Udvaban</a></h5>
                                    <ul class="event-held list-inline">
                                        <li class="text-555"><i class="fa fa-calendar"></i> Quaterly</li>
                                        <!--<li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>-->
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita
                                        perspiciatis soluta quidem, recusandae sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="event-thumb">
                                    <div class="thumb">
                                        <img class="full-width" src="img/event/1.jpg" alt="">
                                    </div>
                                    <ul class="event-date">
                                        <!--<li class="date">28</li>
                                        <li class="month">Aug</li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="event-content">
                                    <h5 class="event-title"><a href="event.php">Food Drive</a></h5>
                                    <ul class="event-held list-inline">
                                        <li class="text-555"><i class="fa fa-calendar"></i> Occasionally</li>
                                        <!--<li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>-->
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita
                                        perspiciatis soluta quidem, recusandae sapiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 md-col6-center m-topm50">
                <h4 class="sec-color text-uppercase double-line line-left">Ongoing Project</h4>
                <div class="featured-causes">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="thumb">
                                <img class="full-width" src="img/causes/b1.jpg" alt="">
                                <div class="causes-progress">
                                    <div class="progress-item">
                                        <div class="progress" data-value="10">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="value-holder"><span class="value"></span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline">
                                        <li>Raised: 10K</li>
                                        <li class="text-thm pull-right">Goal: 200K</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="causes-details">
                                <h3>SHIKSHAN </h3>
                                <p class="p-title"> Our basic motive is to visit rural schools on a regular basis.</p>
                                <p>We will distribute educational materials (in terms of gifts) to underprivileged students studying in primary schools and also motivate them by taking few interactive classes. The whole process will encourage them to come to school.</p>
                                <a class="thm-btn btn-xs" href="donate.php">Donate Now</a>
                                <a class="thm-btn inverse btn-xs" href="shikshan.php">Read More</a>
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
</section>





<!--counter-->
<section class="fact-counter-wrapper sec-padding parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 md-text-center">
                <h2>We are served since <b>6 years</b> <br>to helpless children with trust and <br>we are happy</h2>
                <a href="membership.php" class="thm-btn inverse m-btmm40" style="border:none;">Be a part of us</a>
            </div>
            <div class="col-lg-6 col-md-12 md-text-center">
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-shapes-2"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="70" data-speed="800"
                        data-refresh-interval="50">70</span>
                    <p>Total Places</p>
                </div>
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-people-3"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="6000" data-speed="800"
                        data-refresh-interval="50">6000</span>
                    <p>Total Children</p>
                </div>
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-hands"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="36" data-speed="800"
                        data-refresh-interval="50">36</span>
                    <p>Total Projects</p>
                </div>
            </div>
        </div>
    </div>
</section>





<!--landing-->

<?php
	include 'landing_section.php';
	?>
<!--landing-->


<section class="gallery-section pb_2">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Gallery</h2>
            <p>Here's the moments that we have captured</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
    </div>

    <div class="clearfix">
        <!--Image Box-->
        <!--<div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s1.jpg" class="lightbox-image"><img src="img/gallery/s1.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s2.jpg" class="lightbox-image"><img src="img/gallery/s2.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s2.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s3.jpg" class="lightbox-image"><img src="img/gallery/s3.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s3.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s4.jpg" class="lightbox-image"><img src="img/gallery/s4.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s4.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s5.jpg" class="lightbox-image"><img src="img/gallery/s5.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s5.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s6.jpg" class="lightbox-image"><img src="img/gallery/s6.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s7.jpg" class="lightbox-image"><img src="img/gallery/s7.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>

        <!--Image Box
        <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="img/gallery/s8.jpg" class="lightbox-image"><img src="img/gallery/s8.jpg"
                            alt=""></a></figure>
                <a href="img/gallery/s8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>-->

    <?php
  // Include the database configuration file
  include_once 'db.php';
    // Get images from the database SELECT * FROM images ORDER BY id DESC 
    $query = $conn->query("SELECT * FROM image_db ORDER BY author DESC limit 8");

    if ($query->num_rows > 0) {
      $count = 1;
      while ($row = $query->fetch_assoc()) {
        //////change in server with https://www.shibpursristi.org/web/uploads/
        $imageURL = 'https://www.shibpursristi.org/website/admin/sristi_page/uploads/' . $row["img"];
          ?><!--Image Box-->
           <div class="image-box">
            <div class="inner-box">
                <figure class="image"><a href="<?php echo $imageURL; ?>" class="lightbox-image"><img src="<?php echo $imageURL; ?>"
                            alt=""  style="width:25vw; height:18vw"></a></figure>
                <a href="<?php echo $imageURL; ?>" class="lightbox-image btn-zoom" title="Image Title Here"><span
                        class="icon fa fa-dot-circle-o"></span></a>
            </div>
        </div>        
        
        <?php
        if ($count % 4 == 0) {
            echo '</div><div class="clearfix">
            ';
        }
        $count++;
      }
    } else { 
        echo "<p>No image(s) found...</p>";
    }
 
?></div>
</section>


<section class="footer-call-to-action" style="padding: 15px 0;">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-9 sm-text-center">-->
            <!--    <h3>Here will be any kind lorem ipsum heading</h3>-->
            <!--    <p>There are many variations of passages of Lorem Ipsum available, but the majority have lorem</p>-->
            <!--</div>-->
            <div class="text-center sm-text-center">
                <a href="gallery.php" class="thm-btn inverse m-tops15" >View Full Gallery</a>
            </div>
        </div>
    </div>
</section>


<!--<section class="home-serivce sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Our Mission</h2>
            <p>Lorem ipsum is a dummy text it will use for subtitle here</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-gesture-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Charity For Education</h3>
                        <p>There are many variations of lorem <br>passagei of Lorem Ipsum available <br> but the
                            majority have </p>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-people-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Feed for hungry child</h3>
                        <p>There are many variations of lorem <br>passagei of Lorem Ipsum available <br> but the
                            majority have </p>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-service-home">
                    <div class="icon-box">
                        <div class="inner-box">
                            <i class="flaticon-hand"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Home for homeless</h3>
                        <p>There are many variations of lorem <br>passagei of Lorem Ipsum available <br> but the
                            majority have </p>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>-->




<?php
    include 'testimonial.php';
    ?>




<?php
	include 'footer.php';
	?>